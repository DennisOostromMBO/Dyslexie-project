var huidigeGrootte = 16; 
var minGrootte = 10; 
var maxGrootte = 26; 

function vergrootLettertype() {
  var bodyElement = document.querySelector("body");
  if (huidigeGrootte < maxGrootte) { 
    huidigeGrootte += 2; 
    bodyElement.style.fontSize = huidigeGrootte + "px"; 
  }
}

function verkleinLettertype() {
  var bodyElement = document.querySelector("body");
  if (huidigeGrootte > minGrootte) { 
    huidigeGrootte -= 2; 
    bodyElement.style.fontSize = huidigeGrootte + "px"; 
  }
}