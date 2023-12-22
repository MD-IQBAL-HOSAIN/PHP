<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iqu</title>
</head>
<body>
    <?php
    for ($i=1; $i <=50 ; $i++) { 
       echo "<a href='getting-method-product.php?product={$i}'>product{$i}</a> | \n";
    }
    
    ?>    
</body>
</html>