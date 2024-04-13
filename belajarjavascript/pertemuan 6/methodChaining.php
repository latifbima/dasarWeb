<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleAnimate.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
        $(document).ready(function(){
            $("button").click(function(){
               $(".box")
               .animate({width: "300px"})
               
               .animate({height: "300px"})
               
               .animate({marginLeft: "150px"})
               
               .animate({borderWidth: "10px"})
               
               .animate({opacity: "0.5px"})


            });
        });
        </script>
    </head>
    <body>
        <button type="button">Start Animation</button>
        <div class="box"></div>
    </body>
</html>