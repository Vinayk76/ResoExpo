<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>  
<!DOCTYPE html>
<html lang="en">
<head><title>ResoExpo | Home page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,900">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/style.css">
    <!-- Library css-->
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.6/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/range-slider/jquery.nstSlider.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/datetimepicker/css/bootstrap-datetimepicker.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/slick/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/slick/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/select2/select2.min.css">
    <!-- style css-->
    <link type="text/css" rel="stylesheet" href="assets/css/layout.css">
    <link type="text/css" rel="stylesheet" href="assets/css/components.css">
    <link type="text/css" rel="stylesheet" href="assets/css/responsive.css">
    <!-- LOADING SCRIPTS FOR PAGE--></head>
<body><!-- HEADER-->
<?php include 'common/header.php'; ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section banner-06 banner-full-screen-2">
                <?php
                    $i = 1;
                    $q= $d->select('sliders');
                    while($data= mysqli_fetch_row($q))
                    {
                 ?>
                    <div class="item banner-1">
                        <div class="wrapper-banner">
                            <div class="wrapper-title animated fadeInDown"><h2 class="title" style="color: grey"><?php echo $data['1']; ?></h2></div>
                        </div>
                        <div class="bg-image"><img src="img/<?php echo $data['2']; ?>" class="img-responsive" /></div>
                    </div>
                <?php } ?>
                </div>
                
                <div class="section">
                    <div class="newest-properties padding-top padding-bottom">
                        <div class="container">
                            <div class="newest-properties-wrapper">
                                <div class="sunhouse-title">
                                    <div class="icon-image"><img src="assets/images/logo-title-1.png" alt="" class="img-responsive"/><!--.icon-title--><!--    i.icon-church--></div>
                                    <h2 class="main-title">FACILITIES</h2>
                                    </div>
                                <div class="row">
                                    <div class="newest-properties-content">
                                    <?php 
                                    $q = $d->select('facilities');
                                    while($data=mysqli_fetch_array($q))
                                    {
                                    ?>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="sunhouse-item"><a href="#" class="wrapper-image"><img src="img/<?php echo $data['2']; ?>" alt="" class="img-responsive layout-1"/><img src="img/<?php echo $data['2']; ?>" alt="" class="img-responsive layout-2"/></a>

                                                <div class="wrapper-content">
                                                    
                                                    <div class="more-info-house">
                                                        <div class="place-house"></i><a href="#"><h4><?php echo $data['1']; ?></h4></a></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- over !-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="our-service padding-top padding-bottom">
                        <div class="container">
                            <div class="our-service-wrapper">
                                <div class="sunhouse-title">
                                    <div class="icon-image"><img src="assets/images/logo-title-1.png" alt="" class="img-responsive"/><!--.icon-title--><!--   i.icon-mail_box--></div>
                                    <h2 class="main-title">our service</h2>

                                   </div>
                                <div class="row">
                                    <div class="our-service-content">
                                    <?php 
                                    $q = $d->select('services');
                                    while($data=mysqli_fetch_array($q))
                                    {
                                    ?>
                                        <div class="col-md-3">
                                            
                                                <div class="icon-wrapper"><img src="img/<?php echo $data['2']; ?>" class="img-rounded img-responsive" width="250px" height="250px"></i></div>
                                                <p class="name"><h4><?php echo $data['1']; ?></h4></p>

                                            
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                          <div class="section">
                    <div class="contact-us">
                        <div class="container">
                            <div data-parallax="{&quot;y&quot;:&quot;20%&quot;}" class="contact-us-scroll">
                                <div class="contact-us-wrapper">
                                    <div class="contact-us-content"><h2 class="title">contact</h2>

                                        <p class="text">Contact Info.</p>
                                        <?php
                                        $q= $d->select('company_info');
                                        while($data= mysqli_fetch_row($q))
                                        {
                                        ?>
                                        <div class="info-list">
                                            <ul class="list-unstyled">
                                                <li class="info-line"><i class="info-icon fa fa-map-marker"></i><a href="#" class="info-text"><?php echo $data['2']; ?></a></li>
                                                <li class="info-line"><i class="info-icon fa fa-phone"></i><a href="#" class="info-text"><?php echo $data['5']; ?></a></li>
                                                <li class="info-line"><i class="info-icon fa fa-fax"></i><a href="#" class="info-text"><?php echo $data['4']; ?></a></li>
                                                <li class="info-line"><i class="info-icon fa fa-envelope-o"></i><a href="#" class="info-text"><?php echo $data['6']; ?></a></li>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="new-letter-wrapper">
                                    <div class="new-letter-content"><h4 class="title">FEEDBACK</h4>

                                        <p class="text">Provide Your Feedback From Here .. </p>

                                        <form method="post" action="insert_master.php"><input type="text" name="name"placeholder="Your Name" class="contact-form"/><input type="email" name="email" placeholder="Your Email" class="contact-form"/><textarea placeholder="Your Message" name="comments" class="contact-form"></textarea><button class="btn btn-transparent white" name="add_feedback">send message</button></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/resoexpo" data-width="1200" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<!-- FOOTER-->
<?php include 'common/footer.php'; ?>
<!--.body-2.loading<div class="dots-loader"></div>--><!-- JAVASCRIPT LIBS-->
<script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
<script src="assets/libs/detect/browser.js"></script>
<script src="assets/libs/moment/js/moment.min.js"></script>
<script src="assets/libs/bootstrap-3.3.6/js/bootstrap.min.js"></script>
<script src="assets/libs/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/select2/select2.min.js"></script>
<script src="assets/libs/range-slider/jquery.nstSlider.min.js"></script>
<script src="assets/libs/parallax/jquery.data-parallax.min.js"></script>
<script src="assets/libs/slick/slick.min.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="assets/js/pages/homepage-06.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
<script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
<script src="assets/js/pages/contact.js"></script>
</body>
</html>