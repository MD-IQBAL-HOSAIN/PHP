<?php
require "database.php";
$id = $_POST['id']??"by default testing id";
$name = $_POST['name']??"by default testing name";
$password = $_POST['password']??"by default testing password";

$query = "call public_info ('{$id},{$name},{$password}')";
$connect->query($query);

?>