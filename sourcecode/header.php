<?php
session_start();
include("./include/config.php");

if(isset($_SESSION['login_name']))
{
  $username = $_SESSION['login_name'];
}
else{
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

  <title>The Book Store</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
  <link rel="stylesheet" href="./vendor/animate.css">

  <link rel="stylesheet" href="./assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
 
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo ">
              <!-- <img src="assets/images/booklogo.png"> -->
              <h3 class="text-success my-4">⍣ The Book Store ⍣ </h3>
              <!-- ⍣  ✽ ✾ ✿ ❀ ❁  -->
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="allcategory.php">Categories</a></li>
              <li class="scroll-to-section"><a href="index.php#biography">Biography</a></li>
              <li class="scroll-to-section"><a href="about.php">About Us</a></li>
              <!-- <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> -->
              <li class="scroll-to-section">
                <?php 
                if(isset($username))
                { ?>
                  <h6 class="text-secondary ">Welcome To</h6> <h5 class="text-success"><?php echo $username; ?></h5>
             <?php 
                }
                else {
                  ?>
                  <div class="main-red-button-hover"><a href="login.php">★ Login Now ★</a></div>
                  <?php
                }
                ?>
                 </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>