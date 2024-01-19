<?php
for ($count=1; $count <=10 ; $count++) { 
 echo "User: $count <br>";
}
echo "<hr>";
for ($count=1; $count <=10 ; $count+=2) { 
 echo "Hello BD: $count <br>";
}

echo "<hr>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
        for ($user=1; $user <=10 ; $user++) { 
           echo " <li>user - $user <br> </li>";
        }
        ?>
       
    </ul>
</body>
</html>