let tableau = [];
let somme = 0;
let compteur = 0;

while(true){
  let valeur = Number(window.prompt("Entrez une valeur numérique (0 pour terminer)"));

  if(valeur === 0){
    break;
  }
  
  tableau.push(valeur);
  somme += valeur;
  compteur++;
}

let moyenne = somme / compteur;

console.log("Nombre de valeurs saisies : " + compteur);
console.log("Somme des valeurs saisies : " + somme);
console.log("Moyenne des valeurs saisies : " + moyenne);