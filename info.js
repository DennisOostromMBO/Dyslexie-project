var huidigeGrootte = 16; // de standaard lettergrootte in pixels
var minGrootte = 6; // de minimale lettergrootte in pixels
var maxGrootte = 26; // de maximale lettergrootte in pixels

function vergrootLettertype() {
  var bodyElement = document.querySelector("body");
  if (huidigeGrootte < maxGrootte) { // controleer of de huidige grootte kleiner is dan het maximum
    huidigeGrootte += 2; // verhoog de huidige grootte met 2
    bodyElement.style.fontSize = huidigeGrootte + "px"; // pas de stijl aan
  }
}

function verkleinLettertype() {
  var bodyElement = document.querySelector("body");
  if (huidigeGrootte > minGrootte) { // controleer of de huidige grootte groter is dan het minimum
    huidigeGrootte -= 2; // verlaag de huidige grootte met 2
    bodyElement.style.fontSize = huidigeGrootte + "px"; // pas de stijl aan
  }
}