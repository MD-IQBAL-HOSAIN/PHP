<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max_min</title>
</head>
<body>
<form action="" method="post">
        <label for="">First Number</label> <br>
        <input type="number" name="first" id=""> <br> <br>

        <label for="">Second Number</label> <br>
        <input type="number" name="second" id=""> <br><br>

        <label for="">Third Number</label> <br>
        <input type="number" name="third" id=""> <br><br>

        <input type="submit" name="submit" value="Check" id="">
    </form>
    <?php
    
    if (isset($_POST['submit'])) {
         $first = $_POST['first'];
         $second = $_POST['second'];
         $third = $_POST['third'];


         if ($first >= $second && $first >=$third) {$max = $first;}
         else if ($second >= $first && $second >=$third) {$max = $second;}
         else {$max = $third;}

         if ($first <= $second && $first <=$third) {$min = $first;}
         else if ($second <= $first && $second <=$third) {$min = $second;}
         else {$min = $third;}

         echo "<h1> Maximum value: $max <h1>";
         echo "<h1> Minimum value: $min <h1>";


    }
    
    ?>
</body>
</html>