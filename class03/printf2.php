<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $total = 1000;
    $tax = 0.5;
    printf("Total amount is: %.2f, <br>include tax is: %.2f,<br> And tax rate is: %.2f" , $total, $total + $total*$tax, $tax);
    
    
    ?>
</body>
</html>