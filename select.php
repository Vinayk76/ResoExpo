<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();

session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']); 
// $password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

$query=$d->select("members","username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);

// If result matched $myusername and $mypassword, table row must be 1 row
if($data>0)
{
$_SESSION['name']=$row['name'];
$_SESSION['email']=$row['email'];
$_SESSION['id']=$row['id'];
echo $row['id'];
}

}
?>





