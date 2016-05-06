
<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 4/26/16
 * Time: 4:58 PM
 */

session_start();
require_once('header.php');
?>
​

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>GetCar</h1>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
    </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="Untitled-1.png" style="width:100%">
    <img class="mySlides" src="Untitled-2.png" style="width:100%">
    <img class="mySlides" src="Untitled-3.png" style="width:100%">
    <img class="mySlides" src="Untitled-4.png" style="width:100%">
    <img class="mySlides" src="Untitled-5.png" style="width:100%">
    <img class="mySlides" src="Untitled-6.png" style="width:100%">
    <img class="mySlides" src="Untitled-7.png" style="width:100%">
    <img class="mySlides" src="Untitled-8.png" style="width:100%">
    <img class="mySlides" src="Untitled-9.png" style="width:100%">
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";

        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<?php

require_once('footer.php');

?>