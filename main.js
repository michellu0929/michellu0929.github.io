$(document).ready(function () {
    $(window).load(function(){
        funtion requestFile(url){
                $.ajax(
            {
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
    })
    

    
});

