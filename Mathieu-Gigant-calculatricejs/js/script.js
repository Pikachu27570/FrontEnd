//coder une calculatrice javascript//

function calculerIMC() {
    // Récupérer les valeurs de poids et de taille entrées par l'utilisateur
    var nom = document.getElementById("nom").value;
    var poids = parseFloat(document.getElementById("poids").value);
    var tailleCM = parseFloat(document.getElementById("taille").value);
    // Vérifier si les valeurs sont valides
    if (nom === "" || isNaN(poids) || isNaN(tailleCM) || poids <= 0 || tailleCM <= 0) {
        // Afficher un message d'erreur si les valeurs ne sont pas valides
        document.getElementById("resultat").innerHTML = "Veuillez entrer des valeurs valides pour le poids et la taille.";
        return;
    }
    // Convertir la taille en centimètre
    var tailleM = tailleCM / 100; // Conversion de mètre en centimètre

    // Calculer l'IMC
    var imc = poids / (tailleM * tailleM);

    // Afficher l'IMC
    document.getElementById("resultat").innerHTML = " IMC: " + imc.toFixed();


    // Déterminer la catégorie de corpulence en fonction de l'IMC
    var categorie = "";
    if (imc < 18.5) {
        categorie = "Maigre";
    } else if (imc < 25) {
        categorie = "Corpulence normale";
    } else if (imc < 30) {
        categorie = "Surpoids";
    } else if (imc < 35) {
        categorie = "Obésité modérée";
    } else if (imc < 40) {
        categorie = "Obésité sévère";
    } else {
        categorie = "Obésité morbide";
    }

    // Afficher la catégorie de corpulence
    document.getElementById("categorie").innerHTML = " nom : " + nom + "<br> poids : " + poids + "<br> taille en cm: " + tailleCM + " <br> " + categorie;

}