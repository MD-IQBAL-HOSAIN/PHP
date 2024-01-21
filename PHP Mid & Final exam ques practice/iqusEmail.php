<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>

<body>
    <form action="" method="post">
        USER NAME: <input type="text" name="uname"> <br>
        EMAIL : <input type="email" name="uemail"><br>
        <input type="submit" name="sub" value="Check">
    </form>

    <?php
    if (isset($_POST['sub'])) {
        $name = $_POST['uname'];
        $email = $_POST['uemail'];
        $namelength = strlen($name); //for validation if syntax.

        if ($namelength < 4 || $namelength > 8) {
            echo "<h1>Invalid user name. should be minimum 4 to 8 charecter</h1>";
        } else echo "<h1>Valid user name</h1>";


        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "valid email";
        } else {
            echo "invalid email";
        }
    }

    ?>



</body>

</html>