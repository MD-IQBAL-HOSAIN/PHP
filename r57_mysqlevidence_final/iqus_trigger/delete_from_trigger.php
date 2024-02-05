<?php
$delete_id = $_GET['del_id']?? null;

if ($delete_id) {
    $db = new mysqli("localhost","root",null,"evally");
    $query = "delete from manufacturer where id = '$delete_id'";
    $db->query($query);
    $db->close();
    $sms = "Manufacturer with id: $delete_id deleted successfully !!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trigger_delete</title>
</head>
<body>
    <h2>Manufacturer Table</h2>
    <h3></h3>
    <form action="#" method="get">
        <table>
            <tr>
                <td>Manufacturer</td>
                <td> :</td>
                <td> 
                    <?php
                    $db = new mysqli('localhost','root',null,'evally');
                    $query = 'select * from manufacturer where 1;';
                    $query_result = $db->query($query);
                    echo "<select name='del_id'>";

                    while ($row = $query_result->fetch_assoc()) {
                        echo "<option value = ".$row['id'].">".$row['name']. "</option>";
                    }
                    echo "</select>";
                    $query_result->free();
                    $db->close();

                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="delete" value="Delete !!" id="">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>