<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check prime</title>
</head>

<body>
    <form action="" method="post">
        Give Number: <input type="text" name="userData" id="" required> <br> <br>
        <input type="submit" name="submit" value="Check_prime">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function isprime($num)
        {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i === 0) {
                    return false;
                }
            }
            return $num > 1;
        }

        $prime = $_POST['userData'];
        if (isprime($prime)) {
            echo "<h3> $prime : is a prime number.<h3>";
        } else {
            echo "<h3> $prime : is Not a prime number.<h3>";
        }
    }

    ?>
</body>

</html>