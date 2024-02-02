<?php
if (isset($_POST['username'])) {
  require "conn.php";
  $user = $conn->escape_string($_POST['username']);
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
  if ($pass1 === $pass2) {
    $pass = password_hash($pass1, PASSWORD_DEFAULT);
    $insert_query = "INSERT INTO users values(null,'{$user}','{$pass}',CURRENT_TIMESTAMP)";
    $conn->query($insert_query);
    if ($conn->affected_rows) {
      $message = "User '{$user}' registered successfully. Id: {$conn->insert_id}";
    }
  }
}
/* $user = "newuser".time().rand(1,100);
$pass = password_hash("12345",PASSWORD_DEFAULT);
$insert_query = "INSERT INTO users values(null,'{$user}','{$pass}',CURRENT_TIMESTAMP)";
$conn->query($insert_query);
echo $conn->affected_rows;//will return total affected rows//works with insert,update and delete. NOT with select statement
echo "<br>current user ({$user}) id:" . $conn->insert_id; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
  <?php
  require "register.php"

  ?>
</body>

</html>