// for pop out box//

var popup = document.getElementById("welcome-popup");
var closeButton = document.getElementById("close-button");

closeButton.addEventListener("click", function() {
popup.style.display = "none";
});