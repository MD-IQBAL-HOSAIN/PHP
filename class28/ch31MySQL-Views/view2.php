<?php
$conn = new mysqli("localhost", "root", "", "r57_php") or die("Error!!!");
$view = "create or replace view productGT400 as select * from products where price >= 400";
$conn->query($view);
#echo "View is Created <br>";
$sort = $_GET['sort'] ?? "id";
$selectQ = "select * from productGT400 order by {$sort}";
$records = $conn->query($selectQ);
/* if ($records->num_rows) {
    while ($row = $records->fetch_assoc()) {
        echo "Name: " . $row['name'] . ", Price: " . $row['price'] . "<br>";
    }
} */
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

        table,
        tr,
        td,
        th {
            border: 1px solid red;
            border-collapse: collapse;
            padding: 15px;
        }
        th{
            background-color: antiquewhite;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div>

        <?php
     /*    if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
        ?>
            <div>
                <strong>Success!</strong> <?= $message; ?>
                <button type="button"></button>
            </div>
        <?php
            unset($_SESSION['message']);
        } */
        ?>
<fieldset>
    <legend><strong>Product price query which price is >400.</strong></legend>
        <table>
            <h3>databases: r57_php (table: products)</h3>

            <hr>
            <strong><ul><li>syntax: create or replace view productGT400 as select * from products where price >= 400";</ul></li></strong>
         
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>                
            </tr>

            <?php
            if ($records->num_rows) {
            while ($row = $records->fetch_assoc()) {
                echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['price']}</td>                         
            </tr>";
            }
        }
            ?>
       
        </table>
        </fieldset>
    </div>
</body>

</html>