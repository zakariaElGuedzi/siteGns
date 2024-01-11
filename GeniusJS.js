let PorfolioHeader = document.getElementById('ProftlioHead');

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

