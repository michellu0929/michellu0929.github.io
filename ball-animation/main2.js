
var a = 0;

$(function () {
 
$(".ball").click(function(){
a = a + 20;
 $("#score").html(a);
});
    
$(".ball1").click(function(){
a = a + 40;
 $("#score").html(a);
});
    
$(".ball2").click(function(){
a = a + 10;
 $("#score").html(a);
});
    
    
});

