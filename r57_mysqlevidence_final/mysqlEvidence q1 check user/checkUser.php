<!DOCTYPE HTML>
<html>

<head>
    <title>login form</title>
    <style>
        div {         
            margin-bottom: 5px;
        }

        form,
        input {
            margin-left: 20%;
            border: 1px solid red;
            max-width: 500px;
            padding: 10px;
        }
    </style>
</head>

<body>

    <form action="#" method="post">
        <div>
            <h2>User login form</h2>
            <hr>
        </div>
        <div>
            User Name : <input type="text" name="username">
        </div>
        <div>
            Password : <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="submit" id="submit" value="Go !">
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['username'];
        $b = $_POST['password'];
        //echo $a;
        $obj = new mysqli("localhost", "root", "", "company");
        $my_query = "select * from user where username='$a' and password='$b'";
        $result = $obj->query($my_query);
        if ($result->num_rows > 0) {
            echo "<h3>you are register user</h3>";
        } else {
            echo "<h3>you are not register user</h3>";
        }
        $result->free();
        $obj->close();
    }
    ?>
</body>

</html>