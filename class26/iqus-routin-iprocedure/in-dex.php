<?php
require "database.php";
$pid = $_POST['id']??"by default testing id";
$pname = $_POST['name']??"by default testing name";
$ppassword = $_POST['password']??"by default testing password";
$create_at = $_POST['create_at']??"by default testing password";
$connect->autocommit(false);//on thakle = in-dex.php= k refresh dile auto commit kore data by default ta niye ney.

$query = "call public_info ('{$pid}','{$pname}','{$ppassword}')";
$connect->query($query);
//  echo $connect->insert_id . "<br>";
//  echo $connect->affected_rows;

?>