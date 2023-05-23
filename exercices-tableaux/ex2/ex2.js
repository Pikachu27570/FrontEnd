function GetInteger(message) {
    while (true) {
        let input = prompt(message);
        let number = parseInt(input);
        if (!isNaN(number)) {
            return number;
        }
        alert("Veuillez entrer un entier valide.");
    }
}

function InitTab() {
    let size = GetInteger("Entrez le nombre de postes souhaité : ");
    return new Array(size).fill(0);
}

function SaisieTab(tab) {
    for (let i = 0; i < tab.length; i++) {
        tab[i] = GetInteger("Entrez la valeur du poste " + i + " : ");
    }
}

function AfficheTab(tab) {
    for (let i = 0; i < tab.length; i++) {
        console.log("Poste " + i + " : " + tab[i]);
    }
}

function RechercheTab(tab) {
    let index = GetInteger("Entrez l'index du poste à afficher : ");
    if (index >= 0 && index < tab.length) {
        console.log("Contenu du poste " + index + " : " + tab[index]);
    } else {
        console.log("Index invalide.");
    }
}

function InfoTab(tab) {
    let max = Math.max(...tab);
    let sum = tab.reduce((acc, val) => acc + val, 0);
    let average = sum / tab.length;
    console.log("Maximum : " + max);
    console.log("Moyenne : " + average);
}

function Menu() {
    let tableau = [];

    while (true) {
        console.log("=== MENU ===");
        console.log("1. Créer et initialiser le tableau");
        console.log("2. Saisir les valeurs du tableau");
        console.log("3. Afficher le contenu du tableau");
        console.log("4. Afficher un poste du tableau");
        console.log("5. Afficher le maximum et la moyenne du tableau");
        console.log("0. Quitter");

        let choix = GetInteger("Entrez votre choix : ");

        switch (choix) {
            case 1:
                tableau = InitTab();
                break;
            case 2:
                SaisieTab(tableau);
                break;
            case 3:
                AfficheTab(tableau);
                break;
            case 4:
                RechercheTab(tableau);
                break;
            case 5:
                InfoTab(tableau);
                break;
            case 0:
                return;
            default:
                console.log("Choix invalide.");
        }
    }
}

Menu();
