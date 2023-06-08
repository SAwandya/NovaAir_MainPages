// Booking Box
var content1 = document.getElementById("content1");
var content2 = document.getElementById("content2");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var bookingBox = document.getElementById("booking-box");

function openSearchFlights() {
  content1.style.transform = "translateX(0)";
  content2.style.transform = "translateX(200%)";
  btn1.style.color = "#fff";
  btn2.style.color = "#7048e8";
  btn1.style.backgroundColor = "#7048e8";
  btn2.style.backgroundColor = "#fff";
  bookingBox.style.height = "250px";
}
function openManageFlights() {
  content1.style.transform = "translateX(200%)";
  content2.style.transform = "translateX(0)";
  btn1.style.color = "#7048e8";
  btn2.style.color = "#fff";
  btn1.style.backgroundColor = "#fff";
  btn2.style.backgroundColor = "#7048e8";
  bookingBox.style.height = "180px";
}

// Best Destination cards
var destinationCard1 = document.getElementById("destination1");
var destinationPara1 = document.getElementById("destination-para1");
var destinationHeading1 = document.getElementById("destination-heading1");
var destinationButton1 = document.getElementById("destination-button1");

var destinationCard2 = document.getElementById("destination2");
var destinationPara2 = document.getElementById("destination-para2");
var destinationHeading2 = document.getElementById("destination-heading2");
var destinationButton2 = document.getElementById("destination-button2");

var destinationCard3 = document.getElementById("destination3");
var destinationPara3 = document.getElementById("destination-para3");
var destinationHeading3 = document.getElementById("destination-heading3");
var destinationButton3 = document.getElementById("destination-button3");

var destinationCard4 = document.getElementById("destination4");
var destinationPara4 = document.getElementById("destination-para4");
var destinationHeading4 = document.getElementById("destination-heading4");
var destinationButton4 = document.getElementById("destination-button4");

function showDetails1() {
  destinationCard1.style.backgroundImage = "none";
  destinationCard1.style.backgroundColor = "#7048e8";
  destinationCard1.style.boxShadow = "0 0.5rem 1rem #7048e8";
  destinationCard1.style.transition = "all 1s";
  destinationPara1.style.opacity = "100%";
  destinationHeading1.style.color = "#fff";
  destinationButton1.style.color = "#7048e8";
  destinationButton1.style.backgroundColor = "#fff";
}
function showDetails2() {
  destinationCard2.style.backgroundImage = "none";
  destinationCard2.style.backgroundColor = "#7048e8";
  destinationCard2.style.boxShadow = "0 0.5rem 1rem #7048e8";
  destinationCard2.style.transition = "all 1s";
  destinationPara2.style.opacity = "100%";
  destinationHeading2.style.color = "#fff";
  destinationButton2.style.color = "#7048e8";
  destinationButton2.style.backgroundColor = "#fff";
}
function showDetails3() {
  destinationCard3.style.backgroundImage = "none";
  destinationCard3.style.backgroundColor = "#7048e8";
  destinationCard3.style.boxShadow = "0 0.5rem 1rem #7048e8";
  destinationCard3.style.transition = "all 1s";
  destinationPara3.style.opacity = "100%";
  destinationHeading3.style.color = "#fff";
  destinationButton3.style.color = "#7048e8";
  destinationButton3.style.backgroundColor = "#fff";
}
function showDetails4() {
  destinationCard4.style.backgroundImage = "none";
  destinationCard4.style.backgroundColor = "#7048e8";
  destinationCard4.style.boxShadow = "0 0.5rem 1rem #7048e8";
  destinationCard4.style.transition = "all 1s";
  destinationPara4.style.opacity = "100%";
  destinationHeading4.style.color = "#fff";
  destinationButton4.style.color = "#7048e8";
  destinationButton4.style.backgroundColor = "#fff";
}

function hideDetails1() {
  destinationCard1.style.backgroundImage = "url('../images/paris1.jpg')";
  destinationCard1.style.boxShadow = "none";
  destinationPara1.style.opacity = "0%";
  destinationHeading1.style.color = "#000";
  destinationButton1.style.color = "#fff";
  destinationButton1.style.backgroundColor = "#845ef7";
}
function hideDetails2() {
  destinationCard2.style.backgroundImage = "url('../images/tokyo1.jpg')";
  destinationCard2.style.boxShadow = "none";
  destinationPara2.style.opacity = "0%";
  destinationHeading2.style.color = "#000";
  destinationButton2.style.color = "#fff";
  destinationButton2.style.backgroundColor = "#845ef7";
}
function hideDetails3() {
  destinationCard3.style.backgroundImage = "url('../images/rome1.jpg')";
  destinationCard3.style.boxShadow = "none";
  destinationPara3.style.opacity = "0%";
  destinationHeading3.style.color = "#000";
  destinationButton3.style.color = "#fff";
  destinationButton3.style.backgroundColor = "#845ef7";
}
function hideDetails4() {
  destinationCard4.style.backgroundImage = "url('../images/sydney1.jpg')";
  destinationCard4.style.boxShadow = "none";
  destinationPara4.style.opacity = "0%";
  destinationHeading4.style.color = "#000";
  destinationButton4.style.color = "#fff";
  destinationButton4.style.backgroundColor = "#845ef7";
}
