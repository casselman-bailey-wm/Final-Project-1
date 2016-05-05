
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
    .mySlides {display:none;}
</style>
<body>

<div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="http://www.honda.com.au/content/dam/honda/cars/models/nsx/showroom/history-car-09r.png" style="width:100%">
    <img class="mySlides" src="http://pngimg.com/upload/audi_PNG1769.png" style="width:100%">
    <img class="mySlides" src="http://local-car-finder.com/images/test2/make/Nissan/model/2016_GT-R_1.png" style="width:100%">
    <img class="mySlides" src="http://www.mideast.dodge.com/assets/images/vehicles/2015/charger/features/model_details/SRT%20Hellcat/thumb/thumb.png" style="width:100%">
    <img class="mySlides" src="http://3ge.shared.assets.s3.amazonaws.com/new-model-pages/chevrolet/2015/corvette_z06/15_corvette_z06-vehicle.png" style="width:100%">
    <img class="mySlides" src="http://488spider.ferrari.com/img/carHome.png" style="width:100%">
    <img class="mySlides" src="https://ricklevinassociates.files.wordpress.com/2010/04/bugatticlean1.png" style="width:100%">
    <img class="mySlides" src="http://petrolhigh.com/wp-content/uploads/2015/01/Ford-GT-Gulf-2016.png" style="width:100%">
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


<?php

require_once('footer.php');

?>