async function initialize() {
    var map = L.map('map').setView([44.82, -0.5], 11);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    
    let response = await fetch(GEOCHAT_API_URL + "/api/messages" + new URLSearchParams({
        'address': '12 rue Sainte Catherine, Bordeaux',
        'radius': 2.5
    }));
};

window.onload = initialize();