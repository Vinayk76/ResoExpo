<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
     $a1;
    if(isset($_POST["add_feedback"]))
    {
        extract(array_map("test_input" , $_POST));
        
        /*$imagetype=$_FILES["file"]['type'];
        $imagesize=$_FILES["file"]['size'];
        $image_Arr = $_FILES['file'];
            
        move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
        $file_name = $image_Arr['name'];*/
    
        $m->set_data('name',$name);
        $m->set_data('email',$email);
        $m->set_data('comments',$comments);

       
        
        $a1= array ('name'=> $m->get_data('name'),
                    'email'=> $m->get_data('email'),
                    'comments'=> $m->get_data('comments'));
        
        $insert=$d->insert('feedback',$a1); 
        if($insert>0)
        {
        header("location:index.php?msg=Inserted.");
        }
        else {
        header("location:index.php?msg=Not Inserted."); 
        }
    }
     else if(isset($_POST["reg_members"]))
    {
        extract(array_map("test_input" , $_POST));

        $imagetype=$_FILES["file"]['type'];
        $imagesize=$_FILES["file"]['size'];
        $image_Arr = $_FILES['file'];
            
        move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
        $file_name = $image_Arr['name'];


        $m->set_data('cname',$cname);
        $m->set_data('email',$email);
        $m->set_data('username',$username);
        $m->set_data('password',$password);
        $m->set_data('file_name',$file_name);
        $m->set_data('active_flag',$active_flag);

        $a1 = array('cname'=>$m->get_data('cname'),
                'email'=>$m->get_data('email'),
                'username'=>$m->get_data('username'),
                'password'=>$m->get_data('password'),
                'file'=>$m->get_data('file_name'),
                'active_flag'=>$m->get_data('active_flag'));

        $insert=$d->insert('members',$a1); 
        if($insert>0)
        {
        header("location:index.php?msg=User Account Created .");
        }
        else
        {
        header("location:index.php?msg=Please Try Again.");
        }
    }
    else if(isset($_POST["forgot"]))
    {
    extract(array_map("test_input" , $_POST));

    $query = $d -> select("members","email='$email'");
    $data = mysqli_fetch_array($query);

        if($data>0)
        {
        //$_POST['email'];= $email;
        $token = md5(uniqid(rand()));

        $m->set_data('email',$email);
        $m->set_data('token',$token);

    $a1 = array('email'=>$m->get_data('email'),
                'token'=>$m->get_data('token'));

    $insert=$d->insert('forgot',$a1);

    $subject = "Reset password template";

     $header = "from :vinay91098@gmail.com";

    $message = "Hi we have recieved a password change request from your account.\r \n";

    $message = "Click on this link to set your new account password\r\n";

    $message = "http://localhost/pixeladmin/set_new_pass.php?token=$token";

    $sentmail = mail($email,$subject,$message,$header);

    header("location:index1.php?msg=please check email and reset your password");

    }
    else{
        header("location:index1.php?msg1=Wrong Email");
    }
}
 else if(isset($_POST["insert_question"]))
    {
        extract(array_map("test_input" , $_POST));

        $m->set_data('question',$question);

        $a1 = array('question'=>$m->get_data('question'));

        $insert=$d->insert('faq',$a1); 
        if($insert>0)
        {
        header("location:faq.php?msg=Question Send.");
        }
        else
        {
        header("location:faq.php?msg=Please Try Again.");
        }
    }
 else if(isset($_POST["book_event"]))
     {
        extract(array_map("test_input" , $_POST));

        session_start();
        $cname = $_SESSION['cname'];

        $m->set_data('cname',$cname);
        $m->set_data('etitle',$etitle);
        $m->set_data('edate',$edate);
        $m->set_data('etime',$etime);
        $m->set_data('amount',$amount);

        $a1= array ('cname'=>$m->get_data('cname'),
                    'etitle'=>$m->get_data('etitle'),
                    'edate'=>$m->get_data('edate'),
                    'etime'=>$m->get_data('etime'),
                    'amount'=>$m->get_data('amount'));
        
       $insert=$d->insert('booking',$a1); 
    if($insert>0)
    {
        header("location:events.php?msg=Details send");
    }
    else {
        header("location:events.php?msg=Please try again");

    }
    }
else if(isset($_POST["book_hall"]))
    {
        extract(array_map("test_input" , $_POST));

        session_start();
        $cname= $_SESSION['cname'];
        $name = $_SESSION['name'];

        $m->set_data('cname',$cname);
        $m->set_data('name',$name);
        $m->set_data('date',$date);
        $m->set_data('stime',$stime);
        $m->set_data('etime',$etime);


        $a1 = array('cname'=>$m->get_data('cname'),
                    'name'=>$m->get_data('name'),
                    'date'=>$m->get_data('date'),
                    'stime'=>$m->get_data('stime'),
                    'etime'=>$m->get_data('etime'));


        $active_flag =1;
        $m->set_data('active_flag',$active_flag);
        
        $insert=$d->insert('hall_booking',$a1); 
        if($insert>0)
        {
        header("location:hall.php?msg:You Succesfully booked seminar hall");
        }
        else
        {
        header("location:hall.php?msg=Please Try Again.");
        }
    }
?>