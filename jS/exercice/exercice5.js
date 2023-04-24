
var Salaire = prompt("Entrez le salaire mensuel du salariee");
var C = ("\ Celibataire (Tapez 1) \n");
var M = ("\ Marié (Tapez 2) \n"); 
var P, Salaire, M;
var E;
if (Salaire < 5000) {
    M = 10;
} else {
    M = 2;
}
switch (C, M, P, E) {
    case 1:
        P = 20;
        P = P + (M * P);
        if (P > 50) { P = 50; }
        console.log("Le montant de la participation est de: %.2f %%", P);
        
        break;

    case 2:
        P = 25;
        console.log("Entrez le nombre d'enfants: ");
        
        P = P + E * 10;
        P = P + (M * P);
        if (P > 50) { P = 50; }
        console.log("Le montant de la participation est de: %.2f %%", P);
        
        break;

    default:
        console.log("Erreur! Choix non valide.");
        
        break;
}
