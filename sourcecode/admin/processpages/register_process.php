<?php  
session_start();
include("./include/config.php");
extract($_POST);
$errorarr = array();
$password = "";
if(isset($_POST['submit']))
{
    if(empty($_POST['name']))
    {
        $errorarr['error']['name'] = "Please Enter Full name";
    } else{
        $name = $_POST['name'];
    } 
    if(empty($_POST['email']))
    {
        $errorarr['error']['email'] = "Please Enter Email";
    } else{
        $email = $_POST['email'];
        $checkemail = "select * from admin_register where a_reg_email = '$email'";
        $q = mysqli_query($con , $checkemail);
        $countemail = mysqli_num_rows($q);
        if($countemail > 0)
        {
            $errorarr['error']['email'] = "Email already exists";  
        }
        else
        {

           if(empty($_POST['pass']))
           {
            $errorarr['error']['pass'] = "Please Enter Password";
           } 
           elseif(strlen($_POST['pass']) < 8 )
           {
            $errorarr['error']['pass'] = "Please Enter 8 character Password";
           }else{
               $password = $_POST['pass'];
           }

           if(empty($_POST['cpass']))
           {
            $errorarr['error']['cpass'] = "Please Enter Confirm Password";
           } 
           elseif($password != $_POST['cpass'] )
           {
            $errorarr['error']['cpass'] = "Incorrect Password";
           }

        }
    }

    if(empty($errorarr['error']))
    {   
        $admin_reg = "insert into admin_register (a_reg_name , a_reg_email , a_reg_password ) values ('$name' , '$email' , '$password')";
        if(mysqli_query($con , $admin_reg))
        {   
            
            header("location:login.php");
        }
        else
        {
            echo "kaiik locha pada karo solve";
        }
    }
}


?>