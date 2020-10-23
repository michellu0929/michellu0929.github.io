var shootingstar = {name: 'Shootingstar'}; // global

var make_shootingstar = function () { // attaches functions down, update and draw to shootingstar object

    var balls = [];
    var balls_i = 0;

    shootingstar.down = function (e) {
        
        balls[balls_i] = {
            x: e.x,
            y: e.y,
            vx: -1 + Math.random() * 2, // -1 ... 1
            vy: -1 + Math.random() * 2
        }
        
        balls_i += 1;
        
        if(balls_i > 10) {
            balls_i = 0;
        }
        
    };

    shootingstar.update = function () {
        balls.forEach(function (b) {
            if(b.x > window.innerWidth || b.x < 0 ){
            b.vx *= -1;
            };
            if(b.y > window.innerHeight || b.y < 0 ){
            b.vy *= -1;
            };
            
            b.x += b.vx *5; 
            b.y += b.vy *5;
        });
    };

    shootingstar.draw = function (ctx) { // ctx is coming from multistar.html
        ctx.fillStyle = rgba_rand({r:.5,g:.5,a:1});
        ctx.lineWidth = 1;
        ctx.lineJoin = 'round';
        ctx.beginPath();
        balls.forEach(function (b) {
            ctx.arc(b.x-.5, b.y-.5, Math.floor((Math.random()*5) +0), 0, Math.PI*2, true);
            ctx.fill();
            ctx.closePath(); 
        });
    };

};

make_shootingstar();