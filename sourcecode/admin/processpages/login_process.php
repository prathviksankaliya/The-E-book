<?php  
session_start();
if(isset($_SESSION['login']) || !empty($_SESSION['email']) )
{
    header("location:index.php");
    exit;
}
include("./include/config.php");
$errorarr = array();
extract($_POST);
if(isset($_POST['submit']))
{
    if(empty($_POST['email']))
    {
        $errorarr['error']['email'] = "Please Enter Email";
    }
    else{
        $email = $_POST['email'];
        $checkemail = "select * from admin_register where a_reg_email = '$email' ";
        $q = mysqli_query($con , $checkemail);
        $emailcount = mysqli_num_rows($q);
        if($emailcount)
        {
            $dbfetchpass = mysqli_fetch_assoc($q);
            if($dbfetchpass['a_reg_password'] != $_POST['pass'])
            {
                $errorarr['error']['pass'] = "Please Enter valid password";
            }
            else{

                $_SESSION['login'] = "1";
                $_SESSION['email'] = $email;
                header("location: index.php");
                exit;
            }
        }else{
            $errorarr['error']['email'] = "Please Enter valid Email";
        }
    }
}


?>