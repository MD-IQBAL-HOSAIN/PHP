<h1>Printf() function</h1>

<?php
echo "hello";

$name = "bijoy chowdhury";
$school_name = "from 'GNSL' instiitute";
echo "<br>";
echo "Hello ".ucwords($name)."<br>";
printf("Hi %s",$name)."<br>";
echo "<br>";

printf("Hi name: %s My school_name: %s ",$name, $school_name)."<br>";
echo "<br>";

$html ="<div>
<h1>%s</h1>
<h1>%s</h1>
</div>";

printf($html, ucwords($name),ucwords($school_name));








;?>
