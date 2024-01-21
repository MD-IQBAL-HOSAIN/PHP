<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime no</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prime" id="">
        <input type="submit" value="CHECK PRIME" id="">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
      function isprime($nmbr){
        for ($i=2; $i <$nmbr; $i++) { 
          if($nmbr%$i===0){return false;}
        }
        return $nmbr >1;
      }

      $prm = $_POST['prime'];
      if (isprime($prm)) {
        echo ("<h1> {$prm} : is a prime number </h1>");
      }
      else {echo ("<h1> {$prm} : is not a prime number </h1>");}
    }
    ?>
</body>
</html>