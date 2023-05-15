var options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
};

var booksList = new Array();
var authorsList = new Array();
var listCategories = new Array();

window.addEventListener("load", jsonOnLoad());

function jsonOnLoad() {
    fetch("books.json")
        .then((response) => {
            return response.json();
        })
        .then((booksData) => {
            console.log(booksData);
            createList(booksData);
        });
}
function createList(_data) {
    for (var x = 0; x < _data.length; x++) {
        var book = _data[x];
        booksList.push(book);

        //on crée la listes des auteurs
        for (var y = 0; y < book.authors.length; y++) {
            var author = book.authors[y];

            if (authorsList.indexOf(author) == -1) {
                authorsList.push(author);
            }
        }
        //ici on créera la liste des catégories
        for (var y = 0; y < book.categories.length; y++) {
            var categorie = book.categories[y];

            if (listCategories.indexOf(categorie) == -1) {
                listCategories.push(categorie);
            }
        }
    }
    //tri alphabétique des listes
    booksList.sort();
    authorsList.sort();
    booksList.sort();
    listCategories.sort();

    for (var x = 0; x < authorsList.length; x++) {
        var option = document.createElement("option");
        option.value = authorsList[x];
        option.innerText = authorsList[x];
        document.getElementById("listAuthors").appendChild(option);
    }
    for (var x = 0; x < listCategories.length; x++) {
        var option = document.createElement("option")
        option.value = listCategories[x];
        option.innerText = listCategories[x];
        document.getElementById("listCategories").appendChild(option);
    }
    showBooks(booksList);
}

function showBooks(_booksList) {
    document.getElementById("booksList").innerHTML = "";
    for (var y = 0; y < _booksList.length; y++) {
        var BookCard = document.createElement("div");
        BookCard.setAttribute("class", "card mb-4");

        if (
            _booksList[y].thumbnailUrl == undefined ||
            _booksList[y].thumbnailUrl == null) {
            _booksList[y].thumbnailUrl =
                "https://p1.storage.canalblog.com/14/48/1145642/91330992_o.png";
        }

        var titre;
        if (_booksList[y].title.length > 20) {
            titre = _booksList[y].title.substring(0, 20) + " (...)";
        } else {
            titre = _booksList[y].tittle;
        }

        var description;
        var descriptionshort;

        if (
            _booksList[y].shortDescription == undefined ||
            _booksList[y].shortDescription == null
        ) {
            description = "";
            descriptionshort = "";
        }
        else {
            if (_booksList[y].shortDescription.length > 20) {
                descriptionshort = _booksList[y].shortDescription.substring(0, 20) + " (...)";
                description = _booksList[y].shortDescription;
            }
            else {
                descriptionshort = _booksList[y].shortDescription;
                description = _booksList[y].shortDescription;
            }
        }

        var datePubli;
        try {
            datePubli = new Date(
                _booksList[y].publishedDate.dt_txt).toLocaleDateString(
                    "fr-FR", options);

        } catch (error) {
            datePubli = "Pas de date de publication";
        }
        BookCard.innerHTML = '<img src="' +
            _booksList[y].thumbnailUrl +
            '"/>' +
            '<h1 class="bookTitle"><span class="infobulle" title="' +
            _booksList[y].tittle +
            '">' +
            titre +
            "</span></h1>" +
            '<h4>' + datePubli +
            '</h4>';
        if (description !="") {
            BookCard.innerHTML +=
                '<h4><span class="infobulle" title="' +
                _booksList[y].shortDescription +
                '">' +
                description + "</span></h4>";
        }
        document.getElementById("booksList").appendChild(BookCard);
    }
}