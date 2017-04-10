$(document).ready(function () {
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
        $(".headd").css("opacity","1"),
    
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
        $(".headd").css("opacity","0"),
            
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
       $("#ppl, #about, #zero, #send, input").css("color","#c9e9ea"), 
        $("#contact").css("color","#fff"), 
        $("input ").css("border-color","#c9e9ea"),
        $("input").addClass("yourclass"),
           
        $("#contact").mouseover(function(){
        $("#contact").css("color", "white")}),
        
        $("#about").mouseover(function(){
        $("#about").css("color", "white")}),
        
        $("#ppl").mouseover(function(){
        $("#ppl").css("color", "white")}),
            
        $("#zero").mouseover(function(){
        $("#zero").css("color", "white")}),
        
        $("#ppl, #zero, #about").mouseout(function(){
        $("#ppl, #zero, #about").css("color", "#c9e9ea")}),

        $("#contact").mouseout(function(){
        $("#contact").css("color", "#fff")}) ;
       else {
        if(toplocation < 2428)
             $("input").removeClass("yourclass"),
                 $("input ").css("border-color",""),
        $("#contact, #about, #zero, #send, input").css("color","rgb(177, 177, 177)");
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


$(function() {
  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 700); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
    
    $('.zeroimg a img, .zeroimg a figcaption').hover(function() {
    $('.detail, .menuu, .subscribe').css("opacity", "0"); 
}).mouseleave(function()
              {
 $('.detail, .menuu, .subscribe').css("opacity", "1");
});
    
    //navi for titles
     $('#biop, #agar, #bamboo, #lotus, .zeroimg a img, .zeroimg a figcaption').hover(function() 
{   
  $('#1 .ct p, #1 .highlite').css("color", "#fff");
         $('.headd').css("fill","#fff");
 $('#1 .ct p, #1 .highlite').css("text-shadow","0px 0px 5px grey");

}).mouseleave(function()
              {
       $('.headd').css("fill","");
$('#1 .ct p, #1 .highlite').css("color", "");
         $('#1 .ct p, #1 .highlite').css("text-shadow","");
});
    
    
//    agar
$('.zeroimg #agarimg img, #agarimg figcaption').hover(function() 
{   $('#1').css("background-image", "url(img/webpage-new.jpg)"); 
 $('.zeroimg a:not(#agarimg)').css("opacity", "0.5");
  $('figcaption:not(#agarimg figcaption)').css("opacity", "0");
 $('#agarimg figcaption').css("color", "#fff");

}).mouseleave(function()
              {
        $('.zeroimg a:not(#agarimg)').css("opacity", "1");
        $('figcaption:not(#agarimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#agarimg figcaption').css("color", "");

});
    
    //    bioplastic
$('.zeroimg #bioimg img, #bioimg figcaption').hover(function() 
{   $('#1').css("background-image", "url(img/Untitled-5.png)"); 
 $('.zeroimg a:not(#bioimg)').css("opacity", "0.5");
  $('figcaption:not(#bioimg figcaption)').css("opacity", "0");
 $('#bioimg figcaption').css("color", "#fff");

}).mouseleave(function()
              {
        $('.zeroimg a:not(#bioimg)').css("opacity", "1");
        $('figcaption:not(#bioimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#bioimg figcaption').css("color", "");

});
    
    //    bamboo
$('.zeroimg #bamimg img, #bamimg figcaption').hover(function() 
{   $('#1').css("background-image", "url(img/webpage-new.jpg)"); 
 $('.zeroimg a:not(#bamimg)').css("opacity", "0.5");
  $('figcaption:not(#bamimg figcaption)').css("opacity", "0");
 $('#bamimg figcaption').css("color", "#fff");

}).mouseleave(function()
              {
        $('.zeroimg a:not(#bamimg)').css("opacity", "1");
        $('figcaption:not(#bamimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#bamimg figcaption').css("color", "");

});
    
    //    lotus
$('.zeroimg #lotusimg img, #lotusimg figcaption').hover(function() 
{   $('#1').css("background-image", "url(img/webpage-new01.jpg)"); 
 $('.zeroimg a:not(#lotusimg)').css("opacity", "0.5");
  $('figcaption:not(#lotusimg figcaption)').css("opacity", "0");
 $('#lotusimg figcaption').css("color", "#fff");

}).mouseleave(function()
              {
        $('.zeroimg a:not(#lotusimg)').css("opacity", "1");
        $('figcaption:not(#lotusimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#lotusimg figcaption').css("color", "");

});
    
    
    //navi
    $('#agar').hover(function() 
{   $('#1').css("background-image", "url(img/webpage-new.jpg)"); 
 $('.zeroimg a:not(#agarimg)').css("opacity", "0.5");
  $('figcaption:not(#agarimg figcaption)').css("opacity", "0");
 $('#agarimg figcaption').css("color", "#fff");
     $('.detail, .subscribe').css("opacity", "0"); 
}).mouseleave(function()
              {
        $('.zeroimg a:not(#agarimg)').css("opacity", "1");
          $('.detail, .subscribe').css("opacity", "1"); 
        $('figcaption:not(#agarimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#agarimg figcaption').css("color", "");
});
    
       //    lotus-navi
$('#lotus').hover(function() 
{   $('#1').css("background-image", "url(img/webpage-new01.jpg)"); 
 $('.zeroimg a:not(#lotusimg)').css("opacity", "0.5");
  $('figcaption:not(#lotusimg figcaption)').css("opacity", "0");
   $('.detail, .subscribe').css("opacity", "0"); 
 $('#lotusimg figcaption').css("color", "#fff");
}).mouseleave(function()
              {
        $('.zeroimg a:not(#lotusimg)').css("opacity", "1");
    $('.detail, .subscribe').css("opacity", "1"); 
        $('figcaption:not(#lotusimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#lotusimg figcaption').css("color", "");
});
    

          //    bamboo-navi
$('#bamboo').hover(function() 
{   $('#1').css("background-image", "url(img/webpage-new01.jpg)"); 
 $('.zeroimg a:not(#bamimg)').css("opacity", "0.5");
  $('figcaption:not(#bamimg figcaption)').css("opacity", "0");
   $('.detail, .subscribe').css("opacity", "0"); 
 $('#bamimg figcaption').css("color", "#fff");
}).mouseleave(function()
              {
        $('.zeroimg a:not(#bamimg)').css("opacity", "1");
    $('.detail, .subscribe').css("opacity", "1"); 
        $('figcaption:not(#bamimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#bamimg figcaption').css("color", "");
});
    
             //    bioplastic-navi
$('#biop').hover(function() 
{   $('#1').css("background-image", "url(img/Untitled-5.png)"); 
 $('.zeroimg a:not(#bioimg)').css("opacity", "0.5");
  $('figcaption:not(#bioimg figcaption)').css("opacity", "0");
   $('.detail, .subscribe').css("opacity", "0"); 
 $('#bioimg figcaption').css("color", "#fff");

}).mouseleave(function()
              {
        $('.zeroimg a:not(#bioimg)').css("opacity", "1");
    $('.detail, .subscribe').css("opacity", "1"); 
        $('figcaption:not(#bioimg figcaption)').css("opacity", "1");
    $('#1').css("background-image", ""); 
         $('#bioimg figcaption').css("color", "");

});
    

});



$(document).ready(function() {

    $("#button").hover(function(){
        $("#3").css("background-image","url(img/webpage-new-new-nu-designers.png)"),
        $("#button").css("opacity","0"),
        $("#ppl, #zero, #about, #contact,.subscribe,.headd").css("opacity","0");
}).mouseleave(function()
              {
        $("#3").css("background-image","url(img/webpage-new-new-nu03.jpg)"),
        $("#button").css("opacity",""),
        $("#ppl, #zero, #about, #contact,.subscribe,.headd").css("opacity","1");

});
    
  
    

});



// Change the speed to whatever you want
// Personally i think 1000 is too much
// Try 800 or below, it seems not too much but it will make a difference

