<?php
include("header.php");
?>
<!-- ***** Header Area End ***** -->

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/girlbanner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="text-success">The Book Store</h4>
        <p>“Easy to Read , Hard to Put Down”.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/images/summerbanner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="text-success">Summer Collections</h4>
        <p>“One benefit of Summer was that each day we had more light to read by”.</p>

      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/images/student.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="text-success">Students collections</h4>
        <p>“The world is a book, and those who do not travel read only a page”.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Three columns of text below the carousel -->



<!-- category 2nd  

  <?php
  $selectshowsubcat = "select * from add_category";
  $q = mysqli_query($con, $selectshowsubcat);
  if ($q) {
    while ($res = mysqli_fetch_assoc($q)) { ?>
      <div class="col-lg-2 p-4 border shadow p-3 mb-5 bg-body rounded mx-3 container " >
      <a href="allcategory.php" class="text-black"> <img class="bd-placeholder-img rounded-circle p-2" width="140" height="140" src="./assets/images/category/<?php print_r($res['cat_img']) ?>" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777"></rect></img>
  
        <h4 style="text-align: center;" class="my-2"><?php print_r($res['cat_name']) ?></h4>
      </a>
  
    </div>
    <?php
    }
  }
    ?>
  -->

<div id="categories" class="our-services section">
  <div class="services-right-dec">
    <img src="assets/images/services-right-dec.png" alt="">
  </div>

  <div class="container">
    <div class="services-left-dec">
      <img src="assets/images/services-left-dec.png" alt="">
    </div>
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>We <em>Provide</em> The Best <span>Categories</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-services">
          <?php
          $selectshowsubcat = "select * from add_category";
          $q = mysqli_query($con, $selectshowsubcat);
          if ($q) {
            while ($res = mysqli_fetch_assoc($q)) { ?>
              <a href="allcategory.php">
                <div class="item">
                  <h4><?php print_r($res['cat_name']) ?></h4>
                  <div class="icon"><img src="assets/images/category/<?php print_r($res['cat_img']) ?>" style="width: 70px; height: 70px;" alt=""></div>
                  <p>Learn about <?php print_r($res['cat_name']) ?></p>
                </div>
              </a>
          <?php
            }
          }
          ?>
          <div class="item">
            <h4>View More ..</h4>
            <div class="icon"><img src="assets/images/category/viewmore.png" alt=""></div>
            <p>Learn more...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php

