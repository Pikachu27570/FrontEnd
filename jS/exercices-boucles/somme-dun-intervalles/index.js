function calculerSomme(n1, n2) {
    let somme = 0;
    for (let i = n1; i <= n2; i++) {
      somme += i;
    }
    return somme;
  }
  
  // Saisie des nombres n1 et n2
  const n1 = parseInt(prompt("Entrez le premier nombre :"));
  const n2 = parseInt(prompt("Entrez le deuxième nombre :"));
  
  // Vérification des entrées
  if (isNaN(n1) || isNaN(n2)) {
    console.log("Veuillez entrer des nombres valides.");
  } else {
    // Calcul de la somme
    const resultat = calculerSomme(n1, n2);
    console.log("La somme des entiers de", n1, "à", n2, "est :", resultat);
  }
  