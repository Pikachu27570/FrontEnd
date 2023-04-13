var N = prompt("saisir une date de naissance");

function getAge(date) {
    var diff = Date.now() - date.getTime();
    var age = new Date(diff);
    return Math.abs(age.getUTCFullYear() - 1970);
}
alert("vous êtes majeur");
    function getAge(date) {
        var diff = Date.now() - date.getTime();
        var age = new Date(diff);
        return Math.abs(age.getUTCFullYear() - 2020);}
    alert("Vous êtes mineur");
2020