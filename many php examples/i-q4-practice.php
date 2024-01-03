<?php
if(isset($_POST["grade"])){
    $marks = strtoupper($_POST["user"]);
    //$message ="";
    if ($marks >100) { $message = "Invalid marks";} 
      else if ($marks >=90){ $message = "A+ (Excellent)";}
      else if ($marks >=80){ $message = "A (Marvelous)";}
      else if ($marks >=70){ $message = "A- (Good)";}
      else if ($marks >=60){ $message = "B (Average)";}
      else{$message = "Fail (Better luck next time.)";}
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="">
        User Grade point: <input type="text" name="user" id="" placeholder="Input Numeric value"> <br>
       <input type="submit" name="grade" value="Grade Check" id="">
    </form>

    <h1> <?php if (isset($message)) echo $message;?> </h1>

</body>
</html>