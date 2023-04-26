var N;
var i = 0;
var resultat = "";

while (N != "") {
    N = prompt("Saississez un nombre :" +
        "\n(Laissez la case vide puis confirmez pour arrêter la saisie)");
    if (N != "" && N < 0) {
        resultat += "\n" + parseInt(N);
    }
}

console.log("Le(s) nombre(s) saisi(s) inférieur(s) à N est/sont :" + resultat + "\n");
alert("Le(s) nombre(s) saisi(s) inférieur(s) à N est/sont :" + resultat + "\n"); 