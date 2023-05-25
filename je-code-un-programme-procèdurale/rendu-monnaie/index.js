//on entre les variable et les élements//
let totalSaisi;
let monnaieSaisi;
let aRendre;
let nbr10euros;
let nbr5euros;
let nbr1euros;

let message10 = document.getElementById('message10');
let message5 = document.getElementById('message5');
let message1 = document.getElementById('message1');

message10.innerHTML = "0";
message5.innerHTML = "0";
message1.innerHTML = "0";

//calcul de la monnaie

function calaculerMonnaie(){

    totalSaisi = document.getElementById('total').value;
    monnaieSaisi = document.getElementById('monnaie').value;

    aRendre = monnaieSaisi - totalSaisi;
    nbr10euros = 0;
    while(aRendre >= 10){
        nbr10euros = nbr10euros + 1;
        aRendre = aRendre -10;
    }
    nbr5euros = 0;
    while(aRendre >= 5){
        nbr5euros = nbr5euros + 1;
        aRendre = aRendre - 5;
    }
    message10.innerHTML = nbr10euros;
    message5.innerHTML = nbr5euros;
    message1.innerHTML = aRendre;
}
document.getElementById('button').addEventListener('click', calaculerMonnaie, false);