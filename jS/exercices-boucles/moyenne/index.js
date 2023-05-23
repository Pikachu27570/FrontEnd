function calculerSommeEtMoyenne() {
    let somme = 0;
    let count = 0;
    let entier;
  
    do {
      entier = parseInt(prompt("Entrez un entier (0 pour arrêter) :"));
      if (!isNaN(entier) && entier !== 0) {
        somme += entier;
        count++;
      }
    } while (entier !== 0);
  
    const moyenne = count !== 0 ? somme / count : 0;
  
    console.log("La somme des entiers est :", somme);
    console.log("La moyenne des entiers est :", moyenne);
  }
  
  // Appel de la fonction pour effectuer les calculs
  calculerSommeEtMoyenne();
  