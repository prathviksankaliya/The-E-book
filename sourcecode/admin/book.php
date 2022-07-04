<?php
include("header.php");

?>
<div id="layoutSidenav_content">
    <?php include("./processpages/book_process.php"); ?>
    <div class="container px-4 ">
        <h1 class="mt-4">Add Books</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Books</li>
        </ol>

        <form method="post" enctype="multipart/form-data">
            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="form-select" name="selectsubcat" id="inputGroupSelect02">
                            <!-- <option selected>Choose...</option>     -->
                            <option selected>
                                <?php
                                if (isset($selectsubcat)) {
                                    echo '<br>' . $selectsubcat;
                                } else {
                                    echo 'Choose...';
                                } ?>
                            </option>
                            <?php
                            $selectshowsubcat = "select sub_cat_name from add_sub_category";
                            $q = mysqli_query($con, $selectshowsubcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) {
                                    // print_r('<option value="1">.'$res['cat_name']'.</option>');
                                    echo " '<option value='$res[sub_cat_name]'>$res[sub_cat_name]</option>' ";
                                }
                            }
                            ?>

                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Category</label>

                    </div>
                    <span class="text-danger my-5"><?php
                                                    if (isset($bookerror['error']['selectsubcat'])) {
                                                        echo $bookerror['error']['selectsubcat'];
                                                    }
                                                    ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="bookname" value="<?php
                                                                            if (isset($bookname)) {
                                                                                echo $bookname;
                                                                            } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Book Name</label>
                        <span class="text-danger my-5"><?php
                                                        if (isset($bookerror['error']['bookname'])) {
                                                            echo $bookerror['error']['bookname'];
                                                        }
                                                        ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="authorname" value="<?php
                                                                            if (isset($authorname)) {
                                                                                echo $authorname;
                                                                            } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Author Name</label>
                        <span class="text-danger my-5"><?php
                                                        if (isset($bookerror['error']['authorname'])) {
                                                            echo $bookerror['error']['authorname'];
                                                        }
                                                        ?>
                        </span>
                    </div>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="Choose Icon" style="margin-bottom:2%;">Choose Book Image </label>
                    <input class="form-control" name="image" type="file"  value="<?php
                                                                                if (isset($imgfile_name)) {
                                                                                    echo $imgfile_name;
                                                                                } ?>"/>


                    <span class="text-danger my-5"><?php
                                                    if (isset($bookerror['error']['image'])) {
                                                        echo $bookerror['error']['image'];
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
                <div class="col-md-6">
                    <label for="Choose Icon" style="margin-bottom:2%;">Choose Book's Pdf </label>
                    <input class="form-control" name="pdf" type="file" value="<?php
                                                                                if (isset($pdffile_name)) {
                                                                                    echo $pdffile_name;
                                                                                } ?>" />


                    <span class="text-danger my-5"><?php
                                                    if (isset($bookerror['error']['pdf'])) {
                                                        echo $bookerror['error']['pdf'];
                                                    } else {
                                                        if (isset($successpdf)) {
                                                            echo '<p class="text-success">' . $successpdf . '</p>';
                                                        }
                                                    }
                                                    ?>
                    </span>

                </div>

            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <div class="input-group">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="desc" aria-label="With textarea"><?php
                                                                                if (isset($bookdesc)) {
                                                                                    echo $bookdesc;
                                                                                } ?></textarea>
                            
                        </div>
                        <span class="text-danger my-5"><?php
                                                            if (isset($bookerror['error']['desc'])) {
                                                                echo $bookerror['error']['desc'];
                                                            }
                                                            ?>
                            </span>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mt-4 mb-0">
                <span class="text-success my-5"><?php
                                                            if (isset($success)) {
                                                                echo $success;
                                                            }
                                                            ?>
                            </span>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Book">
                        
                    </div>

                </div>

            </div>

        </form>
        <?php
        unset($bookerror['error']);      
        
        ?>

    </div>


    <?php include("footer.php"); ?>