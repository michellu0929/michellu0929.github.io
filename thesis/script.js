$(document).ready(function() {
  	  $('body').addClass('js');
		  var $menu = $('#menu'),
		  	  $menulink = $('.fontawesome-reorder'),
		  	  $menuTrigger = $('.has-subnav > a');
		
		$menulink.click(function(e) {
			e.preventDefault();
			$menulink.toggleClass('active');
			$menu.toggleClass('active');
		});
		
		$menuTrigger.click(function(e) {
			e.preventDefault();
			var $this = $(this);
			$this.toggleClass('active').next('ul').toggleClass('active');
		});
		
		});

//==========


$(document).ready(function() {
$("#send").click(function () {
    $(".pop2").fadeIn(1);
});
$(".pop2 > span, .pop2").click(function () {
$(".pop2").hide();
$("#pop").hide();
});
});



$(window).scroll(function(){
    var toplocation = $(window).scrollTop();
    
    if(toplocation > 376)
        $("#zero").css("color","#8bbdd2"), 
        
        $("#contact").mouseover(function(){
        $("#contact").css("color", "white")}),
        
        $("#about").mouseover(function(){
        $("#about").css("color", "white")}),
        
        $("#ppl").mouseover(function(){
        $("#ppl").css("color", "white")}),
            
        $("#zero").mouseover(function(){
        $("#zero").css("color", "white")}),
        
        $("#contact, #about, #ppl").mouseout(function(){
        $("#contact, #about, #ppl").css("color", "rgb(177, 177, 177)")}),

        $("#zero").mouseout(function(){
        $("#zero").css("color", "#8bbdd2")}) ;
        
    else {
        if(toplocation < 376)
        $("a").mouseout(function(){
        $("a").css("color", "rgb(177, 177, 177)")}) 
        $("input, a").css("color", "rgb(177, 177, 177)");
    }
    
    
    if(toplocation > 752)
       $("#zero").css("color","rgb(177, 177, 177)"), 
        $("#about").css("color","#8bbdd2"), 
        
        $("#contact").mouseover(function(){
        $("#contact").css("color", "white")}),
        
        $("#about").mouseover(function(){
        $("#about").css("color", "white")}),
        
        $("#ppl").mouseover(function(){
        $("#ppl").css("color", "white")}),
            
        $("#zero").mouseover(function(){
        $("#zero").css("color", "white")}),
        
        $("#contact, #zero, #ppl").mouseout(function(){
        $("#contact, #zero, #ppl").css("color", "rgb(177, 177, 177)")}),

        $("#about").mouseout(function(){
        $("#about").css("color", "#8bbdd2")}) ;
       else {
        if(toplocation < 752)
        $("#about").css("color","rgb(177, 177, 177)");
    }

    if(toplocation > 1428)
       $("#about").css("color","rgb(177, 177, 177)"), 
        $("#ppl").css("color","#8bbdd2"), 
        
        $("#contact").mouseover(function(){
        $("#contact").css("color", "white")}),
        
        $("#about").mouseover(function(){
        $("#about").css("color", "white")}),
        
        $("#ppl").mouseover(function(){
        $("#ppl").css("color", "white")}),
            
        $("#zero").mouseover(function(){
        $("#zero").css("color", "white")}),
        
        $("#contact, #zero, #about").mouseout(function(){
        $("#contact, #zero, #about").css("color", "rgb(177, 177, 177)")}),

        $("#ppl").mouseout(function(){
        $("#ppl").css("color", "#8bbdd2")}) ;
       else {
        if(toplocation < 1428)
        $("#ppl").css("color","rgb(177, 177, 177)");
    }
    
    if(toplocation > 2428)
       $("#ppl").css("color","rgb(177, 177, 177)"), 
        $("#contact").css("color","#8bbdd2"), 
        
        $("#contact").mouseover(function(){
        $("#contact").css("color", "white")}),
        
        $("#about").mouseover(function(){
        $("#about").css("color", "white")}),
        
        $("#ppl").mouseover(function(){
        $("#ppl").css("color", "white")}),
            
        $("#zero").mouseover(function(){
        $("#zero").css("color", "white")}),
        
        $("#ppl, #zero, #about").mouseout(function(){
        $("#ppl, #zero, #about").css("color", "rgb(177, 177, 177)")}),

        $("#contact").mouseout(function(){
        $("#contact").css("color", "#8bbdd2")}) ;
       else {
        if(toplocation < 2428)
        $("#contact").css("color","rgb(177, 177, 177)");
    }

    
//    
//     if(toplocation > 700)
//         $(".nav2 i").removeClass("fa-circle");
//    
//    
//    
//    
//                if(toplocation < 4450)
//        $("body").removeClass("pack");
//    else
//    {
//        if(!$("body").hasClass("pack"))
//            $("body").addClass("pack");
//    }
//    
//    if(toplocation > 4900)
//        $("body").removeClass("pack");

});




