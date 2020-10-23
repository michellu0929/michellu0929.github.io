{var linestar = {name: 'Constellation'}; // global

var make_linestar = function () { // attaches functions down, update and draw to shootingstar object

    //var balls = [];
    var max = 10;
    var balls = [], balls_i = 0;//, points = [ ];
    var last_x, last_y;

    linestar.down = function (e) {
        balls[balls_i] = {
            x: e.x,
            y: e.y,
            vx: Math.floor((Math.random()*10) -1),
            vy: 3
        }

        balls_i += 1;

        if(balls_i > max) {
            balls_i = 0;
            balls = [];
        }
        
    };
    

    


    linestar.update = function () {
       balls.forEach(function (b) {            


            balls.forEach(function (b2) {
                var diX = b.x - b2.x,
                diY = b.y - b2.y;

                if(b != b2){
                
                if (diY >= 500){
                b.vy *= -1;
                }
                if(diX >= 500){
                b.vx *= -1;
                }
            };
                
            b.x += b.vx / 25;
            b.y += b.vy / 25;
                
            });
     });
    };
    

    
    linestar.draw = function (ctx) { // ctx is coming from multistar.html
        
        ctx.strokeStyle = rgba_rand({r:.5,g:.5,a:1});
        ctx.lineWidth = 2;
        ctx.lineJoin = 'round';
        ctx.beginPath();
        
        ctx.font="20px futura";

        
        
        balls.forEach(function (b, i) {

            
            //for (var i = 0; i < balls.length; i++) {
               
                            
                ctx.lineTo(b.x-.5,b.y-.5);
                ctx.stroke();
                ctx.arc(b.x-.5, b.y-.5, 1, 0, Math.PI*2, true);
//                ctx.closePath();
                
                ctx.fillStyle = rgba_rand({r:.5,g:.5,a:1});
                ctx.fillText(max-i , b.x+5, b.y-5);
                
            
                
            //};
            
            
        });
        


        
        
    };

};

make_linestar();}