<!DOCTYPE html>
<html lang="en">
<head><title>ResoExpo | Properties</title>
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
                <div class="section page-title property-view bg-overlay">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">Events</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="#">Events</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section property-view">
                    <div class="container margin-top">
                        <div class="clearfix"></div>
                        <div class="property-wrapper padding-top">
                            <div class="row">
                                <div class="col-md-12 property-content">
                                    <div class="row">
                                        <div id="loading"><img id="loading-image" src="assets/images/loader.gif" alt="load list"/></div>
                                        
                                        <h3>All Available Events Are Here.....</h3><br>
                                        <?php 
                                        $q =$d->select('booking');
                                        while($data = mysqli_fetch_row($q))
                                        {
                                        ?>
                                        <div class="property-item col-xs-4">
                                            <div class="alert alert-info">
                                                <h5><center><b><?php echo $data['3']; ?></b></center>
                                                Organized by : <?php echo $data['2']; ?><br>
                                                On : <?php echo $data['4']; echo $data['5']; ?></h5>
                                            </div>
                                        </div>
                                        <?php } ?>
                                       
                                        <h4><a data-toggle="modal" data-target="#myModal4">Want To Organize An Event...?</button></a></h4>
                                        <div class="clearfix"></div>
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

<!-- Modal -->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Event From Here......</h4>
      </div>
      <div class="modal-body">
        <form action="insert_master.php" method="post">
            <div class="row">
                <div class="col-md-12"><label> Title of Event<span class="hight-light">*</span></label><input class="form-control" type="text" name="etitle" id="etitle" placeholder="Event Title" autocomplete="off" required></div>
                <div class="col-md-12"><label> Date of Event<span class="hight-light">*</span></label><input class="form-control" type="date" name="edate" id="edate" placeholder="Event Date" autocomplete="off" required></div>
                <div class="col-md-12"><label> Time of Event<span class="hight-light">*</span></label><input class="form-control" type="time" name="etime" id="etime" placeholder="Event Time" autocomplete="off" required></div>
                <div class="col-md-12"><label> Amount<span class="hight-light">*</span></label><input class="form-control" type="text" name="amount" id="amount" placeholder="Amount" autocomplete="off" required></div>
            </div><br>
            <button class="btn btn-primary" name="book_event">Orgnize</button>              
          </form>
      </div>
    </div>

  </div>
</div>
<!--modal!-->
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
<script src="assets/js/pages/properties.js"></script>
</body>
</html>