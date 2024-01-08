<?php
$link = [
    'manobzamin'=>"http://mzamin.com",
    'prothomAlo'=>"https://www.prothomalo.com/",
];

if (!is_dir("Bijoy")) mkdir("Bijoy");

foreach ($link as $key => $value) {  
   $fm = fopen("Bijoy/".$key.date("y-d-m-h").".html","w");

   fwrite($fm,file_get_contents($value));
   fclose($fm);
}



?>