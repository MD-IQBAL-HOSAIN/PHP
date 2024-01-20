<?php
require "connect.php";
$td = "select * from film";
$dekhaw = $conct->query($td);
if ($dekhaw->num_rows) {
    while ($output = $dekhaw->fetch_assoc()) {
        echo $output['film_id'] . "<br>";
        echo $output['title'] . "<br>";
        echo $output['description'] . "<br>";
        echo $output['release_year'] . "<br><br>";
    }
}


?>