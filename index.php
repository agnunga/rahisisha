<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home | Rahisisha</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/logo.png"/>
    <!--css-->
    <?php require_once('./sections/include_css.php')?>
    <!--End css-->
</head>
<body>
<!-- BEGAIN PRELOADER -->
<!--        <div id="preloader">
            <div class="loader">&nbsp;</div>
        </div>-->
<!-- END PRELOADER -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->
<!-- Start header section -->
<?php require_once('./sections/header.php')?>
<!-- End header section -->
<!-- Start about section -->
<?php require_once('./sections/about.php')?>
<!-- End about section -->
<!-- Start call to action -->
<?php require_once('./sections/about.php')?>
<section id="call-to-action">
    <img src="assets/images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
        <div class="container">
            <div class="call-to-content wow fadeInUp">
                <h2>The most dynamic IT solutions provider in Kenya.

                    <!--Start with a small package and advance later-->

                    .</h2>
                <a href="#" class="button button-default" data-text="GET IT NOW"><span>VIEW OUR PRICING.</span></a>
            </div>
        </div>
    </div>
</section>
<!-- End call to action -->
<!-- Start Team action -->
<?php /*require_once('./sections/team.php')*/?>
<!-- Start Team action -->
<!-- Start service section -->
<?php require_once('./sections/services.php')?>
<!-- End service section -->
<!-- Start Portfolio section -->
<?php require_once('./sections/portfolio.php')?>
<!-- End Portfolio section -->
<!-- Start Pricing Table section -->
<?php require_once('./sections/pricing.php')?>
<!-- End Pricing Table section -->
<?php require_once('./sections/clients.php')?>
<!-- Start Contact section -->
<?php require_once('./sections/contact_us.php')?>
<!-- End Contact section -->
<!-- Start Footer -->
<?php require_once('./sections/footer.php')?>
<!-- End Footer -->
<!--scripts-->
<?php require_once('./sections/include_scripts.php') ?>
<!--End scripts-->
</body>
</html>