if (isset($username)) {
$selectoldbook = "select * from book_read_user where reader_name = '$username' ";
$oldbookqcheck = mysqli_query($con, $selectoldbook);
$oldbookcount = mysqli_num_rows($oldbookqcheck);
if (!$oldbookcount) {
  $checkoldbookuser = "Not Read Any Book";
}


?>
  <div class="container col-lg-9">
    <div id="fav" class="section-heading">
      <h2 style="text-align: center;" class="my-5">❁ Old Reading <span> Books </span> ❁</h2>
    </div>
    <?php
    if (isset($checkoldbookuser)) { ?>

      <p class="text-center text-secondary"><?php echo $checkoldbookuser ?></p>
    <?php
    }
    ?>

    <div class="container-fluid">

      <div class="row ">
        <div class=" col-lg-11">

          <div class="row">
            <?php
            $selectoldbook = "select * from book_read_user where reader_name = '$username' order by reader_id desc limit 8";
            $oldbookq = mysqli_query($con, $selectoldbook);
            $oldbookcount = mysqli_num_rows($oldbookq);
            if ($oldbookcount) {
              while ($res = mysqli_fetch_assoc($oldbookq)) {
                $oldbookname = $res['reader_book'];
                $booktime = $res['reader_time'];
                $selectbook = "select * from add_book where book_name= '$oldbookname' ";
                $q = mysqli_query($con, $selectbook);
                $bookcount = mysqli_num_rows($q);
                if ($bookcount) {
                  while ($res = mysqli_fetch_assoc($q)) {

            ?>
                    <div class="col-md-4 col-lg-3 p-4 wow zoomIn border-bottom">
                      <a href="bookdetail.php?sc=<?php print_r($res['sub_cat_name']); ?>&bn=<?php print_r($res['book_name']); ?>">
                        <div class="card-doctor">
                          <div class="header">
                            <img src="./uploadbook/bookimg/<?php print_r($res['book_img']); ?>" class=" border p-1  rounded" style="width: 210px; height:270px" alt="">
                            <div class="meta">
                              <!-- <p>Prathvik</p> -->
                              <p class="text-light"><?php print_r($res['book_author']); ?></p>
                            </div>
                          </div>
                          <div class="body">
                            <p class="text-xl mb-0"><?php print_r($res['book_name']); ?></p>
                            <span class="text-sm text-grey"><?php echo $booktime; ?></span>
                          </div>
                        </div>
                      </a>
                    </div>

            <?php

                  }
                }
                $selectbook = "select * from home_biography where bio_name= '$oldbookname' ";
                $q = mysqli_query($con, $selectbook);
                $bookcount = mysqli_num_rows($q);
                if ($bookcount) {
                  while ($res = mysqli_fetch_assoc($q)) {

            ?>
                    <div class="col-md-4 col-lg-3 p-4 wow zoomIn border-bottom">
                      <a href="biographydetail.php?bn=<?php print_r($res['bio_name']); ?>">
                        <div class="card-doctor">
                          <div class="header">
                            <img src="./uploadbook/biographyimg/<?php print_r($res['bio_img']); ?>" class=" border p-1  rounded" style="width: 210px; height:270px" alt="">
                            <div class="meta">
                              <!-- <p>Prathvik</p> -->
                              <p class="text-light"><?php print_r($res['bio_author']); ?></p>
                            </div>
                          </div>
                          <div class="body">
                            <p class="text-xl mb-0"><?php print_r($res['bio_name']); ?></p>
                            <span class="text-sm text-grey"><?php echo $booktime; ?></span>
                          </div>
                        </div>
                      </a>
                    </div>

            <?php

                  }
                }

              }
            }

            // if ($q) {
            //    
            ?>

            <!-- <div class="col-md-4 col-lg-3 p-4 wow zoomIn">
            <div class="card-doctor">
              <div class="header">
                <img src="./uploadbook/biographyimg/Albert Einstein.jpg" class="p-1" style="width: 202px; height:270px" alt="">
                <div class="meta">
                  <p>Prathvik</p>
                  <p class="text-light">: The Science and Life of Albert Einstein</p>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">Albert Einstein</p>
                <span class="text-sm text-grey">Cardiology</span>
              </div>
            </div>
          </div> -->


          </div>

        </div>
      </div>
    </div> <!-- .container -->
    <!-- .page-section -->



  </div>
<?php }
?>




<div id="biography" class="section-heading">
  <h2 style="text-align: center;" class="my-5">❀ The Great <span>Biographies</span> ❀</h2>
</div>

<div class="row mb-2 container m-auto">

  <?php
  $bioshow = "select * from home_biography";
  $q = mysqli_query($con, $bioshow);
  if ($q) {
    while ($res = mysqli_fetch_assoc($q)) { ?>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img p-1" width="200" height="250" src="./uploadbook/biographyimg/<?php print_r($res['bio_img']); ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect></img>

          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Biography</strong>
            <h3 class="mb-0"><?php print_r($res['bio_name']); ?> </h3>
            <div class="mb-1 text-muted"><?php print_r($res['bio_time']); ?></div>
            <p class="card-text mb-auto"><?php print_r($res['bio_desc']); ?></p>
            <a href="biographydetail.php?bn=<?php print_r($res['bio_name']); ?>" class="stretched-link">Continue reading</a>
          </div>

        </div>
      </div>
  <?php

    }
  }
  ?>

</div>




