async function initialize() {
    let message_template = `
        <div class="col-sm-12">
        <div class="card m-2">
            <div class="card-header">
                <h5 class="card-title">
                    {{user}}
                    <span class="badge rounded-pill text-bg-primary float-end">
                        {{distance}}m
                    </span>
                </h5>
            </div>
            <div class="card-body">
                <p>{{text}}</p>
                <small>{{date}}</small>
            </div>
        </div>
        </div>
    `;

    fetch(GEOCHAT_API_URL + "/api/messages?" + new URLSearchParams({
        'address': '10 rue Sainte Catherine, Bordeaux'
    })).then(async (response) => {
        let data = await response.json();
        let html = '';

        for (let result of data.results) {
            let message = result.message;
            console.log(message);

            let card = message_template;
            card = card.replace('{{text}}', message.text);
            card = card.replace('{{distance}}', result.distance.toFixed(2));
            card = card.replace('{{user}}', message.user ? message.user.email : '?');
            card = card.replace('{{date}}', new Date(message.date).toLocaleString());
            html += card;
        }

        document.querySelector('.messages').innerHTML = html;
    });

    document.querySelector('form.search-form').addEventListener("submit", (event) => {
        event.preventDefault(true);
        // TODO: Traiter le formulaire
    });
};

window.addEventListener("load", initialize);