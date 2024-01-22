<?php
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $nameLength = strlen($user);
    if ($nameLength < 4 || $nameLength > 8) {
        echo "<h3> invalid user name. Name should be between 4 to 8 charecter.</h3>";
    } else {
        echo "<h3>valid User !! </h3>";
    }
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Valid Email !!<h3>";
    } else {
        echo "<h3>Invalid Email (give: @ and/or dot).<h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email validation</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        User Name: <input type="text" name="user" id="" required> <br> <br>
        User Email:<input type="email" name="mail" id="" required> <br> <br>
        <input type="submit" name="submit" value="Check_validation">
    </form>
</body>

</html>