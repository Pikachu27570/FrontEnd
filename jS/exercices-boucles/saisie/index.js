function enregistrerPrenom() {
    var prenom = document.getElementById("prenom").value;
    if (prenom !== "") {
      console.log(prenom);
      document.getElementById("prenom").value = "";
      document.getElementById("prenom").focus();
    } else {
      var prenomsEnregistres = document.getElementsByClassName("prenoms-enregistres")[0];
      var prenoms = document.getElementsByClassName("prenom-saisi");
      var nombrePrenoms = prenoms.length;
      var prenomsTexte = "";
      for (var i = 0; i < prenoms.length; i++) {
        prenomsTexte += prenoms[i].innerText + "<br>";
      }
      prenomsEnregistres.innerHTML = "Nombre de prénoms enregistrés : " + nombrePrenoms + "<br><br>Prénoms saisis :<br>" + prenomsTexte;
    }
  }