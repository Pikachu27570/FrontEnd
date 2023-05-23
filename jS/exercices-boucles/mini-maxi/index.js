function calculerMoyenneMinMax() {
    var n = parseInt(prompt("Combien de nombres voulez-vous saisir ?"));
    var nombres = [];
    var somme = 0;
    var minimum = Infinity;
    var maximum = -Infinity;
  
    for (var i = 0; i < n; i++) {
      var nombre = parseFloat(prompt("Saisissez le nombre " + (i + 1)));
      nombres.push(nombre);
      somme += nombre;
  
      if (nombre < minimum) {
        minimum = nombre;
      }
  
      if (nombre > maximum) {
        maximum = nombre;
      }
    }
  
    var moyenne = somme / n;
    alert("La moyenne est : " + moyenne);
    alert("Le minimum est : " + minimum);
    alert("Le maximum est : " + maximum);
  }
  
  calculerMoyenneMinMax();
  