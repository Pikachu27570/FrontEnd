
let = document.querySelector('p');
let  = document.getElementById('command');
 let = document.getElementById('addinnerspace')
 let = document.getElementById('addouterspace')
 let = document.getElementById('toggle')
 let = document.getElementById('"1-comment')
 let = document.getElementById('2-comment')
 let = document.getElementById('1-annote')
 let = document.getElementById ('2-annote')
 let = document.getElementById('3-comment')
 let = document.getElementById ('3-annote')
 let = document.getElementById('4-comment')
 let = document.getElementById('5-comment')

 let comment = "i = 42";
let i = getNumber(comment);
console.log(i); // affiche 42

function getNumber(comment) {
    let i = 0;
    while (i < comment.length.test(comment[i])) {
      i++;
    }
    let j = i;
    while (j < comment.length.test(comment[i])) {
      j++;
    }
    return parseInt(comment.substring(i, 0));
  }
  let comment2 = document.getElementById("2-annote");
let comment3 = document.getElementById("3-annote");

// Fonction pour mettre la couleur jaune au survol du commentaire
function onCommentHover() {
    this.style.backgroundColor = "yellow";
  }
