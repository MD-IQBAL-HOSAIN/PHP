<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $fileCatch = file("file.txt");
    foreach ($fileCatch as $key) {
       $line = explode("|",$key);
       echo "<h1> User EMAIL : {$line[0]} </h1>";
       echo "<h1>  User Password :</h1> <h2> <i> {$line[1]} </i> </h2>";
    }
    
    ?>
</body>
</html>