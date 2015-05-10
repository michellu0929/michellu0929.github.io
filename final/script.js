/*
* EASYFADER - An Ultralight Fading Slideshow For Responsive Layouts
* Version: 1.0
* Author: Patrick Kunka
* Copyright 2012-2013 Patrick Kunka
*/

(function($){
	function prefix(el){
		var prefixes = ["Webkit", "Moz", "O", "ms"];
		for (var i = 0; i < prefixes.length; i++){
			if (prefixes[i] + "Transition" in el.style){
				return '-'+prefixes[i].toLowerCase()+'-'; 
			};
		}; 
		return "transition" in el.style ? "" : false;
	};
	var methods = {
		init: function(settings){
			return this.each(function(){
				var config = {
					slideDur: 7000,
					fadeDur: 800
				};
				if(settings){
					$.extend(config, settings);
				};
				this.config = config;
				var $container = $(this),
					slideSelector = '.slide',
					fading = false,
					slideTimer,
					activeSlide,
					newSlide,
					$slides = $container.find(slideSelector),
					totalSlides = $slides.length,
					$pagerList = $container.find('.pager_list');
					prefix = prefix($container[0]);
				function animateSlides(activeNdx, newNdx){
					function cleanUp(){
						$slides.eq(activeNdx).removeAttr('style');
						activeSlide = newNdx;
						fading = false;
						waitForNext();
					};
					if(fading || activeNdx == newNdx){
						return false;
					};
					fading = true;
					$pagers.removeClass('active').eq(newSlide).addClass('active');
					$slides.eq(activeNdx).css('z-index', 3);
					$slides.eq(newNdx).css({
						'z-index': 2,
						'opacity': 1
					});
					if(!prefix){
						$slides.eq(activeNdx).animate({'opacity': 0}, config.fadeDur,
						function(){
							cleanUp();
						});
					} else {
						var styles = {};
						styles[prefix+'transition'] = 'opacity '+config.fadeDur+'ms';
						styles['opacity'] = 0;
						$slides.eq(activeNdx).css(styles);
						var fadeTimer = setTimeout(function(){
							cleanUp();
						},config.fadeDur);
					};
				};
				function changeSlides(target){
					if(target == 'next'){
						newSlide = activeSlide + 1;
						if(newSlide > totalSlides - 1){
							newSlide = 0;
						}
					} else if(target == 'prev'){
						newSlide = activeSlide - 1;
						if(newSlide < 0){
							newSlide = totalSlides - 1;
						};
					} else {
						newSlide = target;
					};
					animateSlides(activeSlide, newSlide);
				};
				function waitForNext(){
					slideTimer = setTimeout(function(){
						changeSlides('next');
					},config.slideDur);
				};
				for(var i = 0; i < totalSlides; i++){
					$pagerList
						.append('<li class="page" data-target="'+i+'">'+i+'</li>');
				};
				$container.find('.page').bind('click',function(){
					var target = $(this).attr('data-target');
					clearTimeout(slideTimer);
					changeSlides(target);
				});
				var $pagers = $pagerList.find('.page');
				$slides.eq(0).css('opacity', 1);
				$pagers.eq(0).addClass('active');
				activeSlide = 0;
				waitForNext();
			});
		}
	};
	$.fn.easyFader = function(settings){
		  return methods.init.apply(this, arguments);
	};
})(jQuery);

$(function(){
  $('#Fader').easyFader({
    slideDur: 6000,
    fadeDur: 800
  });
});





//
//
//
//$(document).ready(function () {
//    $.getJSON('image/image.json', function(data) {
//        $.each(data.images, function(i,item) {
//            $("#pin3 ul").append("<li><a href='"+item.link+"'> <img src='"+item.src+"'/></a></li><br/>");
//
//        });
//    });
//});
//



$(document).ready(function() {
 $("#send").click(function () {
         $(".pop2").fadeIn(1);
        
     });

     $(".pop2 > span, .pop2").click(function () {
         $(".pop2").hide();
         $("#pop").hide();
     });
});


//=======================


$(document).ready(function() {
$('#menuu').on('click','.menu-link', function() {
  $('.menu').slideToggle('fast', function() {

	});
});

$('.menu').on('click', '.has-subnav a', function() {
	if ($(window).width() < 772 || $('html').hasClass('touch')) {
		if ($(this).next('ul').is(':visible')) {
			$(this).next('ul').slideUp('fast');
			$(this).removeClass('active');
		} else {
			$(this).closest('ul').find('.active').next('ul').slideUp('fast');
			$(this).closest('ul').find('.active').removeClass('active');
			$(this).next().slideToggle('fast');
			$(this).addClass('active');
		}
	}
});

});





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



$(window).scroll(function(){
    var toplocation = $(window).scrollTop();
    if(toplocation < 172)
        $("body").removeClass("scrolled");
    else
    {
        if(!$("body").hasClass("scrolled"))
            $("body").addClass("scrolled");
    }
    
        if(toplocation < 750)
        $("body").removeClass("pho");
    else
    {
        if(!$("body").hasClass("pho"))
            $("body").addClass("pho");
    }
    
    if(toplocation > 1600)
        $("body").removeClass("pho");


    if(toplocation < 1680)
        $("body").removeClass("art");
    else
    {
        if(!$("body").hasClass("art"))
            $("body").addClass("art");
    }

    if(toplocation > 2880)
        $("body").removeClass("art");
    
    
    
        if(toplocation < 2900)
        $("body").removeClass("fa");
    else
    {
        if(!$("body").hasClass("fa"))
            $("body").addClass("fa");
    }
    
    if(toplocation > 3500)
        $("body").removeClass("fa");

    
    
        if(toplocation < 3550)
        $("body").removeClass("c");
    else
    {
        if(!$("body").hasClass("c"))
            $("body").addClass("c");
    }
    
    if(toplocation > 3850)
        $("body").removeClass("c");

    
            if(toplocation < 3900)
        $("body").removeClass("pro");
    else
    {
        if(!$("body").hasClass("pro"))
            $("body").addClass("pro");
    }
    
    if(toplocation > 4200)
        $("body").removeClass("pro");
    
    
    
                if(toplocation < 4300)
        $("body").removeClass("pack");
    else
    {
        if(!$("body").hasClass("pack"))
            $("body").addClass("pack");
    }
    
    if(toplocation > 4700)
        $("body").removeClass("pack");

});
