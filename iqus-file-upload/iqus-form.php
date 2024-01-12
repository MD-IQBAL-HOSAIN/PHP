<?php
$allowed_file = ["image/jpg","image/jpeg","image/png","image/gif","image/webp","image/pdf"];

if (isset($_POST['upload'])) {
   $file = $_FILES['iqusFile'];
   echo "<pre>";
   var_dump($file);
   echo "</pre>";
/* 
   if (in_array($file['type'],$allowed_file)) {
      move_uploaded_file($file['tmp_name'],"iqus_upload_File/".time()."_".rand(1,100000)."_".$file['name']);
   }
   else {
    echo "Only Image Files are Allowed";
   } */

   if (in_array($file['type'],$allowed_file)) {
    move_uploaded_file($file['tmp_name'],"iqus_upload_file/".time()."_".rand(1,100000)."_".$file['name']);
   }
   else {
    echo "<h1>Give only Image File.</h1>";
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iform</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <h1>File upload</h1>
    <input type="file" name="iqusFile" required> <br><br>
    <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>