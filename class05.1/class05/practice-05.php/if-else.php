<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if-else.php">
        <input type="text" name="markssss" id=""> <br>
        <input type="submit" value="click" >
    </form>
</body>
<?php
$markssss= $_GET['markssss']??null;
if ($markssss) {
    if ($markssss>100) {echo "Invalid number";}      
    elseif($markssss>=90){echo "A+";}  
    elseif($markssss>=80){echo "A";}  
    elseif($markssss>=70){echo "A-";}  
    elseif($markssss>=60){echo "B";}
    else{echo "Fail";}     
    
};



?>
</html>