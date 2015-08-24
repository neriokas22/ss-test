<!doctype html>
<html>
<head>
    
<!--Meta-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    
<title>Nerijus Baniukevicius</title>

<!--Styles-->
<link href="css/style.css" rel="stylesheet" type="text/css">
    
<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    



</head>

<body>
    
<div class="wrapper">
    <div class="left">
        <div class="shadow"></div>
        <span>
            Hello World
            <h2>This is a subtitle</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada eleifend turpis eu gravida. Suspendisse potenti. Vivamus ac viverra nulla, vel egestas urna.</p>
            <a href="http://www.google.com">Read More</a>
        </span>
    </div>
    <div class="right">
        <div class="re_skew">
            <div class="right_content">
                <div class="shadow"></div>
                <span>
                    Hello World
                    <h2>This is a subtitle</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada eleifend turpis eu gravida. Suspendisse potenti. Vivamus ac viverra nulla, vel egestas urna.</p>
                    <a href="http://www.google.com">Read More</a>
                </span>
            </div>
        </div>
    </div>
</div>
    
    
<!--Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>
$(document).ready(function() {
    $(".left").hover(function() {
        $(".right").stop().animate({
            left: "1000px"
        }, 500, "easeInOutQuad");
        
        $(this).find("span").stop().animate({
            opacity: 1,
            left: "150px"
        }, 500, "easeInOutQuad");
    }, function() {
        $(".right").stop().animate({
            left: "600px"
        }, 500, "easeInOutQuad");
        
        $(this).find("span").stop().animate({
            opacity: .75,
            left: "100px"
        }, 500, "easeInOutQuad");
    });
    
    
    $(".right").hover(function() {
        $(this).stop().animate({
            left: "200px"
        }, 500, "easeInOutQuad");
        
        $(this).find("span").stop().animate({
            opacity: 1,
            top: "160px"
        }, 500, "easeInOutQuad");
    }, function() {
        $(this).stop().animate({
            left: "600px"
        }, 500, "easeInOutQuad");
        
        $(this).find("span").stop().animate({
            opacity: 0,
            top: "50px"
        }, 500, "easeInOutQuad");
    });
});
</script>
    
</body>
</html>