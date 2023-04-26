var mot = prompt("Saisir un mot :");
var count = 0;


for (var i in mot) {
    console.log(mot[i]);
    if (
        mot[i] == "a" ||
        mot[i] == "e" ||
        mot[i] == "i" ||
        mot[i] == "o" ||
        mot[i] == "u" ||
        mot[i] == "y"
    ) {
        count++;
    }
}

console.log("Le nombre de voyelle(s) dans le mot " + "(" + mot + ")" + " est de :\n" + count);
alert("Le nombre de voyelles dans le mot " + "(" + mot + ")" + " est de :\n" + count);
