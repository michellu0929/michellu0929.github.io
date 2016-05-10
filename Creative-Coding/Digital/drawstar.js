var drawstar = {name: 'Milky Way'}; // global

var make_drawstar = function () { // attaches functions down, update and draw to shootingstar object

    //var balls = [];
    var max = 150;
    var is_drawing = false, balls = [], balls_i = 0;//, points = [ ];
    var last_x, last_y;

    drawstar.down = function (e) {
        is_drawing = true;
        last_x = e.x;
        last_y = e.y;
    };
    
    drawstar.move = function (e) {
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
    
    drawstar.up = function (e) {
        is_drawing = false;
    }

    drawstar.update = function () {
       balls.forEach(function (b) {
//           
//            b.x += b.vx / 10;
//            b.y += b.vy / 5;


     });
    };
    
    drawstar.draw = function (ctx) { // ctx is coming from multistar.html
        ctx.fillStyle = rgba_rand({r:.5,g:.5,a:.67});
       var po = Math.floor((Math.random()*6) +0)
        balls.forEach(function (e) {
             ctx.beginPath();
            
            ctx.arc(e.x-.5, e.y-.5, Math.floor((Math.random()*6) +0), 0, Math.PI*2, true);
//            ctx.ellipse(e.x+po, e.y+po, Math.floor((Math.random()*3) +0), Math.floor((Math.random()*3) +0), 45 * Math.PI/180, 0, 2 * Math.PI);
            ctx.fill();
            ctx.closePath();
            
        });
    };

};

make_drawstar();