<?php 
$colorsArray = ["red","green","blue","yellow","black","fuchsia","maroon","teal","bisque","sky-blue"];
$randMath = rand(0,count($colorsArray)-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: <?php echo $colorsArray[$randMath]?>;
    };
    </style>
</head>
<body>
    
</body>
</html>