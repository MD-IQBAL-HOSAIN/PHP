<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        User value: <input type="number" name="number" id="">
        <input type="submit" value="Check Factorial" id=""> <br>
    </form>
    <?php

    if (isset($_POST["number"])) {
        $unum = $_POST["number"];
        $fact = 1;
        for ($i = 1; $i <= $unum; $i++) {
            $fact = $fact * $i;
        }

        // echo "<strong>The factorial Number of: {$unum} <br> And the Factorial is : {$fact}</strong>";

        echo "<h1>The factorial Number of: {$unum}</h1>";
        echo "<h1>And the Factorial is : {$fact} </h1>";
    }

    ?>


</body>

</html>