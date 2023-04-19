var PU;
var QTECOM;
var P;
var FDP = 6;
var FDP2;
var PRIXTTC;
var PRIXREMISE;
var PRIXFDP;
 
PU=prompt(" Prix unitaire?");
QTECOM=prompt("Quantité?");
 
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
