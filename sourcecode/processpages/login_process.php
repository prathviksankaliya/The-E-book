<?php
session_start();
include("./include/config.php");

    extract($_POST);
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $emailq = "select * from user_register where reg_email = '$email' ";
        $q = mysqli_query($con, $emailq);
        $emailcount = mysqli_num_rows($q);
        if ($emailcount) {
            $dbpass = mysqli_fetch_assoc($q);

            if($dbpass['reg_password'] != $_POST['pass'])
            { 
                $_SESSION['error']['password'] = "please enter valid Password";
                
            }
            else{
                $_SESSION['login_name'] = $dbpass['reg_name'];
                header("location:index.php");
            }
        }
        else{
            $_SESSION['error']['email'] = "please enter valid Email";
        }

        
        
    }
?>
