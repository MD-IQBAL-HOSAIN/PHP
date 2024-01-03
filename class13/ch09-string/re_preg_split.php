<?php
 $delimitedText = "Jason+++Gilmore+++++++++++Columbus+++Ohio";
 $fields = preg_split("/\++/", $delimitedText);
 foreach($fields as $field) 
   echo $field."<br />";
?>