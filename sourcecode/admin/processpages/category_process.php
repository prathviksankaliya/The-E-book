<?php 
    include("./include/config.php");
    extract($_POST);
   
    $categoryerror = array();
    if(isset($_POST['submit']))
    {
       if(empty($_POST['catname']))
       {
        $categoryerror['error']['catname'] = "please enter category name";
       }
       else{
           $catname = $_POST['catname'];
           $checkcategory = "select * from add_category where cat_name = '$catname'";
           $q = mysqli_query($con , $checkcategory);
           $catcount = mysqli_num_rows($q);
           if($catcount > 0 )
           {
                $categoryerror['error']['catname'] ="Already category exists";
           }
           else{
               if(isset($_FILES['image']['name']))
               {
                $file_name = $_FILES['image']['name'];
                $file_path = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $file_size = $_FILES['image']['size'];
                $file_ex = strtoupper(substr($file_name, -4));
                if(empty($_FILES['image']['name']))
                {
                    $categoryerror['error']['image']= "please select Icon";
                }
                else{
                    if ($file_ex == '.JPG' || $file_ex == 'JPEG' || $file_ex == '.PNG') {
                        if (empty($categoryerror['error']['image'])) {
                            // $img_name = date("Y-m-d_H:i:s") .'_';
                            if($file_ex == 'JPEG')
                            {
                                $img_name = $catname.'.'.$file_ex;
                            }else{
                                $img_name = $catname.$file_ex;
                            }
                            
                            move_uploaded_file($file_path, '../assets/images/category/'.$img_name);
                            $insertcat = "insert into add_category (cat_name , cat_img) values ('$catname' , '$img_name')";
                            mysqli_query($con , $insertcat);
                            unset($catname);
                            $successimg = "Sucessfully added Icon";
                        
                         } 
                    }
                    else{
                        $categoryerror['error']['image'] = "Please Select formet of Jpg , Jpeg or png.";
                    }
                    // if ($file_size > 1024 * 1024 * 5) {
                    //     $error = "please select 5 mb pdf";
                    // }
                    
                }
               }
               
           }
       }
    }
?>