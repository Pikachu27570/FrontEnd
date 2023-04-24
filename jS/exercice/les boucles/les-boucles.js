
var N; 
var i = 0; 
var mini, maxi;
var tableau = new Array();



while (N != "") {
    N = prompt("Saississez un nombre :" +
        "\n(Laissez la case vide puis confirmez pour arrêter la saisie)"); 
   s
    if (N != "") {
        tableau.push(parseInt(N)); 
        mini = Math.min(...tableau); 
        maxi = Math.max(...tableau); 
        i++; 
    }
}

console.log("Le minimum du/des entier(s) saisi(s) est :\n" + mini +
    "\nLe maximum du/des entier(s) saisi(s) est :\n" + maxi); 
alert("Le minimum du/des entier(s) saisi(s) est :\n" + mini +
    "\nLe maximum du/des entier(s) saisi(s) est :\n" + maxi); 