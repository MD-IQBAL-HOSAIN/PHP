<?php
setcookie('name','Bijoy Chowdhury',time()+60*60*24);

if (isset($_COOKIE['name'])) {
    echo "The cookie is : ".$_COOKIE['name'];
}
else {
    echo "Cookie is not set";
}



?>