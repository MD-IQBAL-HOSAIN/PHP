<?php
echo time(). "<br><hr>"; //give timestamp
echo gettimeofday()['sec']. "<br><hr>"; 

foreach (gettimeofday() as $key => $value) {
    echo "<strong>$key</strong> :  $value <br>";
} 