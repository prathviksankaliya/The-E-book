<?php
session_start();
// print_r($_POST);
include("./processpages/register_process.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Onix Digital Marketing HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
</head>

<body>
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class=" col-lg-4">
                    
                    <h1 class="display-4 fw-bold lh-1" style="color:lightgreen;">The Book Store</h1><br>
                    <p class="lead" style="margin-bottom: 1%;">“A room without books is like a body without a soul.”</p>
                </div>
                <div class="col-lg-6 m-auto align-self-center">
                    <form id="contact" action="" method="post">
                        <div class="row">
                        <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="name" value="<?php 
                                    if(isset($name))
                                        {
                                            echo $name;
                                        } ?>" id="name" placeholder="Name">
                                    <span class="text-danger"><?php
                                                                if (isset($_SESSION['error']['name'])) {
                                                                    echo $_SESSION['error']['name'];
                                                                }
                                                                ?>
                                    </span>

                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" value="<?php 
                                    if(isset($email))
                                        {
                                            echo $email;
                                        } ?>" id="email" placeholder="Email">
                                    <span class="text-danger"><?php 
                                        if(isset($_SESSION['error']['email']))
                                        {
                                            echo $_SESSION['error']['email'];
                                        }
                                    ?>
                                    </span>

                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="password" name="pass" id="password" placeholder="password">
                                    <span class="text-danger"><?php 
                                        if(isset($_SESSION['error']['pass']))
                                        {
                                            echo $_SESSION['error']['pass'];
                                        }
                                    ?></span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="password" name="cpass" id="password" placeholder="Confirm password">
                                    <span class="text-danger"><?php 
                                        if(isset($_SESSION['error']['cpass']))
                                        {
                                            echo $_SESSION['error']['cpass'];
                                        }
                                    ?></span>
                                </fieldset>
                            </div>
                            <div class=" p-0 m-0 ">

                                <!-- <input type="submit" name="submit" value="Register Now "> -->

                                <button type="submit" name="submit" id="form-submit" class="main-button">Login Now </button>
                            </div>
                            <div class="my-3">
                                <h7>Already Have Register ? <a href="login.php"> Login Now</a></h7>
                            </div>
                        </div>

                    </form>
                    <?php
                    unset($_SESSION['error']);
                    unset($email);
                    unset($name);
                    ?>
                </div>
            </div>
        </div>

    </div>


</body>

</html>