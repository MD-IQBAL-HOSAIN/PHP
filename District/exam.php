<?php
echo 'date("l") : '.date("l");
echo "<br>";
echo 'date("jS") : '.date("jS");
echo "<br>";
echo 'date("F Y") : '.date("F Y");
echo "<br>";
echo 'date("H: i:s a") : '.date("H: i:s a");
echo "<br>";
echo 'date("m-d-Y") : '.date("m-d-Y");
echo "<br>";
echo '"The time is" date("h:i:s") : '."The time is ". date("h:i:s");
echo "<br>";
echo 'time() : '.time();
echo "<br>";
echo 'date("D") : '.date("D");
echo "<br>";
echo 'date("M") : '.date("M");
echo "<br>";
echo 'date("U") : '.date("U");
echo "<br>";
// echo 'strtotime(time,now) : '.strtotime("03-11-2014 Monday 04:32:00 PM");
echo "<br>";
// $futuredate = strtotime("+2 days");
$futuredate = strtotime("03-11-2014 Monday 04:32:00 PM");
echo 'date("d, Y",$futuredate) : '.date($futuredate);
echo "<br>";
?>