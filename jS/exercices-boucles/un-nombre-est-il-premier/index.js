function estPremier(nombre) {
    if (nombre <= 1) {
      return false;
    }
  
    // Vérifier les diviseurs de 2 à la racine carrée du nombre
    for (let diviseur = 2; diviseur <= Math.sqrt(nombre); diviseur++) {
      if (nombre % diviseur === 0) {
        return false;
      }
    }
  
    return true;
  }
  
  // Exemples de test
  console.log(estPremier(7));   // true
  console.log(estPremier(12));  // false
  console.log(estPremier(23));  // true
  console.log(estPremier(1));   // false
  console.log(estPremier(0));   // false
  