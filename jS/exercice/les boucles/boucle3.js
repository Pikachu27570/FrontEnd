var N;
var i = 0;
var somme = 0;

while (N )
{
    N = prompt("Saississez un nombre :" +
        "\n(Laissez la case vide puis confirmez pour arrêter la saisie)");
    if (N != "" && N < 0) {
        somme += parseInt(N);
        i++;
    }
}
console.log("La somme du/des nombre(s) saisi(s) inférieur(s) à N est de :\n" + somme);
alert("La somme du/des nombre(s) saisi(s) inférieur(s) à N est de :\n" + somme);