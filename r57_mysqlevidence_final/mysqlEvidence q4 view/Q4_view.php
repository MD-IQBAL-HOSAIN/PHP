<?php
    $db = new mysqli("localhost", "root", NULL, "evally");
    $create_view = "CREATE OR REPLACE VIEW products_view AS SELECT id, name, price,manufacturer_id FROM products WHERE price > 5000";
    if ($db->query($create_view)) {
        echo "<h2>View created successfully !!</h2>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <h1> products view</h1>

    <?php
    $query = "select * from products_view where 1";
    $result = $db->query($query);

    while ($row = $result->fetch_assoc()) {
        echo "ID: ".$row['id'] .", Name : ".$row['id'] .", Price : ".$row['price'] .", Manufacture : ".$row['manufacturer_id']. '<br>';
     }
    
    ?>
</body>
</html>