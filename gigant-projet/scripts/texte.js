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
  
  