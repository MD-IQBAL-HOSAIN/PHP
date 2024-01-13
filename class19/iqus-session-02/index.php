<?php
session_start();
//$_SERVER['PHP_AUTH_USER'];
//$_SERVER['PHP_AUTH_PW'];
exit;

if (is_null ($_SERVER['PHP_AUTH_USER']) && is_null($_SERVER['PHP_AUTH_USER'])) {
   header("HTTP/1.1 401 Unauthorized");   
}

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}
else {
    $uname = $_SERVER['PHP_AUTH_USER'];
    $upass = $_SERVER['PHP_AUTH_USER'];
    if ($uname =="bijoy" && $upass == "9900") {
       $_SESSION['user'] = "Administrator";
       $_SESSION['loggedin'] = true;
       header("location: dashboard.php");
    }
    else {
        header("HTTP/1.1 401 Unauthorized");
    }
}

?>
<h1>welcome to visit our page.</h1>