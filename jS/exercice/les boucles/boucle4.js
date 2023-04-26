var nb1, nb2;
var somme = 0;


nb1 = prompt("Saississez un premier nombre :");
nb2 = prompt("Saississez un deuxième nombre :");

for (var i = nb1; i <= nb2; i++) {
    somme += parseInt(i);
}

console.log("La somme des nombres saisis de n1 à n2 est de :\n" + somme);
alert("La somme des nombres saisis de n1 à n2 est de :\n" + somme); 