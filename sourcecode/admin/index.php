<?php

include("header.php");
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Category</li>
            </ol>
            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Add Category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="category.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Add SubCategory</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="subcategory.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Add Books</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="book.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Add Biography</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="biography.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="row">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th><?php echo 'Id'; ?></th>
                                <th><?php echo 'Category Name'; ?></th>
                                <th><?php echo ' SubCategory Name'; ?></th>
                                <th><?php echo 'SubCategory Image'; ?></th>
                                <th><?php echo 'SubCategory Time'; ?></th>
                                <th><?php echo 'SubCategory Status'; ?></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th><?php echo 'Id'; ?></th>
                                <th><?php echo 'Category Name'; ?></th>
                                <th><?php echo ' SubCategory Name'; ?></th>
                                <th><?php echo 'SubCategory Image'; ?></th>
                                <th><?php echo 'SubCategory Time'; ?></th>
                                <th><?php echo 'SubCategory Status'; ?></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $showcat = "select * from add_sub_category order by sub_cat_id desc";
                            $id = 1;
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr>
                                        <td><?php print_r($res['sub_cat_id']); ?></td>
                                        <td><?php print_r($res['cat_name']); ?></td>
                                        <td><?php print_r($res['sub_cat_name']); ?></td>
                                        <td><?php print_r($res['sub_cat_img']); ?></td>
                                        <td><?php print_r($res['sub_cat_time']); ?></td>
                                        <td><?php print_r($res['sub_cat_status']); ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include("footer.php"); ?>