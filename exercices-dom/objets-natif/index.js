let valeurs = [];
let saisie = parseInt(window.prompt("Entrez une valeur numérique (0 pour arrêter la saisie) :"));

while (saisie !== 0) {
  valeurs.push(saisie);
  saisie = parseInt(window.prompt("Entrez une valeur numérique (0 pour arrêter la saisie) :"));
}

let nombreValeurs = valeurs.length;
let somme = 0;

for (let i = 0; i < nombreValeurs; i++) {
  somme += valeurs[i];
}

let moyenne = somme / nombreValeurs;

console.log("Nombre de valeurs saisies : " + nombreValeurs);
console.log("Somme des valeurs : " + somme);
console.log("Moyenne des valeurs : " + moyenne);
