var N = parseInt(prompt("Saisir un multiple :"));
var X = parseInt(prompt("Saisir un entier :"));
var saisie = ""; 

//- programme -
//pour comptage (itération) du multiple de X allant de 1 à N alors
for (i = 1; i <= N; i++) {
    saisie += "\n" + i + " x " + X + " = " + i * X; //association et calcul du multiple de X saisi
}
//affichage du multiple de X
console.log("Le multiple de " + X + " est :" + saisie); //affiche dev
alert("Le multiple de " + X + " est :" + saisie); //affiche popup