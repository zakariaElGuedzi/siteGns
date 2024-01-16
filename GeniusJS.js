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
    document.body.style.overflow = "scroll"

}
OpenRespoMenu.addEventListener("click",()=>{
    ResMenu.style.display = "flex"
    document.body.style.overflow = "hidden"
})
CloseresponMenu.addEventListener("click",()=>{
    ResMenu.style.display = "none"
    document.body.style.overflow = "scroll"
})
// footer year
let date = new Date();
let year = date.getFullYear();
let yearTimeFtr = document.getElementById('yearFoot')
yearTimeFtr.innerHTML = `Privacy Policy | c ${year} Genius Center Design By GenuisCenter `