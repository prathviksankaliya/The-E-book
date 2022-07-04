<?php
include("header.php");

?>
<div id="layoutSidenav_content">
    <?php include("./processpages/subcategory_process.php"); ?>
    <div class="container px-4 ">
        <h1 class="mt-4">Add Sub Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Sub Category</li>
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
                                    echo '<br>'.$selectsubcat;
                                }
                                else{
                                    echo 'Choose...';
                                } ?>
                            </option>
                            <?php
                            $selectshowsubcat = "select cat_name from add_category";
                            $q = mysqli_query($con, $selectshowsubcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) {
                                    // print_r('<option value="1">.'$res['cat_name']'.</option>');
                                    echo " '<option value='$res[cat_name]'>$res[cat_name]</option>' ";
                                }
                            }
                            ?>

                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Category</label>

                    </div>
                    <span class="text-danger my-5"><?php
                                                    if (isset($subcategoryerror['error']['selectsubcat'])) {
                                                        echo $subcategoryerror['error']['selectsubcat'];
                                                    }
                                                    ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="subcatname" value="<?php
                                                                                if (isset($subcatname)) {
                                                                                    echo $subcatname;
                                                                                } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Sub Category Name</label>
                        <span class="text-danger my-5"><?php
                                                        if (isset($subcategoryerror['error']['subcatname'])) {
                                                            echo $subcategoryerror['error']['subcatname'];
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
                                                    if (isset($subcategoryerror['error']['image'])) {
                                                        echo $subcategoryerror['error']['image'];
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
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Subcategory">
                    </div>

                </div>

            </div>

        </form>
        <?php
        unset($subcategoryerror['error']);
        unset($selectsubcat);

        ?>

    </div>


    <?php include("footer.php"); ?>