/*Crée une page Html contenant 2 radio-buttons exlusifs l'un de l'autre,
un bouton simple, et un champ texte (pour le moment la balse de structure
    <for> importe peu et on peu l'ignorer). Lorsque l'on clique sur le
    bouton Choix, le texte associé au radio-bouton sélectionné est recopié
    dans le champ texte.*/

    function copyText() {
        var radio = document.getElementsByName("options");
        var resultat = document.getElementById("resultat");

        for (var i =0; i <radio.length; i++) {
            if (radio[i].checked){
                resultat.value = radio[i].value;
                break;
            }
        }
    }
    /*Dans ce code, nous avons créé deux radio-boutons avec les valeurs "Option 1"
     et "Option 2" et les avons regroupés en utilisant le même attribut name pour les
      rendre exclusifs l'un de l'autre. Nous avons également ajouté un bouton avec un
       événement onclick qui appelle la fonction copyText() lorsque l'utilisateur clique
        dessus.

La fonction copyText() récupère tous les radio-boutons avec le même nom en utilisant la
 méthode document.getElementsByName() et vérifie lequel est sélectionné en utilisant la
  propriété checked. Si un radio-bouton est sélectionné, sa valeur est copiée dans le champ
   texte en utilisant la propriété value de l'élément input correspondant.*/