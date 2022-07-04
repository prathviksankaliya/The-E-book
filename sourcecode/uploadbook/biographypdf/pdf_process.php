
<?php
    
$file = $_GET["file"];
//   echo $file;
header("Content-Disposition: attachment; filename=" . urlencode($file));   

  
$fp = fopen($file, "r");
while (!feof($fp)) {
    echo fread($fp, 8192);
    flush(); // This is essential for large downloads
} 
  
fclose($fp); 
?>
