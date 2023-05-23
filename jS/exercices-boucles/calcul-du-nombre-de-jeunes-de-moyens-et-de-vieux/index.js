let age;
let countLessThan20 = 0;
let countBetween20And40 = 0;
let countGreaterThan40 = 0;

do {
  age = parseInt(prompt("Entrez un âge (ou un nombre supérieur à 100 pour arrêter) :"));

  if (age < 20) {
    countLessThan20++;
  } else if (age >= 20 && age <= 40) {
    countBetween20And40++;
  } else if (age > 40) {
    countGreaterThan40++;
  }
} while (age <= 100);

console.log("Nombre de personnes d'âge strictement inférieur à 20 ans :", countLessThan20);
console.log("Nombre de personnes d'âge compris entre 20 ans et 40 ans (inclus) :", countBetween20And40);
console.log("Nombre de personnes d'âge strictement supérieur à 40 ans :", countGreaterThan40);
