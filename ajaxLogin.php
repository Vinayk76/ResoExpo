<?php
include("db.php");
session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{
	
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']); 
// $password=md5(mysqli_real_escape_string($db,$_POST['password'])); 
$a=0;
$result=mysqli_query($db,"SELECT * FROM members WHERE username='$username' and password='$password' and active_flag='$a' ");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['username']=$row['username'];
$_SESSION['cname']=$row['cname'];
$_SESSION['email']=$row['email'];
$_SESSION['file']=$row['file'];
$_SESSION['contactno']=$row['contactno'];
$_SESSION['login_user']=$row['id'];
$_SESSION['id']=$row['id'];
$_SESSION['cperson']=$row['cperson'];
echo $row['id'];
}
else
{ ?>
	<script type="text/javascript">alert("Enetr Valid username or password"); </script>
<?php }
}
?>

