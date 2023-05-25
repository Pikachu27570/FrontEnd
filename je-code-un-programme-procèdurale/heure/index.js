// Demande à l'utilisateur l'heure, les minutes et les secondes
let heure;
let minute;
let seconde;
let valeurModifie;
let bouton = document.getElementById('bouton');
let message = document.getElementById('message');
// afficher l'heure//

function afficherHeure(){
    heure = parseInt(document.getElementById('valeur-heure').value);
    minute = parseInt(document.getElementById('valeur-minute').value);
    seconde = parseInt(document.getElementById('valeur-seconde').value);
    
    // Incrémente les secondes//
seconde = seconde +1;
if(seconde == 60){
    seconde = "00";
     // Incrémente les minutes//
    minute = minute + 1;
}
if(minute == 60){
    minute = "00";
    heure = heure +1;
}
// Incrément les heures//
if(heure == 24){
    heure = "00";
}
valeurModifie = heure +'h'+ minute +'min'+ seconde +'sec';
message.innerHTML = valeurModifie;
}
bouton.addEventListener('click', afficherHeure, false);
