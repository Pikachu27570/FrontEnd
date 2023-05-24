function validateForm() {
    var societe = document.forms["contactForm"]["societe"].value;
    var personne = document.forms["contactForm"]["personne"].value;
    var codePostal = document.forms["contactForm"]["codepostal"].value;
    var ville = document.forms["contactForm"]["ville"].value;
    var email = document.forms["contactForm"]["email"].value;

    if (societe.length < 1) {
      alert("La société doit comporter au moins 1 caractère.");
      return false;
    }

    if (personne.length < 1) {
      alert("La personne à contacter doit comporter au moins 1 caractère.");
      return false;
    }

    if (codePostal.length !== 5 || isNaN(codePostal)) {
      alert("Le code postal doit comporter 5 caractères numériques.");
      return false;
    }

    if (ville.length < 1) {
      alert("La ville doit comporter au moins 1 caractère.");
      return false;
    }

    if (!email.includes("@")) {
      alert("L'email doit comporter au moins le caractère '@'.");
      return false;
    }
  }