function sommeInferieure(N) {
    let somme = 0;
    for (let i = 0; i < N; i++) {
      somme += i;
    }
    return somme;
  }
  
  // Exemple d'utilisation
  const N = 10;
  const resultat = sommeInferieure(N);
  console.log("La somme des nombres inférieurs à", N, "est :", resultat);