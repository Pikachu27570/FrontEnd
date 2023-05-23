/*let b = document.body;
let newP = document.createElement('p');
let newTexte = document.createTextNode('Texte inséré avec appendChild()');
newP.textContent = 'Paragraphe crée et inséré grâce au JavaScript';//
//ajoute le paragraphe crée comme premier enfant de l'élément body//
b.append(newP, 'Texte inséré avec append()');

/*Ajoute le texte crée comme dernier enfant de l'élément body
b.appendChild(newTexte);

let b = document.body;
let p1 = document.getElementById('p1');
let p2 = document.getElementById('p2');
let newP = document.createElement('p');
let htmlContent ='<strong> et du texte important</strong>';
newP.textContent ='Paragraphe crée et inséré grâce au JavaScript';

/*Ajoute un paragraphe après p1

p1.insertAdjacentElement('afterend', newP);

/*Ajoute le contenu de htmlContent avant la balise fermante de p1

p1.insertAdjacentHTML('beforeend', htmlContent);

/*Ajoute du texte après la balise ouvrante de p2

p2.insertAdjacentText('afterbegin', 'Texte ajouté dans');*/

/*let b = document.body;
let p1 = document.getElementById('p1');
let p4 = b.lastElementChild; //on accède au dernier paragraphe

//On déplace p1 juste avant p4 dans le DOM//

b.insertBefore(p1, p4);*/

/*let p1 = document.querySelector('p');
let p2 = document.getElementById('p2');
let vide = document.getElementById('vide');

p2.setAttribute('class','blue');
vide.innerHTML += 'class : ' +
p1.className + '<br>id : ' + p1.id;*/

// Fonction exécutée lors du clic sur le bouton "Aérer"
function aerer() {
    // Récupérer tous les éléments de classe "comment"
    const comments = document.getElementsByClassName("comment");
  
    // Parcourir les commentaires et ajouter la classe "aere" pour les afficher
    for (let i = 0; i < comments.length; i++) {
      comments[i].classList.add("aere");
    }
  }
  
  // Fonction exécutée lors du survol de la souris sur un commentaire
  function survol(commentId) {
    // Récupérer l'élément du commentaire correspondant à l'ID fourni
    const comment = document.getElementById(commentId);
  
    // Ajouter la classe "survol" pour mettre en évidence le commentaire survolé
    comment.classList.add("survol");
  }
  
  // Fonction exécutée lors du clic sur le bouton "Espacer"
  function espacer() {
    // Récupérer tous les éléments de classe "comment"
    const comments = document.getElementsByClassName("comment");
  
    // Parcourir les commentaires et masquer les commentaires en supprimant la classe "aere"
    for (let i = 0; i < comments.length; i++) {
      comments[i].classList.remove("aere");
    }
  
    // Récupérer tous les éléments de classe "annote"
    const annotations = document.getElementsByClassName("annote");
  
  }  