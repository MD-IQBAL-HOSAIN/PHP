<?php

require "connect.php";

$todonto = "select * from actor";
$show = $conct->query($todonto);
//echo $show;
/* echo "<pre>";
var_dump($show);
echo "</pre>";
echo "<hr>"; */

if ($show->num_rows) {
    while ($shows = $show->fetch_assoc()) {
        echo "id-".$shows['actor_id'] . "<br>";
        echo "First_Name:".$shows['first_name'] . "<br>";
        echo "Last_Name:".$shows['last_name'] . "<br><br>";
    }
}

?>

