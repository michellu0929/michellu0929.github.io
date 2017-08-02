$(document).ready(function () {
    $(window).load(function(){
        function requestFile(url){
                $.ajax({
                url:url,
                cache:false,
                success: function(data){
                    $("#content").html(data);
                }
            }
        );
        }
        

    $("#ajaxrequest1").click(function(){
        requestFile("about.html");
//         $.get("about.html",function(data){
//                $("#content").append(data);
//         })
    })
      $("#ajaxrequest2").click(function(){
        requestFile("code.html");
        })
      
            $("#ajaxrequest3").click(function(){
        requestFile("design.html");
        })
      
    })
    

    
});

$(document).ready(function () {
   $('#me').hover(function() 
{   
  $("#hi").text("Name on passport is Pei Yu, but I do born with this English name, Michelle.");
}).mouseleave(function()
              {
       $("#hi").text("");
});
    
    
       $('#designer').hover(function() 
{   
  $("#hi").text("BFA Degree in CD at Parsons, and minoring Fashion Communication. I also do photographs and paintings.");
}).mouseleave(function()
              {
       $("#hi").text("");
});
    
       
       $('#nyc').hover(function() 
{   
  $("#hi").text("Born in Beijing. Raised in Shanghai. A Taiwanese passport holder.");
}).mouseleave(function()
              {
       $("#hi").text("");
});
    
});


$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

