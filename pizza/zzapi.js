var btn = document.getElementById("btn");
let CreateDivs = document.getElementById("creativedivs");
function CreateDivs(_data) {

}
btn.addEventListener("click", function(){
    fetch("pizza.json")
    .then((response) =>{
        return response.json();
    })
    .then((data) =>{
        console.log(data);
        CreateDivs(data);
    });
});