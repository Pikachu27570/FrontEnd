let elt1 = document.querySelector("p");
let elt2 = document.querySelector("command");
let elt3 = document.getElementById("addinnerspace");
let elt4 = document.getElementById("addouterspace");
let elt5 = document.getElementById("toggle");
let elt6 = document.getElementById("annote");

let comment = "i = 42";
function getNumber(chaine) {
  /* Supprimer les caractères non-numériques au début de la chaîne*/
  let number = '';
  for (let i = 0; i < chaine.length; i++) {
    if (!isNaN(chaine[i])) {
      number += chaine[i];
    } else if (number !== '') {
      break;
    }}
  return parseInt(number);
}
// Récupère tous les commentaires de la page
const commentaires = document.querySelectorAll('.commentaire');

// Ajoute un écouteur d'événements à chaque commentaire
commentaires.forEach(commentaire => {
  commentaire.addEventListener('mouseover', () => {
    commentaire.style.backgroundColor = 'yellow'; // Ajoute un surlignage jaune
  });

  commentaire.addEventListener('mouseout', () => {
    commentaire.style.backgroundColor = 'yellow'; // Supprime le surlignage
  });
});