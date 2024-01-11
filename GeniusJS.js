let PorfolioHeader = document.getElementById('Menu');

function afficherPorf() {
    // Get the computed style
    let computedStyle = window.getComputedStyle(PorfolioHeader);

    // Check the display property in the computed style
    if (computedStyle.display === "none") {
        PorfolioHeader.style.display = "flex";
    } else {
        PorfolioHeader.style.display = "none";
    }
}
function ClosePortfli() {
    PorfolioHeader.style.display = "none";
}

// footer year
let date = new Date();
let year = date.getFullYear();
let yearTimeFtr = document.getElementById('yearFoot')
yearTimeFtr.innerHTML = `Privacy Policy | c ${year} Genius Center Design By GenuisCenter `