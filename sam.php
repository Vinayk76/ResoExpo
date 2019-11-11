<?php
session_start();
if(empty($_SESSION['email']))
{
header('Location: home.php');
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Home </title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="main">
<h1>Welcome <?php echo $_SESSION['email']; ?></h1>
<a href="logout.php">Logout</a>
</div>
</body>
</html>







