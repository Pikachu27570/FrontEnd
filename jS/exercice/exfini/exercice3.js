
var N1 = parseInt(prompt("Entrez le premier nombre"));
var N2 = parseInt(prompt("Entrer le deuxième nombre"));
var operateur = prompt("Entrez l'opérateur");
//var result = (N1) * - + (N2);
if (isNaN(N1) || isNaN(N2)) {
    alert("erreur !");
    

}
else {
    switch (operateur) {
        case "/":
            alert(N1 / N2)
            console.log("operateur vaut /");
            break;
        case "*":
            alert(N1 * N2);
            console.log("operateur vaut *");
            break;
        case "-":
            alert(N1 - N2);
            console.log("operateur vaut -");
            break;

        case "+":
            alert(N1 + N2);
            console.log("operateur vaut +");
            break;

        default:
            console.log("L'opérateur n'est pas correct");
            break;

    }
}
