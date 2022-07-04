<?php 
include ("./include/config.php");
$cid = $_GET['cid'];
$scid = $_GET['scid'];
$ruid = $_GET['ruid'];
$raid = $_GET['raid'];



$dlt = "delete from add_category where cat_id='$cid' ";
mysqli_query($con , $dlt);

$dltsc = "delete from add_sub_category where sub_cat_id='$scid' ";
mysqli_query($con , $dltsc);


$dltru = "delete from user_register where reg_id='$ruid' ";
mysqli_query($con , $dltru);


$dltra = "delete from admin_register where a_reg_id='$raid' ";
mysqli_query($con , $dltra);

header("location: tables.php");

?>
