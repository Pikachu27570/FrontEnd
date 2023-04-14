//# Demander à l'utilisateur de taper son âge\\ 
var dateNaissance = prompt("Quel es votre date de naissance ?");
var age = 2023 - dateNaissance
prompt("Votre age sera:", age, " ans cete année");

//l'age est supérieur  ou inférieur à 18 ans\\
if (age >= 18)
alert("Vous êtes majeur !");
else
alert("Vous êtes mineur !");