<?php
include("header.php");
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
            

            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ Category Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th>Category Status</th>
                                <th>Category Time</th>
                                <th>Edit</th>
                                <th>Delete</th>

                        </tr>
                        <?php
                            $showcat = "select * from add_category order by cat_id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['cat_id']); ?></td>
                                        <td><?php print_r($res['cat_name']); ?></td>
                                        <td><?php print_r($res['cat_img']); ?></td>
                                        <td><?php print_r($res['cat_status']); ?></td>
                                        <td><?php print_r($res['cat_time']); ?></td>
                                        <td>
                                        <a href="update.php?cid=<?php print_r($res['cat_id']); ?>" class="btn bg-success text-white"><i class="fa fa-pen-square"></i> Edit</a>
                                        </td>
                                        <td>    
                                        <a href="delete.php?cid=<?php print_r($res['cat_id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>
            


            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ SubCategory Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>SubCategory Id</th>
                                <th>Category Name</th>
                                <th>SubCategory Name</th>
                                <th>SubCategory Image</th>
                                <th>SubCategory Time</th>
                                <th>SubCategory Status</th>
                                <th>Edit</th>
                                <th>Delete</th>

                        </tr>
                        <?php
                            $showcat = "select * from add_sub_category order by sub_cat_id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['sub_cat_id']); ?></td>
                                        <td><?php print_r($res['cat_name']); ?></td>
                                        <td><?php print_r($res['sub_cat_name']); ?></td>
                                        <td><?php print_r($res['sub_cat_img']); ?></td>
                                        <td><?php print_r($res['sub_cat_time']); ?></td>
                                        <td><?php print_r($res['sub_cat_status']); ?></td>
                                        
                                        <td>
                                        <a href="update.php?scid=<?php print_r($res['sub_cat_id']); ?>" class="btn bg-success text-white"><i class="fa fa-pen-square"></i> Edit</a>
                                        </td>
                                        <td>    
                                        <a href="delete.php?scid=<?php print_r($res['sub_cat_id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>

            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ User Register Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Register Id</th>
                                <th>Register Name</th>
                                <th>Register Email</th>
                                <th>Register Password</th>
                                <th>Register Time</th>
                                <th>Register Status</th>
                              
                                <th>Delete</th>
                        </tr>
                        <?php
                            $showcat = "select * from user_register order by reg_id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['reg_id']); ?></td>
                                        <td><?php print_r($res['reg_name']); ?></td>
                                        <td><?php print_r($res['reg_email']); ?></td>
                                        <td><?php print_r($res['reg_password']); ?></td>
                                        <td><?php print_r($res['reg_time']); ?></td>
                                        <td><?php print_r($res['reg_status']); ?></td>
                                        
                                        <td>    
                                        <a href="delete.php?ruid=<?php print_r($res['reg_id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>

            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ Admin Register Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Register Id</th>
                                <th>Register Name</th>
                                <th>Register Email</th>
                                <th>Register Password</th>
                                <th>Register Time</th>
                                <th>Register Status</th>
                              
                                <th>Delete</th>
                        </tr>
                        <?php
                            $showcat = "select * from admin_register order by a_reg_id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['a_reg_id']); ?></td>
                                        <td><?php print_r($res['a_reg_name']); ?></td>
                                        <td><?php print_r($res['a_reg_email']); ?></td>
                                        <td><?php print_r($res['a_reg_password']); ?></td>
                                        <td><?php print_r($res['a_reg_time']); ?></td>
                                        <td><?php print_r($res['a_reg_status']); ?></td>
                                        <td>    
                                        <a href="delete.php?raid=<?php print_r($res['a_reg_id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>

        </div>
    </main>

    <?php include("footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    </body>

    </html>