<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$makeupboxArray = ["red", "lightgreen","#607d3d","green","lime","#74d72e", "blue", "pink", "yellow","purple", "fuchsia", "#99edc3", "teal", "bisque", "aqua", "olive", "orange", "maroon","black","#ff00ff"];

echo "<label for='color'>slect the color:</label>\n";
echo "<select name='color' id='color'>\n";
foreach ($makeupboxArray as $key => $value) {
  echo "<option value='{$key}'>{$value}</option>\n";
}

echo "</select>";
?>
<hr>
<form action="">
    <h1>Please select the color:</h1>
    
    <?php 
    foreach ($makeupboxArray as $key => $value) {
        echo "<label for='c{$key}'>$value</label>";
        echo "<input type='checkbox' id='c{$key}' name='check' value='$key'>\n";
      };
    ?>
</form>

</body>
</html>
