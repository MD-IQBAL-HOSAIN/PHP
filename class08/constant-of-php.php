<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //define("TAX",0.05);

    class rajosso{
        const TAX = 0.05;

        static function taka(){
            return "VAT din desh bachan";
        }
    }

    echo rajosso::TAX ."<br>";
    echo rajosso::taka();
    
    ?>
</body>
</html>