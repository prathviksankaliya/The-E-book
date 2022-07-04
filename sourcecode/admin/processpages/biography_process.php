<?php
include("./include/config.php");
extract($_POST);
// print_r($_POST);
$bookerror = array();
if (isset($_POST['submit'])) {

    // validation For  Book Name

    if (empty($_POST['bookname'])) {
        $bookerror['error']['bookname'] = "please enter book name";
    } else {
        $bioname = $_POST['bookname'];
        $checkbio = "select * from home_biography where bio_name = '$bioname'";
        $q = mysqli_query($con, $checkbio);
        $biocount = mysqli_num_rows($q);
        if ($biocount > 0) {
            $bookerror['error']['bookname'] = "Already Biography Book exists";
        }
    }

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
                $bookerror['error']['image'] = "please select Biography Book Image";
            
        } else {
            if ($file_ex == '.jpg' || $file_ex == 'jpeg' || $file_ex == '.png') {
                if (empty($bookerror['error']['image'])) {
                    // $img_name = date("Y-m-d_H:i:s") .'_';
                    if( $file_ex == 'jpeg')
                    {
                        $img_name = $bioname . '.' . $file_ex;
                    }
                    else{
                        $img_name = $bioname . '' . $file_ex;
                    }
                    
                    // move_uploaded_file($file_path, 'upload/subcategory/'.$img_name);
                    move_uploaded_file($file_path, '../assets/uploadbook/biographyimg/' . $img_name);
                    $successimg = "Sucessfully added image";
                    
                }
            } else {
                $bookerror['error']['image'] = "Please Select Image formet of Jpg , Jpeg or png.";
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
                $bookerror['error']['pdf'] = "please Select Biography Book Pdf";
            } else {
                if ($file_ex == '.pdf') {
                    if (empty($bookerror['error']['pdf'])) {
                        $pdf_name = $bioname . '' . $file_ex;
                        move_uploaded_file($file_path, '../assets/uploadbook/biographypdf/' . $pdf_name);
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

        if(empty($_POST['desc']))
        {
            $bookerror['error']['desc'] = "please enter Biography discription";
        }
        else{

            if(strlen($_POST['desc']) < 100)
            {
                $biodesc = $_POST['desc'];
            }else{

                $bookerror['error']['desc'] = "please Enter Less than 100 Charecter ";
            }
        }
            if(empty($bookerror['error']))
            {
                // echo $bioname.' '. $img_name .' '. $pdf_name.' '. $bookdesc.' ' ;
                $insertbiography = "insert into home_biography ( bio_name ,bio_author, bio_img , bio_pdf , bio_desc) values ('$bioname' ,'$authorname', '$img_name' , '$pdf_name' , '$biodesc')";
                mysqli_query($con , $insertbiography);
                unset($bioname);
                $success = "Sucessfully added Biography";
            }

  
}

?>
