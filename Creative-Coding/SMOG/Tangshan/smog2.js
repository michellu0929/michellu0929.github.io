   function hero()
{
var herowidth=1268;
var heroheight=730;
window.resizeTo(herowidth,heroheight);
}
hero();
$(document).ready(function() {
	
	$.ajax({
		url: 'http://www.pm25.in/api/querys/pm2_5.json?city=tangshan&token=SAspVoyc1n1kczVzrNwH',
		dataType: 'jsonp',


		success: function(data) {
		     		if (data[6].pm2_5 < 50) {
       			$('.fogg').css('background','rgba(0,0,0,0.0)');
       			$('.sub1').css('color','#c0f8e1');
       			$('.sub1').html('Perfect Day!')
       			};

       			if (data[6].pm2_5 > 51) {
       			$('.fogg').css('background','rgba(0,0,0,0.2)');
       			$('.sub1').css('color','yellow');
       			$('.sub1').html('Moderate')
       			};

			    if (data[6].pm2_5 > 101) {
       			$('.fogg').css('background','rgba(0,0,0,0.3)');
       			$('.sub1').css('color','orange');
       			$('.sub1').html('Unhealthy for Sensitive Groups')
       			};

				if (data[6].pm2_5 > 151) {
       			$('.fogg').css('background','rgba(0,0,0,0.4)');
       			$('.sub1').css('color','red');
       			$('.sub1').html('Unhealthy!')
       			};

       			if (data[6].pm2_5 > 201) {
       			$('.fogg').css('background','rgba(0,0,0,0.5)');
       			$('.sub1').css('color','red');
       			$('.sub1').html('Very unhealthy!')
       			};

       			if (data[6].pm2_5 > 301) {
       			$('.fogg').css('background','rgba(0,0,0,0.7)');
       			$('.sub1').css('color','grey');
       			$('.sub1').html('Hazardous')
       			};

       			if (data[6].pm2_5 > 501) {
       			$('.fogg').css('background','rgba(0,0,0,0.8)');
       			$('.sub1').css('color','black');
       			$('.sub1').html('Leave the Earth')
       			};

       			 $('.sub').html('pm2.5: ' + data[6].pm2_5 + '<br>AQI: ' + data[6].aqi); 
  
			}
	});


});


	// $.getJSON('http://www.pm25.in/api/querys/pm2_5.json?city=guangzhou&token=SAspVoyc1n1kczVzrNwH&stations=no?callback=?',function(data) {
	// 	var station= data[0];
	// 	alert('test');
	// 	$('.content').html('The Current Weather is ' + data.current_observation.temp_f + 'F');
	// 	if (data.current_observation.temp_f < 60 ) {
	// 	$('body').css('background-color','blue')
	// 	};
	// });

	// 	if (data[6].pm2_5 > 50 ) {
	// 	$('.fogg').css('background','rgba(0,0,0,0.5)')
 //    $.getJSON('http://www.pm25.in/api/querys/pm2_5.json?city=shanghai&token=SAspVoyc1n1kczVzrNwH?callback=?', 
 //        function(data){
 //            $.each(data[6].pm2_5 > 50, function(i, pm2_5){
 //  				$('.fogg').html('background','rgba(0,0,0,0.5)');
 //        });
	// });
		


			// if (data[6].pm2_5 > "50" ) {
			// $(".fogg").css("background","rgba(255,0,0,0.5)");
   //              }