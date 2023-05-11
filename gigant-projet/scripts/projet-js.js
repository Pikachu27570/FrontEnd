/* Aller chercher un/des éléments dans le document*/

let annote = document.getElementsByClassName('annote');
console.log(annote);
let command = document.querySelector('command');
console.log(command);
let span = document.getElementsByTagName('span');
console.log(span);
let comment = document.getElementsByTagName('comment');
console.log(comment);
let p = document.getElementsByTagName('p');
console.log(p);
let div = document.getElementsByTagName('div');
console.log(div);

let commentaire = "i = 6";
function getNumber(chaine) {
  /* Supprimer les caractères non-numériques au début de la chaîne*/
  let number = '';
  for (let i = 0; i < chaine.length; i++) {
    if (!isNaN(chaine[i])) {
      number += chaine[i];
    } else if (number !== '') {
      break;
    }
  }
  return parseInt(number);
}

