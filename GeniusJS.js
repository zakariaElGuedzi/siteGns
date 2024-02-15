let PorfolioHeader = document.getElementById('Menu');
let OpenRespoMenu = document.getElementById("OpenMark")
let CloseresponMenu = document.getElementById("ClosePortfl2")
let ResMenu = document.getElementById("Menu2")

function afficherPorf() {
    if (PorfolioHeader.style.display === "" || PorfolioHeader.style.display === "none") {
        PorfolioHeader.style.display = "flex";
    } else if (PorfolioHeader.style.display === "flex") {
        PorfolioHeader.style.display = "none"
    }
}

function ClosePortfli() {
    PorfolioHeader.style.display = "none";
    document.body.style.overflowY = "scroll"

}
OpenRespoMenu.addEventListener("click",()=>{
    ResMenu.style.display = "flex"
    document.body.style.overflowY = "hidden"
})
CloseresponMenu.addEventListener("click",()=>{
    ResMenu.style.display = "none"
    document.body.style.overflowY = "scroll"
})
// footer year
let date = new Date();
let year = date.getFullYear();
let yearTimeFtr = document.getElementById('yearFoot')
yearTimeFtr.innerHTML = `Privacy Policy | ©  ${year} Genius Center Design By GenuisCenter`



function chngMaps(event) {
    let btnmaps = event.target.getAttribute('data-map-url');
    let villeNom = event.target.id;
    let adressNom = event.target.getAttribute('adressNom');
    document.querySelector('.framMaps').src = btnmaps ;
    document.querySelector('.villeNomMaps').innerHTML = villeNom ;
    document.querySelector('.adressMaps').innerHTML = adressNom ;
}

var buttonVilles = document.getElementsByClassName("buttonVilles");
var btns = document.getElementsByClassName("Mapsbutton")
for (var i = 0; i < btns.length; i++) { 
    btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current [0].className.replace("active", "");
    this.className += " active" 
})}
