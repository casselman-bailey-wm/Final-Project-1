
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


<div class="container">

    <div class="slide s1 active">1</div>
    <div class="slide s2" data-duration="1000">2</div>
    <div class="slide s3" data-duration="1000">3</div>
    <div class="slide s4" data-duration="1000">4</div>

    <img src="Untitled-2.png">
    <img src="Untitled-4.png">
    <img src="Untitled-1.png">
    <img src="Untitled-5.png">
    <img src="Untitled-7.png">
    <img src="Untitled-8.png">
    <img src="Untitled-9.png">

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

<?php

require_once('footer.php');

?>