<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>World table</h1>
   <table border="1" width="100%">
    <tr>
    
        <th>country name</th>
        <th>country code</th>
        <th>Continent</th>
        
    </tr>
   

<?php
$lines = file("countries.csv");
// echo "<pre>";
// var_dump($lines);
//  echo "</pre>";
foreach ($lines as $key => $value) {
    $cInfo = explode(",",$value);
echo <<<INFO
<tr>
        <th>$cInfo[0]</th>
        <th>$cInfo[6]</th>
        <th>$cInfo[8]</th>
        
    </tr>


INFO;
}

?>
</table>

<hr>
<h1>World table</h1>

<table border="1" width="100%">
    
    <tr>
        <th></th>
       
        
    </tr>
   

<?php
$lines = file("countries.csv");
// echo "<pre>";
// var_dump($lines);
//  echo "</pre>";
foreach ($lines as $key => $value) {
    list($country,$shortName,$ccode,$h,$g,$nf,$ff,$vv,$aa,$dd,$xx) = explode(",",$value);
echo <<<INFO
<tr>
        <th>$country</th>
        <th>$shortName</th>
        <th>$ccode</th>
        <th>$h</th>
        <th>$g</th>
        <th>$nf</th>
        <th>$ff</th>
        <th>$vv</th>
        <th>$aa</th>
        <th>$dd</th>
        <th>$xx</th>
       
    </tr>


INFO;
}

?>
</table>
</body>
</html>