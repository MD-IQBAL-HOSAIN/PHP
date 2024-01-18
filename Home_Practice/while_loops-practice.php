<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        Year:
        <select name="" id="">
            <?php
            //design specific
            $year = 2000;
            while ($year <= 2050) {

            ?>
                <option value="<?php echo $year; ?>"> <?php echo $year; ?> </option>

            <?php
                $year++;
            }
            ?>

        </select>

    </form>

    
    <form action="">
        Year:
        <select name="" id="">
            <?php
            //developer mode/specific
            $year = 1971;
            while ($year <= 2024) {    
               echo "<option value='$year'>$year</option>";       
            $year++;
             }
            
            ?>



        </select>
    </form>
</body>

</html>