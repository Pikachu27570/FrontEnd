// Liste de mots de 14 lettres
var mots = ["abracadabrante", "inconditionnel", "radiocommande", "sophistication", "inaccessible"];

// Sélection aléatoire d'un mot
var motSecret = mots[Math.floor(Math.random() * mots.length)];

// Tableau des lettres déjà proposées par le joueur
var lettresProposees = [];

// Nombre de tentatives restantes
var tentativesRestantes = 9;

// Fonction pour afficher l'état actuel du mot avec les lettres trouvées
function afficherMot(motSecret, lettresTrouvees) {
  var motAffiche = "";
  for (var i = 0; i < motSecret.length; i++) {
    var lettre = motSecret[i];
    if (lettresTrouvees.indexOf(lettre) !== -1) {
      motAffiche += lettre;
    } else {
      motAffiche += "_";
    }
  }
  return motAffiche;
}

// Boucle principale du jeu
while (tentativesRestantes > 0) {
  console.log("Devinez le mot : " + afficherMot(motSecret, lettresProposees));
  console.log("Lettres déjà proposées :", lettresProposees);
  console.log("Tentatives restantes :", tentativesRestantes);
  var proposition = prompt("Entrez une lettre :").toLowerCase();

  // Vérifier si la lettre a déjà été proposée
  if (lettresProposees.indexOf(proposition) !== -1) {
    console.log("Vous avez déjà proposé cette lettre. Veuillez en choisir une autre.");
    continue;
  }

  // Ajouter la lettre au tableau des lettres proposées
  lettresProposees.push(proposition);

  // Vérifier si la lettre est présente dans le mot secret
  if (motSecret.indexOf(proposition) !== -1) {
    console.log("Bonne réponse !");
    // Vérifier si le joueur a trouvé toutes les lettres du mot
    if (motSecret.split('').every(function (lettre) {
      return lettresProposees.indexOf(lettre) !== -1;
    })) {
      console.log("Félicitations ! Vous avez trouvé le mot :", motSecret);
      break;
    }
  } else {
    console.log("Mauvaise réponse.");
    tentativesRestantes--;
  }
}

// Afficher le message de victoire ou de défaite
if (tentativesRestantes === 0) {
  console.log("Dommage, vous avez perdu ! Le mot était :", motSecret);
} else {
  console.log("Bravo, vous avez gagné !");
}
