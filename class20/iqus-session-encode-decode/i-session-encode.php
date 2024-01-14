<?php

session_start();

$name = $_GET['name']??"Give your Name";
$batch = $_GET['batch']??"Give your batch";

$_SESSION['name'] = $name;
$_SESSION['batch'] = $batch;
$_SESSION['time'] = time();

$data = session_encode();
$fhandler = fopen("data","w");
fwrite($fhandler,$data);
fclose($fhandler); 

?>