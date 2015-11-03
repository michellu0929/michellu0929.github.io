
var name = prompt("What is your name?");
document.getElementById("xholder").innerHTML = name;

var bday = prompt("What is your birthday? (MM/DD)");
document.getElementById("xbday").innerHTML = bday;

var color = prompt("What is your faviorte color?");

document.getElementById("xcolor").innerHTML = color;
if (color == "white") {   
    color = "#e0e0e0";    
} 
document.getElementById("xcolor").style.color=color;
document.body.style.background = color;

