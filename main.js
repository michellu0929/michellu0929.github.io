$(document).bind('mousemove', function(e){
    $("#dotbg").text("START DRAWING")
$("#dotbg").css("opacity", "1");
    $('#dotbg').css({
        left: e.pageX + 5,
        top: e.pageY - 20
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

