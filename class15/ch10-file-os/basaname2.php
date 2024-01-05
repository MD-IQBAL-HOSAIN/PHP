<?php

$url = "https://freetestdata.com/wp-content/uploads/2023/04/1.05KB_JSON-File_FreeTestData.json";

echo basename($url)."<br>";
echo dirname($url)."<br>";

$pinfo = pathinfo($url);

echo "<pre>";
var_dump($pinfo);
echo "</pre>";


$filename = "D:\xampp\htdocs\PHP_Practice_CLASSES\class15\ch10-file-os";
echo realpath($filename);

?>