<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h2>array splice and slice.</h2> 
   <h2>Main array.</h2> 
<?php

$desh = array("Bangladesh","Afganistan","Qatar","Portugal","Germany","Russia","Colombia","Canada","West-indies");

print_r( $desh);
echo "<br>";
echo "<br>";
echo "<h3>array splice.</h3>";
$desh_Splicc = array_splice($desh,3,-1);
print_r($desh_Splicc);
echo "<br>";
echo "<h3>array splice then main array condition.</h3>";
print_r($desh);


echo "<br>";
echo "<br>";
echo "<h3>array slice.</h3>";
$desh_slice = array_slice($desh,1,-1);
print_r($desh_slice);//splice korar por $desh a ace 4 ta array property. then slice a ase 4ta thekei komabe/barabe.
echo "<br>";
echo "<br>";
echo "<h3>array slice then main array condition.</h3>";
print_r($desh);

?>
<hr>
<br>
<br>
<h3>array_merge_recursive</h3>
<?php
$class1 = array("Zara"=>80,"Alexa"=>70,"Tom Cruise"=>60);
$class2 = array("Allen"=>80,"Alexa"=>90,"Tom Cruise"=>85);
$class_score = array_merge_recursive($class1,$class2);
print_r($class_score);

?>
<hr>
<br>
<h3>array_combine() function</h3>
<?php
$keyy = array("BD","AF","PK","IN","ZM");
$c_full_name = array("Bangladesh","Afganistan","Pakistan","India","Zimbabwe");
$country_map = array_combine($keyy,$c_full_name);
print_r($country_map);

?>
<hr>
<br>
<h3> array_intersect()</h3>
<?php
$array1 = array("OH", "CA", "NY", "HI", "CT");
$array2 = array("OH", "CA", "HI", "NY", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI");
$intersection = array_intersect($array1, $array2, $array3);
print_r($intersection);

?>
<br>
<br>
<br>
<br>


</body>
</html>