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
    
    if(toplocation > 150)
        $(".agarmain").addClass("blurr");
        
    else {
        if(toplocation < 150)
          $(".agarmain").removeClass("blurr");
    };
    
        if(toplocation < 750)
        $(".agarpro").addClass("blurr");
    if(toplocation > 1150)
        $(".agarpro").addClass("blurr");
        
    else {
        if(toplocation > 750)
          $(".agarpro").removeClass("blurr");

    };
    
   
});
  
