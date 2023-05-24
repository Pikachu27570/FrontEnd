let playAgain = true;

while (playAgain) {
  // Générer un nombre aléatoire entre 1 et 100
  const randomNumber = Math.floor(Math.random() * 100) + 1;

  let guess = parseInt(prompt("Devinez le nombre magique (entre 1 et 100) :"));

  while (guess !== randomNumber) {
    if (guess > randomNumber) {
      alert("Trop grand !");
    } else {
      alert("Trop petit !");
    }

    guess = parseInt(prompt("Essayez encore :"));
  }

  alert("Bravo, vous avez trouvé le nombre magique !");
  playAgain = confirm("Voulez-vous rejouer ?");
}

alert("Merci d'avoir joué !");

