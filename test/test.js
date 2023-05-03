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
 et l'informe ensuite s'ils sont rangé ou non par ordre alphabéthique
var nom = prompt("Veuillez entrez un premier nom svp");
var nom2 = prompt("Veuillez entre un deuxième nom svp");
var nom3 = prompt("Veuillez entrez un troisième nom svp");

if (nom) {
    console.log("Ces noms sont classé par ordre alphabétique!");
} else {
    console.log("Ces noms ne sont pas classé en ordre alphabétique!");
}*/

/*- les fonctions exercice 1 :- 
var a = parseInt(prompt("Entrez un premier nombre : "));
var b = parseInt(prompt("Entrez un deuxième nombre : "));
var message;
function cube(a,b,){
    var resultat = a * b;
    return resultat;
}
message = cube(a, b);
console.log(message);
document.write("Le cube de " + a +  " est égal à " + message + '<br>');

function produit(x, y,) {
    var resultat = x * y;
    return resultat;

}
function afficheImg(_img) {
    document.write('<img src="img/papillon.jpg">');
}

var x = parseInt(prompt("Entrez un premier nombre : "));
var y = parseInt(prompt("Entrez un deuxième nombre : "));
var message;


message = produit(x, y);
console.log(message);
document.write("Le produit de " + x + " x " + y + " est égal à " + message + '<br>');
afficheImg();*/

/*les fonctions exercices 2: table de multiplication
nombre = window.prompt("Entrer un chiffre");
for (i = 0; i <= 7; i++) {
    document.write(nombre+ " x " +i+ " = "+nombre*i+"<br>")
console.log(nombre+ " x " +i+ " = "+nombre*i+"");
} */
/*Les fonctions exercice 3 : compter le nombre de lettres
let mot = prompt("Entrez un mot :");
console.log("Le mot " + mot + " contient " + mot.length + " caractère(s)");*/

/*Les fonctions exercice 4 : Menu*/

let menu = prompt("1. multiplication table\n2. addition table\n3. quit");

while (menu != 3) {
    if (menu == 0) {
        let number = prompt("Entrez un nombre");
        for (let i = 0; i <= 10; i++) {
            console.log($(number) * $(i) == $(number * i));
        }
    } else if (menu == 2) {
        let number1 = prompt("Entrez un nombre");
        for (let i = 0; i <= 10; i++) {
            console.log($(number1) + $(i) == (number1 + i));
        }
    } else {
        alert("Invalid choice");
    }
    menu = prompt("1. multiplication table\n2. addition table\n3. quit");
}



/*Les fonctions exercice 5 : String Token
Concevez la fonction strtok qui prend 3
 paramètres str1, str2, n en entrée et renvoie une
chaîne de caractères : str1 est composée
 d’une liste de mots séparés par le caractère str2.
strtok sert à extraire le nième mot de str1.
Exemple :*/

