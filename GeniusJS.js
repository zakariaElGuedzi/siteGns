let PorfolioHeader = document.getElementById('Menu');
let OpenRespoMenu = document.getElementById("OpenMark")
let CloseresponMenu = document.getElementById("ClosePortfl2")
let ResMenu = document.getElementById("Menu2")

function afficherPorf() {
    // var PorfolioHeader = document.getElementById("PorfolioHeader");

    if (PorfolioHeader.style.display === "" || PorfolioHeader.style.display === "none") {
        PorfolioHeader.style.display = "flex";
    } else if (PorfolioHeader.style.display === "flex") {
        PorfolioHeader.style.display = "none";
    }
}

function ClosePortfli() {
    PorfolioHeader.style.display = "none";
}
OpenRespoMenu.addEventListener("click",()=>{
    ResMenu.style.display = "flex"
})
CloseresponMenu.addEventListener("click",()=>{
    ResMenu.style.display = "none"

})
// footer year
let date = new Date();
let year = date.getFullYear();
let yearTimeFtr = document.getElementById('yearFoot')
yearTimeFtr.innerHTML = `Privacy Policy | c ${year} Genius Center Design By GenuisCenter `