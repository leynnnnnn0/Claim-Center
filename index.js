const showClaimOptions = () => {
    const element = document.getElementById("claim-options");
    element.toggleAttribute("show");
}

const handleSelected = (param) => {
    const element = document.getElementById(param);
    if(element.textContent === "select") {
        element.textContent = "unselect";
        
    }else {element.textContent = "select";}
    
    alert(param);
}