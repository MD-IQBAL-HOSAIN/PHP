<?php
session_start();
$catchData = $_GET['data']??"Did't get data!!!";
$_SESSION['iqu'] = $catchData;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i session 01</title>
</head>

<body>
<?php /* $catchData */ 
  //for testing its value catch or not.
?>
    <br>
    <?php /* $_SESSION['iqu'] */ 
    //for testing its value get or not.
    
    ?> 
</body>
</html>