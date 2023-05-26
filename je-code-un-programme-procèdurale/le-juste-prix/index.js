    // Liste des objets à deviner
   const nomObjet = ['une console ps5','un piano','une voiture','une tv','un fauteuil gaming'];
   const imageObjet = ['console.png','piano.png','voiture.png','tv.png','fauteuil.png'];
   let prixPropose;
   let prixMystere;
   let nbreAleatoire;
   let compteurTentative;
   let image = document.getElementById('objet');
   let nomImage = document.getElementById('nom-objet');
   let bouton = document.getElementById('bouton');
   let message = document.getElementById('message');
  
 let affichageTentative = document.getElementById('nbre-tentative');

 function genererUnchiffre(valeurMax) {
    return Math.floor(Math.random() * Math.floor(valeurMax));
 }
 prixMystere = genererUnchiffre(100) + 1;
 nbreAleatoire = genererUnchiffre(5);

 function afficherImage(valeur) {
    return '<img src="/le-juste-prix/img/' + valeur + '" class="img-fluid" width="30%">';
 }
image.innerHTML = afficherImage(imageObjet[nbreAleatoire]);
nomImage.innerHTML = nomObjet[nbreAleatoire];
compteurTentative = 10;
affichageTentative.innerHTML = "Il vous reste" + compteurTentative + " tentatives...";