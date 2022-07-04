<div class="footer-dec">
  <img src="assets/images/footer-dec.png" alt="">
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="about footer-item">
          <div class="logo">
            <a href="index.php">
              <h3 class="text-success my-4">⍣ The Book Store ⍣ </h3>
            </a>
          </div>
          <a href="#">MR.Shadow</a>
          <ul>
            <li><a href="https://www.linkedin.com/in/prathvik-sankaliya/"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/prathvik._/?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="services footer-item">
          <h4>Menu Bar</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="allcategory.php">Categories</a></li>
            <li><a href="index.php#biography">Biography</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="community footer-item">
          <h4>Categories</h4>
          <ul>

            <?php
            $selectshowsubcat = "select * from add_category limit 5";
            $q = mysqli_query($con, $selectshowsubcat);
            if ($q) {
              while ($res = mysqli_fetch_assoc($q)) { ?>
                <li><a href="allcategory.php"><?php print_r($res['cat_name']); ?></a></li>
            <?php
              }
            }
            ?>
            <li><a href="allcategory.php" class="text-danger">View More ......</a></li>

          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="subscribe-newsletters footer-item">
          <h4>Contect Us</h4>
          <p>Get our latest news and ideas to your Phone</p><br>
          <p>Send SMS and Call Our Team</p><br>
          <h4 class="text-success "><i class="fa fa-mobile mx-3"></i>1234567890</h4>
          <?php
          

          if (isset($_SESSION['login_name'])) {
            $username = $_SESSION['login_name'];

          ?>

            <form method="POST">
              <!-- <button type="submit" name="logout" >Log Out This Site</button>  -->
              <i class="fa fa-sign-out "></i>
              <input type="submit" class="text-white" name="logout" value="Log Out This Site">
            </form>
          <?php
            if (isset($_POST['logout'])) {
              session_destroy();
              header("location: login.php");
              
            }
          }
          ?>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="copyright">
          <p>Copyright © 2021 Books.com All Rights Reserved.
            <br>
            Designed by <span class="text-danger">MR.Shadow & Our Teams</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/custom.js"></script>

</body>

</html>