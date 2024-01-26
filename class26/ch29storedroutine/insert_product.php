<?php
require "db.php";
$pid = $_POST['id']??"test_id";
$pname = $_POST['product_name']??"test_pname";
$pprice = $_POST['price']??"0.00";
$query = "call More_products('{$pid}','{$pname}','{$pprice}')";
$conn->query($query);
// echo $conn->insert_id . "<br>";
// echo $conn->affected_rows;