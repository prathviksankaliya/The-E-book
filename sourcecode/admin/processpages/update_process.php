<?php


if(isset($_GET['cid']))
{

    extract($_POST);
    $cid = $_GET['cid'];
    $categoryerror = array();
    if (isset($_POST['submit'])) {
        if (empty($_POST['catname'])) {
            $categoryerror['error']['catname'] = "please enter category name";
        } else {
            $catname = $_POST['catname'];
    
            $showcat = "select * from add_category where cat_id = '$cid'";
           
            $q = mysqli_query($con, $showcat);
            if ($q) {
                while ($res = mysqli_fetch_assoc($q)) { 
              
                       $imgname = $res['cat_img']; 
                       $img_ex = substr($imgname, -4);
    
                       date_default_timezone_set("Asia/Calcutta");  
    
                       $time = date("Y-m-d H:i:s");
                       $img = $catname.$img_ex;
                }
            }
          
    
    
     $updatecat = "update add_category set cat_name='$catname',cat_time='$time',cat_img='$img' where cat_id='$cid'";
                       mysqli_query($con, $updatecat);
                       $successupdate = "Update Successfully ";
                           header('location:tables.php');
                           unset($catname);
                       
                           unset($successupdate);
            
        }
    }
}

elseif (isset($_GET['scid'])) {
    extract($_POST);
    $scid = $_GET['scid'];
    $subcategoryerror = array();
    if(isset($_POST['submit']))
    {
        if($_POST['selectsubcat'] == 'Choose...')
        {
            $subcategoryerror['error']['selectsubcat'] = "please Choose Category name";
        }
        else{
            $selectsubcat = $_POST['selectsubcat'];
        }

       if(empty($_POST['subcatname']))
       {
        $subcategoryerror['error']['subcatname'] = "please enter Sub Category name";
       }
       else{
           $subcatname = $_POST['subcatname'];

           $showsubcat = "select * from add_sub_category where sub_cat_id = '$scid'";
           
           $q = mysqli_query($con, $showsubcat);
           if ($q) {
               while ($res = mysqli_fetch_assoc($q)) { 
             
                      $imgname = $res['sub_cat_img']; 
                      $img_ex = substr($imgname, -4);
   
                      date_default_timezone_set("Asia/Calcutta");  
   
                      $time = date("Y-m-d H:i:s");
                      $img = $subcatname.$img_ex;
               }
           }
         
   
   
    $updatesubcat = "update add_sub_category set cat_name='$selectsubcat',sub_cat_name='$subcatname',sub_cat_time='$time',sub_cat_img='$img' where sub_cat_id='$scid'";
                      mysqli_query($con, $updatesubcat);
                      $successupdate = "Update Successfully ";
                          header('location:tables.php');
                          unset($subcatname);
                      
                          unset($successupdate);
              
                         } 
                    }
                    
                
           
       
    
}
