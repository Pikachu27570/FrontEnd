/*manipuler le DOM

// aller chercher un/des éléments dans le document*/
let annote = document.getElementsByClassName('annote');
console.log(annote);
let span = document.getElementsByTagName('span')
let command = document.querySelector("command");
let comment = document.getElementsByTagName("comment");
console.log(comment);
let p = document.getElementsByTagName("p");
console.log(p);
let div = document.getElementsByTagName('div');
console.log(div);
/*Supprimer les caractères non-numériques au début de la chaîn*/
let commentaire = "i = 42";
function getNumber(chaine) {

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
document.querySelector("span").style.backgroundColor = "yellow";