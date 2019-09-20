

function setup() {
  createCanvas(displayWidth, displayHeight);
  strokeWeight(1);
let colorr = ['#ff00d8', '#66ffca'];
let colorrr = random(colorr);
    stroke(colorrr);
    
}

function draw() {

    if (mouseIsPressed === true) {
    line(mouseX, mouseY, pmouseX, pmouseY);
let colorr = ['#ff00d8', '#66ffca'];
let colorrr = random(colorr);
    stroke(colorrr);

   // ellipse(mouseX, mouseY, 3, 3);
  }
}



function mouseReleased(){
let colorr = ['#ff00d8', '#66ffca'];
let colorrr = random(colorr);

   // ellipse(mouseX, mouseY, 3, 3);
}