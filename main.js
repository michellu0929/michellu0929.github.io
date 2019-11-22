$(document).bind('mousemove', function(e){
    $("#dotbg").text("START DRAWING")
$("#dotbg").css("opacity", "1");
    $('#dotbg').css({
        left: e.pageX + 20,
        top: e.pageY 
    });
    
});

$(document).bind('mousedown', function(e){
  this.onmousemove = function(e) {
      $("#dotbg").text("GREAT!")
  }
});



$(document).bind('click', function(e)  {
  $("#dotbg").css("display", "none");
});

