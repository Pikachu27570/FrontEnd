var PU = prompt("Entrez le prix unitaire ?");
var QTECOM = prompt("Entrez le nombre de quantité ?");
var FDP = 6;
var port = 2;
var REM = 5;
FDP = PU * QTECOM - REM;
alert("Le prix est de : " + FDP + " euros");