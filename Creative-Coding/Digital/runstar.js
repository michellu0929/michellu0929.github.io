var runstar = {name: 'Stars'}; // global

var runstar_can = document.createElement('canvas');
var runstar_ctx = runstar_can.getContext('2d');
runstar_can.width = window.innerWidth;
runstar_can.height =  window.innerHeight;

var make_runstar = function () { // attaches functions down, update and draw to shootingstar object

    //var balls = [];
    var max = 0;
    var balls = [], balls_i = 0;//, points = [ ];

    var is_drawing = false, balls = [], balls_i = 0;//, points = [ ];
    var last_x, last_y;

    runstar.down = function (e) {
        is_drawing = true;
        last_x = e.x;
        last_y = e.y;
    };
    
    runstar.move = function (e) {
    
     if (is_drawing) {
    
            balls[balls_i] = {
                x: e.x,
                y: e.y,
                vx: 0,
                vy: 0
//                vx: Math.floor((Math.random()*10) -1),
//                vy: Math.floor((Math.random()*10) +1)
            }
 
            balls_i += 1;
              
            if(balls_i > max) {
                balls_i = 0;
            }
           
        }
        
    };
    

        
    runstar.up = function (e) {
        is_drawing = false;
    }


    runstar.update = function () {
       balls.forEach(function (b) {            
//            if(b.x > window.innerWidth || b.x < 0 ){
//            b.vx *= -1;
//            };
//            if(b.y > window.innerHeight || b.y < 0 ){
//            b.vy *= -1;
//            };
           
//
//            balls.forEach(function (b2) {
//                var diX = b.x - b2.x,
//                diY = b.y - b2.y;
//
//                if(b != b2){
//                if(b2.x > window.innerWidth || b2.x < 0 ){
//                b2.vx *= -1;
//                };
//                if(b2.y > window.innerHeight || b2.y < 0 ){
//                b2.vy *= -1;
//                };
//
//                if (diY !=0){
//                b.vy += -(1 / (diY));
//                }
//                if(diX != 0){
//                b.vx += -(1 / (diX));
//                }
//                }
//            });
            b.x += -b.vx;
            b.y += -b.vy;
        });

    };
    
    runstar.draw = function (ctx) { // ctx is coming from multistar.html
//        runstar_ctx.strokeStyle = rgba_rand({r:.5,g:.5,a:1});
        var size = Math.floor((Math.random()*50) -20);
        var size2 = Math.floor((Math.random()*50) -20);
        runstar_ctx.lineWidth = 1;
        runstar_ctx.lineJoin = 'round';
        runstar_ctx.beginPath();
        balls.forEach(function (b) {
            runstar_ctx.fillStyle = rgba_rand({r:.5,g:.5,a:1});

            runstar_ctx.arc(b.x-.5, b.y-.5, Math.floor((Math.random()*2) +1), 0, Math.PI*2, true);
           runstar_ctx.fill();

                 runstar_ctx.closePath(); 

        });

        
        ctx.drawImage(runstar_can, 0, 0);
        
    };

};





make_runstar();