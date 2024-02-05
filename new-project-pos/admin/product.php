<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require __DIR__ . '/../vendor/autoload.php';

use App\auth\Admin;

if (!Admin::Check()) {
    header('HTTP/1.1 503 Service Unavailable');
    exit;
}
$db = new MysqliDb();
$cat_id = $_GET["cat_id"] ?? 1;
$db->where('category_id', $cat_id);
$products = $db->get('products');
?>
<div class="container">

    <table class="table table-striped table-hover">
        <tr>
            <th>Product Id</th>
            <th>Code</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        
        <?php
        foreach ($products as $products) {
            // echo $products['name'] . '<br>';
            echo "<tr><td>{$products['id']}</td>
            <td>{$products['barcode']}</td>
            <td>{$products['name']}</td>
            <td>{$products['purchase_price']}</td> </tr>";
        }
        ?>
   
</table>
</div>