<?php
echo date("Y-m-d H:i:s a",getlastmod());
echo "<br>";
echo date("Y-m-d H:i:s a",filemtime(basename(__FILE__)));
// echo filemtime("getdate.php");
echo "<br>";
echo __FILE__;
echo "<br> <hr>";

echo __CLASS__;
echo "<br><hr>";

echo __DIR__;
echo "<br><hr>";

echo basename(__FILE__);
echo "<br><hr>";

echo dirname(__FILE__);
echo "<br><hr>";
echo date("t");
