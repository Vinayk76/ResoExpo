<header>
    <div class="bg-transparent">
        <div class="header-main header-default header-no-border">
            <div class="container">
                <div class="header-main-wrapper">
                    <div class="navbar-header">
                        <div class="logo logo-black pull-left"><a href
                        ="index.php" class="header-logo"><img src="assets/images/logo-1.png" alt=""/></a></div>
                        <div class="logo logo-white pull-left"><a href="index.php" class="header-logo"><img src="assets/images/logo-1.png" alt=""/></a></div>
                        <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    
                    <nav class="navigation collapse navbar-collapse pull-right">
                        <ul class="nav-links nav navbar-nav">
                            <li class=""><a href="#" class="main-menu">Home</a
                            </li>
                            <li class="dropdown"><a href="gallery.php" class="main-menu">Gallery</a>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu">Bookings<span class="fa fa-angle-down icons-dropdown"></span></a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="events.php" class="link-page">Events</a></li>
                                    <li><a href="hall.php" class="link-page">Seminar Hall</a></li>
                                </ul>
                            </li>
                           
                            <li class="dropdown"><a href="about-us.php" class="main-menu">About us</span></a>
                            </li>
                            <li class="dropdown"><a href="faq.php" class="main-menu">FAQ</a>
                            </li>
                         
                            <li><a href="contact.php" class="main-menu">contact us</a></li>
                          <!--  <li class="dropdown"><a href="javascript:void(0)" class="main-menu">Page<span class="fa fa-angle-down icons-dropdown"></span></a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="faq.php" class="link-page">faq</a></li>
                                </ul>
                            </li> -->
                            <?php 
                            error_reporting(0);
                            session_start();
                            if($_SESSION['email']=='')
                            {
                                
                            ?>
                            <li><a class="main-menu" data-toggle="modal" data-target="#myModal">Login</a></li>
                            <?php }
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


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Log In Here...</h4>
      </div>
      <div class="modal-body">
         <div class="page-sign-up-table signup-register-table"><a href="index.php" class="logo-signup"><img src="assets/images/logo-1.png" alt="" class="logo"></a>

                                <center><h4><b><div class="title">
                                    SIGN IN TO YOUR<a href="index.php" class="link"> RESOEXPO </a>ACCOUNT!
                                </div></b></h4></center>
                                <form class="form-signup" method="post">
                                    <div class="row">
                                        <div class="col-md-12"><label> Username<span class="hight-light">*</span></label><input class="form-control" type="text" name="username" id="username" placeholder="Username" autocomplete="off" required></div>
                                        <div class="col-md-12"><label> Password<span class="hight-light">*</span></label><input class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required></div>
                                    </div>
                                    <div class="form-group search-form-group"><input id="remember" type="checkbox" class="check"><label for="remember" class="type-checkbox">Remember me </label></div>
                                    <br>
                                    <button class="btn btn-blue btn-signup" name="login" id="login">SIGN IN</button>  <a href="" data-toggle="modal" data-target="#myModal3">Forgot Password ??</a>
                                </form><br>
                                <center><h4><b><p class="title-sign-in">Don't have a ResoExpo account yet?<a href="" class="link signin" data-toggle="modal" data-target="#myModal1"> CREATE NOW!</a></p></b></h4></center></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register Account Here ...</h4>
      </div>
        <div class="modal-body">
            <div class="register-wrapper signup-register-wrapper">
                <center><div class="register-table signup-register-table"><a href="index.php" class="logo-signup"><img src="assets/images/logo-1.png" alt="" class="logo"></a></div></center>

                            <center><h4><b><div class="title">CREATE YOUR ACCOUNT AND JOIN WITH US!</div></b></h4></center><br>
                            <form class="form-register" method="post" action="insert_master.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6"><label>Company Name<span class="hight-light">*</span></label><input class="form-control" name="cname" title="please fill out Your Name" required></div>
                                        <div class="col-md-6"><label>Email<span class="hight-light">*</span></label><input type="email" class="form-control" name="email" title="please fill out Email" required></div>
                                        <div class="col-md-6"><label>Username<span class="hight-light">*</span></label><input type="text" class="form-control" name="username"  title="please fill out IUsername" required></div>
                                        <div class="col-md-6"><label>Profile Picture<span class="hight-light">*</span></label><input type="file"class="form-control" name="file"  title="please upload image" required></div>
                                        <div class="col-md-6"><label>Password<span class="hight-light">*</span></label><input type="password" class="form-control" name="password"   title="please fill out  Password"required></div>
                                        <div class="col-md-6"><label>Confirm Password<span class="hight-light">*</span></label><input type="password" class="form-control" name="cpassword"  title="please fill out Confirm Password" required></div>
                                        <input type="hidden" name="active_flag" value="1">
                                    </div><br>
                            <center><button class="btn btn-blue" name="reg_members">create account</button></center>
                            </form>
                                
                </div>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script src="assets/js/jquery.min.js"></script>

    <script>
            $(document).ready(function() {
            
            $('#login').click(function()
            {
            var username=$("#username").val();
            var password=$("#password").val();
            var dataString = 'username='+username+'&password='+password;
            if($.trim(username).length>0 && $.trim(password).length>0)
            {
            
 
            $.ajax({
            type: "POST",
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...').delay(6000);},
            success: function(data){
            if(data)
            {
            $("body").load("index.php").hide().fadeIn(1500).delay(6000);
            }
            else
            {
             $('#myModal').shake();
             $("#login").val('Login')
             $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid Username and password. ");
            }
            }
            });
            
            }
            else {
                 $('#myModal').shake();
             $("#error").html("<span style='color:#cc0000'>Error:</span> Enter Username and password. ");

            }
            return false;
            });
            
                
            });
        </script>
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Retrive Your Password From Here....</h4>
      </div>
        <div class="modal-body">
            <div class="register-wrapper signup-register-wrapper">
                <center><div class="register-table signup-register-table"><a href="index.php" class="logo-signup"><img src="assets/images/logo-2.png" alt="" class="logo"></a></div></center>

                            <center><h4><b><div class="title">enter your email here..</div></b></h4></center><br>
                            <form class="form-register" method="post" action="insert_master.php">
                                    <div class="row">
                                        <div class="col-md-12"><label> Email<span class="hight-light">*</span></label><input class="form-control" type="email" name="email" id="email" placeholder="Email" autocomplete="off" required></div>
                                    </div><br>
                            <center><button class="btn btn-blue" name="forgot">submit</button></center>
                            </form>
                            <br><br>
                            <div class="error">
                                
                            </div>
                            <br>
                                
                </div>
            </div>
    </div>

  </div>
</div>