
var GEOCHAT_API_URL = "http://localhost:8000";

class GeochatAPI {
    constructor() {
        this.set_is_connected(true);
    }
    
    set_is_connected(value) {
        this.is_connected = value;

        // La classe "is_connected" est ajoutée au <body> en fonction de si l'utilisateur est connecté
        if (this.is_connected) {
            document.querySelector('body').classList.add('is_connected');
        } else {
            document.querySelector('body').classList.remove('is_connected');
        }
    }

    async login(email, password) {
        // TODO: Traiter le formulaire d'identification
        return false;
    }

    logout() {
        // TODO: Déconnecter l'utilisateur
    }
}

var geochatAPI = null;

window.addEventListener("load", () => {
    geochatAPI = new GeochatAPI();
});