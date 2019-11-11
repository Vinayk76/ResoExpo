<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>  
<?php
error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
    header("location:index.php?msg1=Login First");
}

?>
<header>
    <div class="bg-white">
        <div class="header-topbar">
            <div class="container">
            <?php
                $q= $d->select('company_info');
                while($data= mysqli_fetch_row($q))
                {
                ?>
                <ul class="topbar-left list-unstyled pull-left">
                    <li><a href="#" class="hotline"><i class="topbar-icon fa fa-phone"></i><span><?php echo $data['5']; ?></span></a></li>
                    <li><a href="#" class="email"><i class="topbar-icon fa fa-map-marker"></i><span><?php echo $data['6']; ?></span></a></li>
                </ul>
            <?php } ?>
            </div>
        </div>
        <div class="header-main header-default">
            <div class="container">
                <div class="header-main-wrapper">
                    <div class="navbar-header">
                        <div class="logo logo-black pull-left"><a href="index.php" class="header-logo"><img src="assets/images/logo-1.png" alt=""/></a></div>
                        <div class="logo logo-white pull-left"><a href="index.php" class="header-logo"><img src="assets/images/logo-2.png" alt=""/></a></div>
                        <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <nav class="navigation collapse navbar-collapse pull-right">
                        <ul class="nav-links nav navbar-nav">
                            <li><a href="index.php" class="main-menu">Home</a>
                            </li>
                            <li><a href="gallery.php" class="main-menu">Gallery</a>
                                
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu">Bookings<span class="fa fa-angle-down icons-dropdown"></span></a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="events.php" class="link-page">Events</a></li>
                                    <li><a href="hall.php" class="link-page">Seminar Hall</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.php" class="main-menu">About Us</a>
                            </li>
                            <li><a href="contact.php" class="main-menu">Contact Us</a>
                            </li>
                            <li><a href="faq.php" class="main-menu">FAQ</a>
                            </li>
                          <!--  <li class="dropdown"><a href="javascript:void(0)" class="main-menu">page<span class="fa fa-angle-down icons-dropdown"></span></a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="faq.php" class="link-page">FAQ</a></li>
                                </ul>
                            </li> -->
                            <?php 
                            error_reporting(0);
                            session_start();
                            if($_SESSION['email']=='')
                            {
                            header("location:index.php?Try login Again");
                            }
                            else
                            { ?>
                             <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><?php echo $_SESSION['username']; ?>&nbsp;&nbsp;&nbsp;<img src="img/<?php echo $_SESSION['file']; ?>" class="img-rounded" height="35px" width="35px"></a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a><img src="img/<?php echo $_SESSION['file']; ?>" class="img-circle" width="" height="100px"></a></li>
                                    <?php 
                                    if($_SESSION['cperson']=='')
                                    {
                                    ?>
                                    <li><a href="profile.php" class="link-page">Edit Profile  <span class="label label-warning">Edit</span></a></li>
                                    <?php }
                                    else
                                    { ?>
                                         <li><a href="profile.php" class="link-page">Edit Profile</a></li>
                                    <?php } ?>
                                     <li><a href="logout.php" class="link-page">Sign out</a></li>
                                </ul>
                            </li>

                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>