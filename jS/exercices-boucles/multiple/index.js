// Demande à l'utilisateur d'entrer les valeurs de N et X
var N = parseInt(prompt("Entrez la valeur de N :"));
var X = parseInt(prompt("Entrez la valeur de X :"));

// Boucle for pour calculer les N premiers multiples de X
for (var i = 1; i <= N; i++) {
  var multiple = i * X;
  console.log(i + " x " + X + " = " + multiple);
}