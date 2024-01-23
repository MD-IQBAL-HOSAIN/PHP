<?php
session_start();
require "connection.php";
// Create the query
$query = 'SELECT id, product_name, validity FROM products';
// Send the query to MySQL
$result = $con->query($query);
$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            margin: 100px auto;
            background-color: lightblue;
        }

        table,tr,td,th {
            border: 1px solid #ddd;
            border-collapse: collapse;
            padding: 15px;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div>

        <?php
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
        ?>
            <div>
                <strong>Success!</strong> <?= $message; ?>
                <button type="button"></button>
            </div>
        <?php
            unset($_SESSION['message']);
        }
        ?>

        <table>
            <h3>Daraz_company_ltd</h3>
            <hr>
            <tr>
                <th>ID</th>
                <th>product_name</th>
                <th>validity</th>
            </tr>

            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['product_name']}</td>
             <td>{$row['validity']}</td>            
            </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>