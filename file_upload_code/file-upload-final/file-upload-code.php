<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file_upload</title>
</head>

<body> 

    <?php
    $allowedPicture = ['image/jpg', 'image/jpeg', 'image/png', 'image/webp', 'image/pdf', 'image/gif'];

    if (isset($_POST['Upload'])) {
        $file = $_FILES['inputFile'];
       
        $size = $file['size'];


        echo "<pre>";
        var_dump($file);
        echo "</pre>";

        if (in_array($file['type'], $allowedPicture)&& $size <= 400*1024) {
           move_uploaded_file($file['tmp_name'],"iqus_image/".time()."_".rand(1,100000)."_". $file['name']);
           $message = "Successfully done!!";
        }
        else {
            $message = "Check image <b> type </b> and <b> size </b>";
        }
    }


    ?>

<h1>File upload: <?php echo isset($message)?$message:"";?></h1>

<form action="" method="post" enctype="multipart/form-data">
    <strong>Select File:</strong>
    <input type="file" name="inputFile" required> <br>
    <label style="margin-left: 80px;" for=""></label>
    <input type="submit" name="Upload" value="Upload" id=""><br>
</form>
</body>

</html>