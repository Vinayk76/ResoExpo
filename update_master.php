<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
$a1;
if(isset($_POST["update_password"]))
     {
        extract(array_map("test_input" , $_POST));
        session_start();
        $username = $_SESSION['username'];
        $m->set_data('password',$password);
        
        $a1= array ('password'=> $m->get_data('password'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("members",$a1 ,"username='$username'"); 
        if($update>0)
        {
            header('location:profile.php?msg=Password Updated');
        }
        else {
                header('location:profile.php?msg1=Please Try Again.');
        }
    }
    
   else if(isset($_POST["update_contactno"]))
     {
        extract(array_map("test_input" , $_POST));
        session_start();
        $username = $_SESSION['username'];
        $m->set_data('contactno',$contactno);
        
        $a1= array ('contactno'=> $m->get_data('contactno'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("members",$a1 ,"username='$username'"); 
        if($update>0)
        {
            header('location:profile.php?msg=Password Updated');
        }
        else {
                header('location:profile.php?msg1=Please Try Again.');

        }
    }
     else if(isset($_POST["update_image"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $imagetype=$_FILES["file"]['type'];
        $imagesize=$_FILES["file"]['size'];
        $image_Arr = $_FILES['file'];
            
        move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
        $file_name = $image_Arr['name'];

        session_start();
        $username = $_SESSION['username'];

        $m->set_data('file_name',$file_name);
        
        $a1= array ('file'=> $m->get_data('file_name'));
   
        $update=$d->update("members",$a1,"username='$username'"); 
        if($update>0)
        {
            header('location:profile.php?msg=Image Updated');
        }
        else {
                header('location:profile.php?msg1=Image not changed');

        }
    }
    ?>



    