<div class="container col-lg-9">
  <div id="fav" class="section-heading">
    <h2 style="text-align: center;" class="my-5">❁ Our Latest <span> Books </span> ❁</h2>
  </div>


  <div class="container-fluid">

    <div class="row ">
      <div class=" col-lg-11">

        <div class="row">
          <?php
          $selectbook = "select * from add_book order by book_id desc limit 8";
          $q = mysqli_query($con, $selectbook);
          $bookcount = mysqli_num_rows($q);
          if ($bookcount) {
            while ($res = mysqli_fetch_assoc($q)) {

          ?>
              <div class="col-md-4 col-lg-3 p-4 wow zoomIn border-bottom">
                <a href="bookdetail.php?sc=<?php print_r($res['sub_cat_name']); ?>&bn=<?php print_r($res['book_name']); ?>">
                  <div class="card-doctor">
                    <div class="header">
                      <img src="./uploadbook/bookimg/<?php print_r($res['book_img']); ?>" class=" border p-1  rounded" style="width: 210px; height:270px" alt="">
                      <div class="meta">
                        <!-- <p>Prathvik</p> -->
                        <p class="text-light"><?php print_r($res['book_author']); ?></p>
                      </div>
                    </div>
                    <div class="body">
                      <p class="text-xl mb-0"><?php print_r($res['book_name']); ?></p>
                      <span class="text-sm text-grey"><?php $time = strtotime($res['book_time']);
                                                      echo date("d-m-y", $time); ?></span>
                    </div>
                  </div>
                </a>
              </div>

          <?php

            }
          } else {

            echo "Book is Not Added";
          }

          // if ($q) {
          //    
          ?>

          <!-- <div class="col-md-4 col-lg-3 p-4 wow zoomIn">
            <div class="card-doctor">
              <div class="header">
                <img src="./uploadbook/biographyimg/Albert Einstein.jpg" class="p-1" style="width: 202px; height:270px" alt="">
                <div class="meta">
                  <p>Prathvik</p>
                  <p class="text-light">: The Science and Life of Albert Einstein</p>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">Albert Einstein</p>
                <span class="text-sm text-grey">Cardiology</span>
              </div>
            </div>
          </div> -->


        </div>

      </div>
    </div>
  </div> <!-- .container -->
  <!-- .page-section -->



</div>

<div id="biography" class="section-heading">
  <h2 style="text-align: center;" class="my-5">⍣ Some Of Most <span> Favourite </span> ⍣</h2>
</div>

<div class="row mb-2 container m-auto">

  <?php
  $bioshow = "select * from home_biography order by bio_id desc limit 1";
  $q = mysqli_query($con, $bioshow);
  if ($q) {
    while ($res = mysqli_fetch_assoc($q)) { ?>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img p-1" width="200" height="250" src="./uploadbook/biographyimg/<?php print_r($res['bio_img']); ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect></img>

          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Biography</strong>
            <h3 class="mb-0"><?php print_r($res['bio_name']); ?> </h3>
            <div class="mb-1 text-muted"><?php print_r($res['bio_time']); ?></div>
            <p class="card-text mb-auto"><?php print_r($res['bio_desc']); ?></p>
            <a href="biographydetail.php?bn=<?php print_r($res['bio_name']); ?>" class="stretched-link">Continue reading</a>
          </div>

        </div>
      </div>
  <?php

    }
  }
  ?>

  <?php
  $favbooks = array(8, 10, 12, 14, 15, 16, 17);
  for ($i = 0; $i < count($favbooks); $i++) {


    $bioshow = "select * from add_book where book_id = '$favbooks[$i]'";
    $q = mysqli_query($con, $bioshow);
    if ($q) {
      while ($res = mysqli_fetch_assoc($q)) { ?>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img p-1" width="200" height="250" src="./uploadbook/bookimg/<?php print_r($res['book_img']); ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect></img>

            </div>
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success"><?php print_r($res['sub_cat_name']); ?></strong>
              <h3 class="mb-0"><?php print_r($res['book_name']); ?> </h3>
              <div class="mb-1 text-muted"><?php print_r($res['book_time']); ?></div>
              <p class="card-text mb-auto"></p>

              <a href="bookdetail.php?bn=<?php print_r($res['book_name']); ?>&sc=<?php print_r($res['sub_cat_name']); ?>" class="stretched-link">Continue reading</a>
            </div>

          </div>
        </div>
  <?php

      }
    }
  }
  ?>




</div>

<?php
include("footer.php");
?>