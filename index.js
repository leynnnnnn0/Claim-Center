const showClaimOptions = () => {
    const element = document.getElementById("claim-options");
    element.toggleAttribute("show");
}

const handleSelected = () => {
    const element = document.getElementById("select-button");
    element.textContent = "unselect";
}