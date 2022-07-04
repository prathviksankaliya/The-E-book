<?php
include("./include/config.php");

extract($_POST);
$password = "";
// print_r($_POST);

if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $_SESSION['error']['name'] = "Please Enter name";
    } else {
        $name = $_POST['name'];
    }
    if (empty($_POST['email'])) {
        $_SESSION['error']['email'] = "Please Enter Email";
    } else {
        $email = $_POST['email'];
        $emailq = "select * from user_register where reg_email= '$email' ";
        $q = mysqli_query($con, $emailq);
        $emailcount = mysqli_num_rows($q);
        if ($emailcount > 0) {
            $_SESSION['error']['email'] = "Email already Exists";
        
        }
    }
    if (empty($_POST['pass'])) {
        $_SESSION['error']['pass'] = "Please Enter Password";
    } else {
        if (strlen($_POST['pass']) < 8) {
            $_SESSION['error']['pass'] = "please enter 8 charecter password";
        } else {
            $password = $_POST['pass'];
        }
    }

    if (empty($_POST['cpass'])) {
        $_SESSION['error']['cpass'] = "Please enter Confirm Password";
    } else {
        if (!($password == $_POST['cpass'])) {
            $_SESSION['error']['cpass'] = "incorrect Confirm Password";
        } 
    }
    if(empty($_SESSION['error']))
    {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $reg_user = "insert into user_register (reg_name , reg_email,reg_password) values ('$name','$email' , '$password' )";
            mysqli_query($con, $reg_user);

            $_SESSION['register_done'] = "register_done";
            header("location:login.php");
    }
     
}
