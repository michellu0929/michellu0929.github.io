var can = document.getElementsByTagName('canvas')[0];
var ctx = can.getContext('2d');
var ph = document.getElementsByTagName('p')[0];

can.width = window.innerWidth;
can.height = window.innerHeight;
console.log('welcome');

ph.classList.remove('hidden');




//            var current_tool = drawstar;
var brushes = [
    drawstar,
    shootingstar,
    linestar,
    runstar
];



var brushes_i = 0;

var current_tool = brushes[brushes_i];
var prev_tool = brushes[brushes_i-1];
var next_tool = brushes[brushes_i+1];

//        
//function myFunction(){
//    var spa = document.getElementById('clear-run')[0];
//           if(brushes_i = 3){
//        console.log('hihi');
//        spa.classList.remove('hidden');  
//        }else{span.classList.add('hidden')};
//};

    
window.onmousedown = function(e) {
    ph.classList.add('hidden');
    current_tool.down(e);
};

window.onmousemove = function(e) {
    if(current_tool.move) {
        current_tool.move(e);
    }
};

window.onmouseup = function(e) {
    if(current_tool.up) {
        current_tool.up(e);
    }
};

var my_timer;
var start_timer = function(){
    clearInterval(my_timer);
    my_timer = window.setInterval(function() {

        shootingstar.update();
        drawstar.update();
        linestar.update();
        runstar.update();


        // clear screen
//                    if(brushes_i === 3){
//                    ctx.fillStyle = 'red';
//                    ctx.fillRect(0, 0, can.width, can.height);};
//                    

        ctx.fillStyle = 'black';
        ctx.fillRect(0, 0, can.width, can.height);

         runstar.draw(ctx);
        shootingstar.draw(ctx);
        drawstar.draw(ctx);
        linestar.draw(ctx);
       

    }, 30);
};

var stop_timer = function() {
    clearInterval(my_timer);
    my_timer = undefined;
};

start_timer();


var current_html = document.getElementById("current");
var prev_html = document.getElementById("prev");
var next_html = document.getElementById("next");

var downloadCanvas = function(link, canvasId, filename) {
    link.href = document.getElementById(canvasId).toDataURL();
    link.download = filename;
}

window.onkeydown = function(e){

    if(e.keyCode === 13){
        linestar.update();
    };



    if(e.keyCode === 39){

        //                    ph.classList.add('hidden');

        // % modulo operator gets remainder of the division
        brushes_i = (brushes_i + 1) % brushes.length;
//                    0, 1, 2, 3, 0, 1, 2, 3, 0

//                    if(brushes_i >= 3 ){
//                    brushes_i = 0
//                    }

        current_tool = brushes[brushes_i];


        var prev_index = (brushes_i-1);
        if(prev_index < 0) { prev_index = 3; }
        var next_index = (brushes_i+1) % brushes.length;

        console.log(prev_index, next_index);

        prev_tool = brushes[prev_index];
        next_tool = brushes[next_index];

        console.log(current_tool.name);
        console.log(prev_tool.name);


        current_html.innerHTML = current_tool.name;
        prev_html.innerHTML = prev_tool.name;
        next_html.innerHTML = next_tool.name;
        
        
        var spa = document.getElementById('clear-run');
        
        if(brushes_i == 3){
        console.log('hihi');
        spa.classList.remove('hidden');  
        }else{spa.classList.add('hidden')};
 
//
//        current_html.style.animation = 'none';
//        setTimeout(function() {
//        current_html.style.animation = '';
//        }, 10);
//
//        prev_html.style.animation = 'none';
//        setTimeout(function() {
//        prev_html.style.animation = '';
//        }, 10);
    };

    if(e.keyCode === 37){


        brushes_i = brushes_i -= 1;


        if(brushes_i <= -1){
        brushes_i = 3
        }


        var prev_index = (brushes_i-1);
        if(prev_index < 0) { prev_index = 3; }
        var next_index = (brushes_i+1) % brushes.length;

        console.log(prev_index, next_index);

        prev_tool = brushes[prev_index];
        next_tool = brushes[next_index];
        current_tool = brushes[brushes_i];

        console.log(current_tool.name);

        current_html.innerHTML = current_tool.name;
        prev_html.innerHTML = prev_tool.name;
        next_html.innerHTML = next_tool.name;
        
        var spa = document.getElementById('clear-run');
        
        if(brushes_i == 3){
        console.log('hihi');
        spa.classList.remove('hidden');  
        }else{spa.classList.add('hidden')};
        
//        current_html.style.animation = 'none';
//        setTimeout(function() {
//        current_html.style.animation = '';
//        }, 10);
//
//        next_html.style.animation = 'none';
//        setTimeout(function() {
//        next_html.style.animation = '';
//        }, 10);
    }

    
    
    if(e.keyCode === 32){
        var prev_index = (brushes_i-1);
        if(prev_index < 0) { prev_index = 3; }
        var next_index = (brushes_i+1) % brushes.length;

        if(my_timer){
            current_html.innerHTML = "pause";
            next_html.innerHTML = "<a download='Galaxy.png' id='download' href='#'>save image</a>";
            prev_html.innerHTML = " ";
            var dataURL = canvas.toDataURL('image/png');
            document.getElementById('download').href = dataURL;
            stop_timer();

        } else {

            current_html.innerHTML = current_tool.name;
            prev_html.innerHTML = brushes[prev_index].name;
            next_html.innerHTML = brushes[next_index].name;
            start_timer();

        }

    };


    if(e.keyCode === 67){
        console.log("hihi");
    runstar_ctx.clearRect(0, 0, runstar_can.width, runstar_can.height);
    };


};

//function clear_run {
//    console.log("hihi");
//    runstar_ctx.clearRect(0, 0, runstar_can.width, runstar_can.height);
//}

var button = document.getElementById('clear-run');
button.addEventListener('click', function (e) {
    runstar_ctx.clearRect(0, 0, runstar_can.width, runstar_can.height);
});


