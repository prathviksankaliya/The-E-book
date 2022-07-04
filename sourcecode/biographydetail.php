<?php include("header.php");

$bioname = $_GET['bn'];

?>


<div class="container-fluid">
    <div class="row" style="margin-top:7%;">
        <div class="container col-lg-10 ">

            <h2 class="text-success p-4" style="text-align: center;">❀ <?php echo $bioname; ?> ❀</h2>
            <div class="row bg-light">
                <div class="col-md-4  p-2">
                    <?php
                    $selectbook = "select * from home_biography where bio_name = '$bioname'";
                    $q = mysqli_query($con, $selectbook);
                    $biocount = mysqli_num_rows($q);
                    if ($biocount) {
                        while ($res = mysqli_fetch_assoc($q)) {

                    ?>
                            <img src="./uploadbook/biographyimg/<?php print_r($res['bio_img']); ?>" class=" border p-2 border-success rounded" style="width: 300px; height:400px" alt="">
                    <?php

                        }
                    }
                    ?>
                </div>
                <div class="col-md-7  p-2 position-relative">

                            <h5 class="text-success p-4 " style="display: inline-block;">✽ Category Name : </h5>
                            <h5 class="text-secondary" style="display: inline-block;"> Biography</h5>
                            <br>
               
                    <?php
                    $selectbook = "select * from home_biography where bio_name = '$bioname'";
                    $q = mysqli_query($con, $selectbook);
                    $authorcount = mysqli_num_rows($q);
                    if ($authorcount) {
                        while ($res = mysqli_fetch_assoc($q)) {

                    ?>
                            <h5 class="text-success p-4 " style="display: inline-block;">✽ Author Name : </h5>
                            <h5 class="text-secondary" style="display: inline-block;"> <?php print_r($res['bio_author']); ?> </h5>
                            <br>
                            <h5 class="text-success p-4 " style="display: inline-block;">✽ Description : </h5>
                            <h5 class="text-secondary" style="display: inline-block;"> <?php print_r($res['bio_desc']); ?> </h5>
                    
                    
                            <br>
                            <h5 class="text-success p-4 " style="display: inline-block;">✽ Launch Date-Time : </h5>
                            <h5 class="text-secondary" style="display: inline-block;"> <?php print_r($res['bio_time']); ?> </h5>
                    
                    <br>

                    <!-- <input type="button" class="bg-grey rounded p-2 m-3 text-light"  name="download" value="Download"> -->
                   <a href="./uploadbook/biographypdf/pdf_process.php?file=<?php print_r($res['bio_pdf']); ?>">
                    <button type="submit" class="btn btn-secondary m-5 p-2">Download Now</button>
                    </a>
                    <a href="./uploadbook/biographypdf/<?php print_r($res['bio_pdf']); ?>" target="_blank">
                    <button type="submit" onclick="bookreaderbio()" class="btn btn-secondary m-5 p-2">Book Preview </button>
                    </a>
                    <?php

                        }
                    }
                    ?>
                </div>
            </div>
            <div class="container-fluid bg-light">

                <div class="container border-bottom px-4 py-5 " style="margin-top: 5%;" id="icon-grid">
                    <h2 class="pb-2 text-success"> All Category</h2>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  g-4 py-5">
                        <?php
                        $selectshowsubcat = "select * from add_category";
                        $q = mysqli_query($con, $selectshowsubcat);
                        if ($q) {
                            while ($res = mysqli_fetch_assoc($q)) { ?>
                                <div class="scroll-to-section">

                                    <a href="allcategory.php">
                                        <div class="col d-flex align-items-start">
                                            <img class="bi text-muted flex-shrink-0 me-3" style="width: 50px;" src="./assets/images/category/<?php print_r($res['cat_img']) ?>">
                                            <div>
                                                <h4 class="fw-bold mb-0"><?php print_r($res['cat_name']) ?></h4>
                                                <p> Learn More About The <?php print_r($res['cat_name']) ?> . . .</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->




    </div>
    <script>
        function bookreaderbio() {
            <?php 
            $insertbookreader = "insert into book_read_user (reader_name , reader_book) values ('$username' , '$bioname')";
                                mysqli_query($con, $insertbookreader);
        ?> }
    </script>
    <?php include("footer.php"); ?>