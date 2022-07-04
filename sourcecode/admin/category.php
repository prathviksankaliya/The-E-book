<?php
include("header.php");
?>
<div id="layoutSidenav_content">
    <?php include("./processpages/category_process.php"); ?>
    <div class="container px-4 ">
        <h1 class="mt-4">Add new Categories</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Categories</li>
        </ol>

        <form method="post" enctype="multipart/form-data">

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="catname" value="<?php
                                                                            if (isset($catname)) {
                                                                                echo $catname;
                                                                            } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Category Name</label>
                        <span class="text-danger my-5"><?php
                                                        if (isset($categoryerror['error']['catname'])) {
                                                            echo $categoryerror['error']['catname'];
                                                        }
                                                        ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">

                    <input class="form-control" name="image" type="file" />

                    <span class="text-danger my-5"><?php
                                                    if (isset($categoryerror['error']['image'])) {
                                                        echo $categoryerror['error']['image'];
                                                    } else {
                                                        if (isset($successimg)) {
                                                            echo '<p class="text-success">' . $successimg . '</p>';
                                                        }
                                                    }
                                                    ?>
                    </span>

                </div>

            </div>
            <div class="row mb-3">
                <div class="col-md-6 mt-4 mb-0">

                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add category">
                        
                    </div>

                </div>

            </div>

        </form>
        <?php
        unset($categoryerror['error']);
        ?>

    </div>


    <?php include("footer.php"); ?>