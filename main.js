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
         })
    })
    })
    

    
});

