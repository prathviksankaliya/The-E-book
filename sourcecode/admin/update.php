
<?php

include("./include/config.php");
include("./processpages/update_process.php");
if(isset($_GET['cid']))
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Category </h1>
 </div><br>

 <label> Category Name: </label>
 <input type="text" name="catname" class="form-control"> <br>
 <span class="text-danger my-3">
    <?php 
    if(isset($categoryerror['error']['catname']))
    {
        echo $categoryerror['error']['catname'] ;
    }
    ?>
 </span>
 <span class="text-success">
    <?php 
    if(isset($successupdate))
    {
        echo $successupdate ;
    }
    ?>
 </span>


 <button class="btn btn-success" type="submit" name="submit"> Edit Category </button><br>

 </div>
 </form>
 </div>
</body>
</html>
<?php } 
elseif(isset($_GET['scid']))
{ ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update SubCategory </h1>
 </div><br>
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
                    
            

 <input type="text" name="subcatname" class="form-control my-3" placeholder="Subcategory Name"> <br>
 <span class="text-danger ">
    <?php 
    if(isset($subcategoryerror['error']['subcatname']))
    {
        echo $subcategoryerror['error']['subcatname'] ;
    }
    ?>
 </span>
 <span class="text-danger"><?php
                                                    if (isset($subcategoryerror['error']['selectsubcat'])) {
                                                        echo $subcategoryerror['error']['selectsubcat'];
                                                    }
                                                    ?>
                    </span>
 
 <span class="text-success">
    <?php 
    if(isset($successupdate))
    {
        echo $successupdate ;
    }
    ?>
 </span>


 <button class="btn btn-success" type="submit" name="submit"> Edit SubCategory </button><br>

 </div>
 </form>
 </div>
</body>
</html>

<?php
}
?>

