var PU = prompt("Entrez le prix unitaire ?");
var QTECOM = prompt("Entrez le nombre de quantité ?");
var  P;
var FDP = 6;
var FDP2;
var REM = 5;
FDP = PU * QTECOM - REM;

var PU;
var QTECOM;
var P;
var FDP = 6;
var FDP2;
var PRIXTTC;
var PRIXREMISE;
var PRIXFDP;
 
P=PU*QTECOM;
 
alert("Le prix est de : "+P+" euros");
 
If (P>200)
{
P*0.9==PRIXREMISE;
}
 
Else (P>100 && P<200)
{
P*0.95==PRIXREMISE;
}
 
If (P<300)
{
P+FDP==PRIXFDP;
}
 
Else (P>300 && P<500)
{
P*0.02==FDP2;
alert("Frais de port de : "+FDP2+" euros");
P+FDP2==PRIXFDP;
}
 
PRIXFDP+PRIXREMISE==PRIXTTC
alert("Vous devez : "+PRIXTTC+" euros");