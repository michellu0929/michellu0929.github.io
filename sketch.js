

function setup() {
 var cnv = createCanvas(windowWidth, windowHeight);
    cnv.style('display', 'block');
  strokeWeight(1);
let colorr = ['#ff00d8', '#66ffca'];
let colorrr = random(colorr);
    stroke(colorrr);
    
}


function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
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