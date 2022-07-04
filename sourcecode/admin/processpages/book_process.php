<?php
include("./include/config.php");
extract($_POST);
// print_r($_POST);
$bookerror = array();
if (isset($_POST['submit'])) {
    // validation For  Choose Category
    if ($_POST['selectsubcat'] == 'Choose...') {
        $bookerror['error']['selectsubcat'] = "please Choose Category name";
    } else {
        $selectsubcat = $_POST['selectsubcat'];
    }

    // validation For  Book Name

    if (empty($_POST['bookname'])) {
        $bookerror['error']['bookname'] = "please enter book name";
    } else {
        $bookname = $_POST['bookname'];
        $checkbook = "select * from add_book where book_name = '$bookname'";
        $q = mysqli_query($con, $checkbook);
        $bookcount = mysqli_num_rows($q);
        if ($bookcount > 0) {
            $bookerror['error']['bookname'] = "Already Book exists";
        }
    }

    // validation For  Book author Name

    if (empty($_POST['authorname'])) {
        $bookerror['error']['authorname'] = "please enter book author name";
    } else {
        $authorname = $_POST['authorname'];
    }

    // validation For Book Images

    if (isset($_FILES['image']['name'])) {

        $imgfile_name = $_FILES['image']['name'];
        $file_path = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_ex = strtolower(substr($imgfile_name, -4));
        if (empty($_FILES['image']['name'])) {
                $bookerror['error']['image'] = "please select Book Image";
            
        } else {
            if ($file_ex == '.jpg' || $file_ex == 'jpeg' || $file_ex == '.png') {
                if (empty($bookerror['error']['image'])) {
                    // $img_name = date("Y-m-d_H:i:s") .'_';
                    if( $file_ex == 'jpeg')
                    {
                        $img_name = $bookname . '.' . $file_ex;
                    }
                    else{
                        $img_name = $bookname . '' . $file_ex;
                    }
                    
                    // move_uploaded_file($file_path, 'upload/subcategory/'.$img_name);
                    move_uploaded_file($file_path, '../assets/uploadbook/bookimg/' . $img_name);
                    $successimg = "Sucessfully added image";
                    
                }
            } else {
                $bookerror['error']['image'] = "Please Select book formet of Jpg , Jpeg or png.";
            }
        }
    }
        // validation For Book Pdf
        
        if (isset($_FILES['pdf']['name'])) {
            $pdffile_name = $_FILES['pdf']['name'];
            $file_path = $_FILES['pdf']['tmp_name'];
            $file_type = $_FILES['pdf']['type'];
            $file_size = $_FILES['pdf']['size'];
            $file_ex = strtolower(substr($pdffile_name, -4));

            if (empty($_FILES['pdf']['name'])) {
                $bookerror['error']['pdf'] = "please Select Book Pdf";
            } else {
                if ($file_ex == '.pdf') {
                    if (empty($bookerror['error']['pdf'])) {
                        $pdf_name = $bookname . '' . $file_ex;
                        move_uploaded_file($file_path, '../assets/uploadbook/bookpdf/' . $pdf_name);
                        $successpdf = "Sucessfully added pdf";
                    }
                } else {
                    $bookerror['error']['pdf'] = "please Select Book formet of Pdf";
                }
            }
        }
        // if ($file_size > 1024 * 1024 * 5) {
        //     $error = "please select 5 mb pdf";
        // }

        

            if(strlen($_POST['desc']) < 100)
            {
                $bookdesc = $_POST['desc'];
            }else{

                $bookerror['error']['desc'] = "please Enter Less than 100 Charecter ";
            }
       
            if(empty($bookerror['error']))
            {
               
                $insertbook = "insert into add_book (sub_cat_name , book_name , book_author,  book_img , book_pdf , book_desc) values ('$selectsubcat' , '$bookname' ,'$authorname' ,'$img_name' , '$pdf_name' , '$bookdesc')";
                mysqli_query($con , $insertbook);
                unset($bookname);
                unset($authorname);
                $success = "Sucessfully added Book Show in web";
            }

  
}

?>
