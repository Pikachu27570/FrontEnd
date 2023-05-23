// Demande à l'utilisateur de saisir un mot
var mot = prompt("Entrez un mot :");

// Convertit le mot en minuscules pour simplifier la vérification des voyelles
mot = mot.toLowerCase();

// Initialise le compteur de voyelles à zéro
var nombreVoyelles = 0;

// Parcourt chaque lettre du mot
for (var i = 0; i < mot.length; i++) {
    // Récupère la lettre courante
    var lettre = mot.substr(i, 1);

    // Vérifie si la lettre est une voyelle en la comparant avec une liste de voyelles
    if (lettre === "a" || lettre === "e" || lettre === "i" || lettre === "o" || lettre === "u") {
        // Incrémente le compteur de voyelles
        nombreVoyelles++;
    }
}

// Affiche le nombre de voyelles dans le mot saisi
console.log("Le mot", mot, "contient", nombreVoyelles, "voyelle(s).");
