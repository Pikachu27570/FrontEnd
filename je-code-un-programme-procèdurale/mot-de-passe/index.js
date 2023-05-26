function evaluerMotDePasse() {
    var motDePasse = document.getElementById("motDePasse").value;
    var force = evaluerForceMotDePasse(motDePasse);

    var message = "";

    switch (force) {
        case "très sécurisé":
            message = "Mot de passe très sécurisé";
            break;
        case "sécurisé":
            message = "Mot de passe sécurisé";
            break;
        case "moyen":
            message = "Mot de passe moyen";
            break;
        case "dangereux":
            message = "Mot de passe dangereux";
            break;
        default:
            message = "Veuillez entrer un mot de passe";
            break;
    }

    document.getElementById("resultat").innerHTML = message;
}

function evaluerForceMotDePasse(motDePasse) {
    // Votre algorithme personnalisé pour évaluer la force du mot de passe

    if (motDePasse.length >= 8 && /[a-z]/.test(motDePasse) && /[A-Z]/.test(motDePasse) && /\d/.test(motDePasse) && /[!@#$%^&*()\-_=+{};:,<.>]/.test(motDePasse)) {
        return "très sécurisé";
    } else if (motDePasse.length >= 6 && /[a-zA-Z]/.test(motDePasse) && /\d/.test(motDePasse)) {
        return "sécurisé";
    } else if (motDePasse.length >= 6) {
        return "moyen";
    } else {
        return "dangereux";
    }
}