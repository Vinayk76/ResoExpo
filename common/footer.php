<!-- FOOTER-->
<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';
$d = new dao();
$m = new model();
?>  
<footer>
    <div class="bg-dark">
        <div class="footer-main">
            <div class="container">
                <div class="footer-main-wrapper padding-top-2 padding-bottom row">
                    <div class="col-md-12 col-3">
                        <div class="row">
                            <div class="col-sm-4 col-xs-4">
                                <div class="sunhouse-widget widget">
                                    <div class="footer-logo footer-logo-white"><img src="assets/images/logo-1.png" alt=""/></div>
                                    <div class="footer-logo footer-logo-black"><img src="assets/images/logo-1.png" alt=""/></div>
                                    <div class="content-widget"><p class="text">ResoExpo </p>

                                        <p class="text"></p>
                                        <?php
                                        $q= $d->select('company_info');
                                        while($data= mysqli_fetch_row($q))
                                        {
                                        ?>
                                        <div class="phone-number"><i class="fa fa-phone"></i><span><?php echo $data['5']; ?></span></div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <div class="col-sm-4 col-xs-4">
                                <div class="widget">
                                    <div class="useful-link-widget">
                                        <div class="title-widget">USEFUL LINKS</div>
                                        <div class="content-widget">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <ul class="list-unstyled">
                                                         <li><a href="contact.php">Support Forum</a></li>
                                                        <li><a href="faq.php">Send a Question</a></li>
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-4">
                                <div class="widget">
                                    <div class="gallery-widget">
                                        <div class="title-widget">GALLERIES</div>
                                        <div class="content-widget">
                                            <div class="gallery-list">
                                                <?php
                                                $q= $d->select('gallery');
                                                while($data= mysqli_fetch_row($q))
                                                {
                                                ?>
                                                 <a href="#" class="thumb img-hover">
                                                 <img src="img/<?php echo $data['1']; ?>" alt="" class="img-responsive"/>
                                                 </a>
                                                <?php } ?>
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
        <div class="clearfix"></div>
        <div class="hyperlink">
            <div class="container">
                <div class="pull-right hyper-right">
                    <ul>
                        <li><a href="index.php" class="link">Home</a></li>
                        <li><a href="faq.php" class="link">FAQ</a></li>
                        <li><a href="#" class="link">Privacy & Term</a></li>
                        <li><a href="contact.php" class="link">Contact Us</a></li>
                        <li><a href="#" class="link">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>