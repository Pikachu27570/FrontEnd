// Tableau contenant les prénoms
var prenoms = ["Axel", "Alessandro", "Séverine", "Jessica", "Coralie", "Kevin", "Kevin", "Manu", "  Eloise", "Joffrey", "Kaz", "Math", "Prisci", "Michel", "Guillaume", "Stéphane", "Quinn", "Rose", "Sandra", "Tom"];

// Saisie du prénom au clavier
var prenomRecherche = prompt("Saisissez un prénom à rechercher :");

// Recherche du prénom dans le tableau
var index = prenoms.indexOf(prenomRecherche);

// Vérification si le prénom a été trouvé
if (index !== -1) {
  // Élimination du prénom en décalant les cases suivantes
  for (var i = index; i < prenoms.length - 1; i++) {
    prenoms[i] = prenoms[i + 1];
  }
  
  // Mettre à blanc la dernière case
  prenoms[prenoms.length - 1] = "";
  
  // Affichage du tableau après l'élimination
  console.log(prenoms);
} else {
  console.log("Le prénom n'a pas été trouvé dans le tableau.");
}
