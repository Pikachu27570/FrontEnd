
function determinerTarif() {
    var age = parseInt(document.getElementById("age").value);
    var permis = parseInt(document.getElementById("permis").value);
    var accidents = parseInt(document.getElementById("accidents").value);
    var dureeContrat = parseInt(document.getElementById("dureeContrat").value);
    var tarif = "";

    if (age < 25 && permis < 2) {
      if (accidents === 0) {
        tarif = "rouge";
      } else {
        tarif = "refusé";
      }
    } else if ((age < 25 && permis >= 2) || (age >= 25 && permis < 2)) {
      if (accidents === 0) {
        tarif = "orange";
      } else if (accidents === 1) {
        tarif = "rouge";
      } else {
        tarif = "refusé";
      }
    } else if (age >= 25 && permis >= 2) {
      if (accidents === 0) {
        tarif = "vert";
      } else if (accidents === 1) {
        tarif = "orange";
      } else if (accidents === 2) {
        tarif = "rouge";
      } else {
        tarif = "refusé";
      }
    }

    if (dureeContrat > 1 && tarif !== "refusé") {
      if (tarif === "vert") {
        tarif = "vert";
      } else if (tarif === "orange") {
        tarif = "orange";
      } else if (tarif === "rouge") {
        tarif = "rouge";
      }
    }

    document.getElementById("resultat").innerHTML = "Le tarif d'assurance est : " + tarif;
  }