<?php 
    include("./include/config.php");
    extract($_POST);
   
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
           $checksubcat = "select * from add_sub_category where cat_name = '$subcatname'";
           $q = mysqli_query($con , $checksubcat);
           $subcatcount = mysqli_num_rows($q);
           if($subcatcount > 0 )
           {
                $subcategoryerror['error']['subcatname'] ="Already Sub Category  exists";
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
                    $subcategoryerror['error']['image']= "please select Icon";
                }
                else{
                    if ($file_ex == '.JPG' || $file_ex == 'JPEG' || $file_ex == '.PNG') {
                        if (empty($subcategoryerror['error']['image'])) {
                            // $img_name = date("Y-m-d_H:i:s") .'_';
                            if($file_ex == 'JPEG')
                            {
                                $img_name = $subcatname.'.'.$file_ex;
                            }else{
                                $img_name = $subcatname.$file_ex;
                            }
                            
                            // move_uploaded_file($file_path, 'upload/subcategory/'.$img_name);
                            move_uploaded_file($file_path, '../assets/images/subcategory/'.$img_name);
                            $insertsubcat = "insert into add_sub_category (cat_name , sub_cat_name , sub_cat_img) values ('$selectsubcat' , '$subcatname' , '$img_name')";
                            mysqli_query($con , $insertsubcat);
                            unset($subcatname);
                            $successimg = "Sucessfully added Icon";
                         
                         } 
                    }
                    else{
                        $subcategoryerror['error']['image'] = "Please Select formet of Jpg , Jpeg or png.";
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