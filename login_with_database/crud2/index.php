<?php
if (isset($_POST['user'])) {
    require "connection.php";
    $user = $con->escape_string($_POST['user']);
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 === $pass2) {
         $pass = password_hash($pass1,PASSWORD_DEFAULT);
         $insert_query = "INSERT INTO users values(null,'{$user}','{$pass}',CURRENT_TIMESTAMP)";

         $con->query($insert_query);
         if ($con->affected_rows) {
            $message = "User '{$user}' registered successfully. ID: '{$con->insert_id}'";
         }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <?php 
    if (isset($message)) {
       echo "Successfully registered !!";
    }  
    ?>
    <form action="" method="post">
        <h1>Sign Up</h1>
        <input type="text" name="user" placeholder="User Name"> <br>
        <input type="password" name="pass1" placeholder="Password"> <br>
        <input type="password" name="pass2" placeholder="Re-type Password"> <br>
        <input type="submit" name="submit" value="Register" id=""> <br>

    </form>
</body>
</html>