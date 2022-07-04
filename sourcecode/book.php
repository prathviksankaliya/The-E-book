<?php include("header.php");

$bookcat = $_GET['sc'];

?>


<div class="container-fluid">
  <div class="row" style="margin-top:6%;">
    <div class=" col-lg-2">
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; ">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

          <span class="fs-4" style="text-align: center;">Books Category</span>
        </a>
        <hr>

        <?php $qcat = "select * from add_category";
        if ($showcat = mysqli_query($con, $qcat)) {

          while ($rescat = mysqli_fetch_assoc($showcat)) {
            // echo "<br>";

            $totalcat = $rescat['cat_name']; ?>
            <ul class="nav nav-pills flex-column mb-auto">
              <li>
                <a class="nav-link link-success">
                  <?php print_r($totalcat); ?>
                </a>
              </li>
              <li>

                <?php
                $qsubcat = "select sub_cat_name,sub_cat_img from add_sub_category where cat_name ='$totalcat' ";
                if ($showsubcat = mysqli_query($con, $qsubcat)) {

                  while ($ressubcat = mysqli_fetch_assoc($showsubcat)) {
                    echo "<br>"; ?>
                    <a href="book.php?sc=<?php print_r($ressubcat['sub_cat_name']); ?>" class="nav-link link-secondary mx-4">
                      -
                  <?php
                    print_r($ressubcat['sub_cat_name']);
                  }
                  // echo "<br>";
                } ?>


                    </a>
              </li>

            </ul>



        <?php
          }
        }
        //   
        ?>
        <hr>
      </div>
    </div>
    <div class="container col-lg-9">
      <h2 class="text-success p-4">❀ <?php echo $bookcat; ?> ❀</h2>

      <div class=" bg-light">
        <div class="container-fluid">

          <div class="row ">
            <div class=" col-lg-11">

              <div class="row">
                <?php
                $selectbook = "select * from add_book where sub_cat_name = '$bookcat'";
                $q = mysqli_query($con, $selectbook);
                $bookcount = mysqli_num_rows($q);
                if ($bookcount) {
                  while ($res = mysqli_fetch_assoc($q)) {

                ?>
                    <div class="col-md-4 col-lg-3 p-4 wow zoomIn border-bottom">
                      <a href="bookdetail.php?sc=<?php print_r($res['sub_cat_name']); ?>&bn=<?php print_r($res['book_name']); ?>">
                        <div class="card-doctor">
                          <div class="header">
                            <img src="./uploadbook/bookimg/<?php print_r($res['book_img']); ?>" class="p-1" style="width: 202px; height:270px" alt="">
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

                  echo " Book nathi malti";
                }

                
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
      </div> <!-- .page-section -->



    </div>
  </div>
  <?php include("footer.php"); ?>