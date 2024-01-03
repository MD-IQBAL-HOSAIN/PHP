<?php
 $pswd = "secretpswd";
 if (strlen($pswd) < 10)
 echo "Password is too short!";
 else
 echo "Password is valid!";
?>
<br>
<hr>

<?php
 $password = "3312345";
 if (strspn($password, "1234567890") == strlen($password))
 echo "The password cannot consist solely of numbers!";
?>