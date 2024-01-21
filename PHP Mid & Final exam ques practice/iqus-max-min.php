<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">First Number</label> <br>
        <input type="number" name="fnumber" id=""> <br> <br>

        <label for="">Second Number</label> <br>
        <input type="number" name="snumber" id=""> <br><br>

        <label for="">Third Number</label> <br>
        <input type="number" name="tnumber" id=""> <br><br>

        <input type="submit" name="mitsub" value="Check" id="">
    </form>

    <?php
    if(isset($_POST['mitsub'])){
        $fn = $_POST['fnumber'];
        $sn = $_POST['snumber'];
        $tn = $_POST['tnumber'];

        if($fn >= $sn && $fn >= $tn){ $max = $fn;}
        else if($sn >= $fn && $sn >= $tn){ $max = $sn;}
        else{ $max = $tn;}

        if($fn <= $sn && $fn <= $tn){ $min = $fn;}
        else if($sn <= $fn && $sn <= $tn){ $min = $sn;}
        else{ $min = $tn;}

        echo "<h1>Maximum Value = {$max} <br> </h1>";
        echo "<h1>Minimum Value = {$min} <br> </h1>";


    }
    
    
    ?>
</body>
</html>