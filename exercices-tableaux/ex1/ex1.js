// Demande la taille du tableau à l'utilisateur
var taille = prompt("Entrez la taille du tableau :");
taille = parseInt(taille); // Convertit la saisie en nombre entier

// Crée un tableau vide
var tableau = [];

// Demande à l'utilisateur de saisir les valeurs du tableau
for (var i = 0; i < taille; i++) {
  var valeur = prompt("Entrez la valeur pour l'élément " + i + " :");
  tableau.push(valeur); // Ajoute la valeur saisie au tableau
}

// Affiche le contenu du tableau
console.log("Contenu du tableau :");
console.log(tableau);
