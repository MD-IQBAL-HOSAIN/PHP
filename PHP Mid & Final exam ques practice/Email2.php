<?php
if (isset($_POST['submit'])) {
    $user = $_POST['uname'];
    $mail = $_POST['umail'];
    $nameLength = strlen($user);
    if ($nameLength < 4 || $nameLength > 8) {
        echo "<h3>Invalid user name. should be between 4 to 8 charecter </h3>";
    } else {
        echo "<h3> valid user name !! </h3>";
    }
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Valid Email </h3>";
    } else {
        echo "<h3> Invalid Email </h3>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email2</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        User name: <input type="text" name="uname" id="" required> <br><br>
        Give Email: <input type="email" name="umail" id="" required> <br><br>
        <input type="submit" name="submit" value="Check">
        <br> <br> <br>
    </form>

</body>

</html>