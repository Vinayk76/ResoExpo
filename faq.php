<!DOCTYPE html>
<html lang="en">
<head><title>ResoExpo | FAQ</title>
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
<?php include 'common/header1.php'; ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title faq bg-overlay">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">faq's</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">faqs</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section faq">
                    <div class="container">
                        <div class="faq-wrapper row">
                            <div class="col-md-8 padding-top padding-bottom">
                                <div id="accordion-1" role="tablist" aria-multiselectable="true" data-parent="true" class="panel-group accordion">
                                    <?php 
                                    $i=1;
                                    $q = $d->select('faq');
                                    while($data = mysqli_fetch_row($q))
                                    {
                                    ?>
                                    <div class="panel">
                                        <div id="heading<?php echo $i ?> " role="tab" class="panel-heading"><h4 class="panel-title"><a role="button" data-toggle="collapse" href="#collapse<?php echo $i ?>" class="accordion-toggle collapsed"> <?php echo $data['1']; ?></a></h4></div>
                                        <div id="collapse<?php echo $i ?>" role="tabpanel" aria-labelledby="heading<?php echo $i ?>" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo $data['2']; ?>
                                            </div>
                                            <hr/>
                                            <div class="help"><span>Was this answer helpful?</span><a href="#" class="margin-left">Yes</a><a href="#" class="margin-left">No</a></div>
                                        </div>
                                    </div>
                                    <?php  
                                    $i++;
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4 sidebar margin-top">
                                <div class="archive-widget widget"><br><br><br><br><br><br><br><br>
                                <div class="title-widget">&nbsp;archive</div>
                                    <div class="content-widget">
                                        <div class="date-archive">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel">
                                        <form action="insert_master.php" method="post">
                                             <div class="row">
                                                 <div class="col-md-12"><label><h4>Post Query....</h4></label><input class="form-control" type="text" name="question" id="question" placeholder="Post" autocomplete="off" required></div>
                                             </div><br>
                                             <button class="btn btn-primary" name="insert_question">Ask Question</button>      
                                        </form>
                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div id="datetimepicker12"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<script src="assets/js/pages/datepicker.js"></script>
<script src="assets/js/pages/faq.js"></script>
</body>
</html>