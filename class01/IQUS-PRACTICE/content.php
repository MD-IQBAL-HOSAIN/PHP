<?php include "resource.php"?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle;?></title>
    <style>
h1{
    text-align: center;
    color: red;

}
    </style>
</head>
<body>
    <h1> <?php echo $heading ;?> </h1>  
    <hr>
    <h3> <?php echo $body_content;?> </h3>    
    <hr>
    <h3> <pre><?php echo $footer;?></pre> </h3>
</body>
</html>