let ageSaisi;
let genreSaisi;
let bouton = document.getElementById('bouton');
let message = document.getElementById('message');

function verifierImposition() {
    // récupérer la valeur de l'age et du genre avec la fonction .value.
    ageSaisi = document.getElementById('age-saisi').value;
    genreSaisi = document.getElementById('genre-saisi').value;
    //Notre condition : Si age >= 18 et Homme alors, ou si femme et age >= 20 et si femme...
    if (genreSaisi == "H" && ageSaisi >= 18) {
        message.innerHTML = '<div class"alert alert-danger" role="alert">Vous êtes impossable!</div>';
    } else if ((genreSaisi == "F" && ageSaisi >= 20) && (genreSaisi == "F" && ageSaisi <= 35)) {
        message.innerHTML = '<div class="alert alert-danger" role="alert">Vous êtes impossable!</div>';
    } else {
        message.innerHTML = '<div class"alert alert-success" role="alert">Vous êtes non impossable!</div>';
    }
}
//Ajout d'un écouteur d'événement sur le bouton qui au click appelera la fonction verifierImposition();
bouton.addEventListener('click', verifierImposition, false);