<?php
session_start();
if(!empty($_SESSION['email']))
{
header('Location: home.php');
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Ajax</title>
<script src="js/jquery.min.js"></script>
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
            $("body").load("home.php").hide().fadeIn(1500).delay(6000);
            }
            else
            {
             $('#box').shake();
			 $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid Email and password. ");
            }
            }
            });
			
			}
			else {
				 $('#box').shake();
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Enter Email and password. ");

			}
			return false;
			});
			
				
			});
		</script>
</head>

<body>
<div id="main">
<h1> Login</h1>

<div id="box">
<form action="" method="post">
<label>Username</label> 
<input type="text" name="username" class="input" autocomplete="off" id="username"/>
<label>Password </label>
<input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
<input type="submit" class="button button-primary" value="Log In" id="login"/> 
<span class='msg'></span> 

<div id="error">

</div>	

</div>
</form>	
</div>
</div>
</body>
</html>