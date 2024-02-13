function vergrootLettertype() {
    var bodyElement = document.querySelector("body");
    var huidigeGrootte = window.getComputedStyle(bodyElement, null).getPropertyValue("font-size");
    var nieuweGrootte = parseInt(huidigeGrootte) + 2;
    bodyElement.style.fontSize = nieuweGrootte + "px";
}

function verkleinLettertype() {
    var bodyElement = document.querySelector("body");
    var huidigeGrootte = window.getComputedStyle(bodyElement, null).getPropertyValue("font-size");
    var nieuweGrootte = parseInt(huidigeGrootte) - 2;
    bodyElement.style.fontSize = nieuweGrootte + "px";}