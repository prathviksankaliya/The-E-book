<?php
include("header.php");
?>
<div class="container border-bottom px-4 py-5 " style="margin-top: 5%;" id="icon-grid">
    <h2 class="pb-2 text-success"> All Category</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  g-4 py-5">
    <?php
          $selectshowsubcat = "select * from add_category";
          $q = mysqli_query($con, $selectshowsubcat);
          if ($q) {
            while ($res = mysqli_fetch_assoc($q)) { ?>
    <div class="scroll-to-section">

        <a href="#<?php print_r($res['cat_name']); ?>">
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


<div class=" container m-auto row mb-2 my-5">
    <?php
    $qcat = "select * from add_category";
    if ($showcat = mysqli_query($con, $qcat)) {

        while ($rescat = mysqli_fetch_assoc($showcat)) {
            echo "<br>";

            $totalcat = $rescat['cat_name']; ?>
            <div id="<?php print_r($totalcat); ?>" class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 p-4 d-flex flex-column position-static">
                        <h5 class="d-inline-block mb-2"> <a href="#" class=" text-success"> <?php print_r($totalcat); ?></a></h5>
                        <?php
                        $qsubcat = "select sub_cat_id,sub_cat_name,sub_cat_img from add_sub_category where cat_name ='$totalcat' ";
                        if ($showsubcat = mysqli_query($con, $qsubcat)) {

                            while ($ressubcat = mysqli_fetch_assoc($showsubcat)) {
                                echo "<br>"; ?>

                                <a href="book.php?sc=<?php print_r($ressubcat['sub_cat_name']); ?>" class="text-danger"><?php print_r($ressubcat['sub_cat_name']); ?></a>
                        <?php
                                // print_r($ressubcat['sub_cat_name']);
                            }
                            // echo "<br>";
                        } ?>

                    </div>
                    
                </div>
            </div>
    <?php
        }
    }
    ?>
    <!-- <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">


            <div class="col d-flex align-items-start p-4 text-success">
                <img class="bi text-muted flex-shrink-0 me-3" style="width: 50px;" src="./assets/images/category/Academic & Education.PNG">
                <div>
                    <h6 class="fw-bold mb-0">Academic & Education</h6>
                    <div>
                        <a href="#" class="stretched-link" style="margin-top: 22px;">Continue reading</a><br>
                        <a href="#" class="stretched-link" style="margin-top: 22px;">Continue reading</a><br>
                        <a href="#" class="stretched-link" style="margin-top: 22px;">Continue reading</a><br>
                        <a href="#" class="stretched-link" style="margin-top: 22px;">Continue reading</a><br>
                        </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<?php include("footer.php"); ?>