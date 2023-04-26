var N;
var i = 0;
var tableau = new Array();
var somme = 0;
var moyenne = 0;


while (N != 0) {
    N = prompt("Saississez un nombre :" +
        "\n(Entrez 0 puis confirmez pour arrêter la saisie)");
    if (N != 0) {
        tableau.push(parseInt(N));
        somme += parseInt(N);
        moyenne = parseFloat(somme / tableau.length);
        i++;
    }
}

console.log("La somme du/des nombre(s) saisi(s) est de :\n" + somme +
    "\nLa moyenne du/des nombre(s) saisi(s) est de :\n" + moyenne);
alert("La somme du/des nombre(s) saisi(s) est de :\n" + somme +
    "\nLa moyenne du/des nombre(s) saisi(s) est de :\n" + moyenne);