/*var age = prompt('Quel est votre age ?');

if (age <= 13){
    console.log("Vous pouvez allez voir Lilo et Sticht")
} else if (age > 13 &&  age < 18){
    console.log(" Vous pouvez allez voir Matrix")
}
else{
    console.log("Vous pouvez allez voir Evil Dead")
}
var naissance = prompt("Quel est votre année de naissance ?")

if (naissance <= 2000){
    console.log("Vous êtes majeur")
} else if (naissance > 2015){
    console.log("Vous êtes mineur")
}
*/
/*
var films = prompt("Quel genre de film proposez vous ?")


if (films) {
    alert("Voici le genre de films que nous vous proposons :\n1 Horreur(s),\n2 Drame(s),\n3 Action(s),\n4 Comédie(s),\n5 Thrillers,\n6 Policier(s),\n7 Docummentaire(s),\n8 Romantique(s),\n9 Western(s)\n")
}
var series = prompt("Ou bien quel genre de séries vous proposez ?")
if (films) {
     alert("Ce que nous vous proposons en séries :\n1 Horreur(s),\n2 Drame(s),\n3 Action(s),\n4 Comédie(s),\n5 Thrillers,\n6 Policier(s),\n7 Docummentaire(s),\n8 Romantique(s),\n9 Western(s)")
}
else{
    alert(" Aucun genre de films ou de séries ne m'interesse")
}
*/

/* Calculatrice
var a = prompt('Entrez un premier nombre');
var b = prompt('Entrez un deuxième nombre');
var result = a * b
let signe
if (isNaN(result)) {
    console.log("Opération impossible: ${a}x${b}")
}
else {
    if (result >= 0) {
    ="positif";
    } else{
        signe="négatif";
    }
    console.log("${a}x${b}=${result} est ${signe}")
}
*/
/*
let x = 25;
let y = 0;

if ((x > 1) == false){
    alert("x contient une valeur inférieure à 1");
}
if ((x == y) == false){
    alert("x et y ne contiennent pas la même valeur");
}

if (y == false){
    alert("La valeur de y est évaluée à false");
}
*/
/*
var nb1 = prompt("Entrez un premier nombre svp");
var nb2 = prompt("Entrez un deuxième nombre svp");

if (nb1 > 0 && nb2 > 0 || nb1 < 0 && nb2 < 0) {
    
console.log("Ce produit est positif");
}
else{
    console.log("Ce nombre est négatif");
}
*/
/*Ecrire un algorithme qui demande trois noms à l'utilisateur
 et l'informe ensuite s'ils sont rangé ou non par ordre alphabéthique */
var nom = prompt("Veuillez entrez un premier nom svp");
var nom2 = prompt("Veuillez entre un deuxième nom svp");
var nom3 = prompt("Veuillez entrez un troisième nom svp");

if (nom) {
    console.log("Ces noms sont classé par ordre alphabétique!");
} else {
    console.log("Ces noms ne sont pas classé en ordre alphabétique!");
}