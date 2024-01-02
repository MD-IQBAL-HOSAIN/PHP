<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sort</title>
</head>

<body>
<?php
$arr = array(
	"india"=>"delli",
	"bangladesh"=>"dhaka",
	"usa"=>"washington",
	"nepal"=>"kathmundu");
ksort($arr);
foreach($arr as $k=>$v){
	echo $k. ":".$v."<br>";
	}
?>
<hr>
<?php
$marray = array (
	"Nepal"=>"kathmundu",
	"India"=>"delhi",
	"Bangladesh"=>"dhaka",
	"Australia"=>"melbourn",
);
ksort($marray);
foreach ($marray as $key => $value) {
	//echo $key. " : ".$value."<br>";
	echo <<<PRINT
	<li>$key : $value</li>

	PRINT;
}

?>
</body>
</html>