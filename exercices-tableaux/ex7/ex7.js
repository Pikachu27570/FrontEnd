function afficherNombresPremiers(MAX) {
    // Créer un tableau de MAX éléments initialisés à 0
    var tableau = new Array(MAX).fill(0);
  
    // Parcourir le tableau
    for (var i = 2; i < MAX; i++) {
      // Si la case est vide, i est un nombre premier
      if (tableau[i] === 0) {
        console.log(i); // Afficher le nombre premier
        
        // Remplir les cases du tableau indicées par les multiples de i
        for (var j = i * 2; j < MAX; j += i) {
          tableau[j] = 1;
        }
      }
    }
  }
  
  // Demander à l'utilisateur d'entrer un nombre
  var nombre = parseInt(prompt("Entrez un nombre :"));
  
  // Appeler la fonction pour afficher les nombres premiers inférieurs au nombre donné
  afficherNombresPremiers(nombre);
  