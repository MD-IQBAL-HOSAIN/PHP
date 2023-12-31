<?php 
$productID = $_GET['product'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 id="productTitle"></h2>
    <img src="" id="proThumbnail" alt="">
    <script>
        function show(data) {
 document.getElementById("productTitle").innerHTML = data.title;
 document.getElementById("proThumbnail").src = data.thumbnail;

        }
        let url = "https://dummyjson.com/products/<?= $productID ?> \n";
       
        fetch(url)
        .then(res => res.json())
        .then(data =>{
            console.log(data);
            show(data)
        });
    </script>
</body>
</html>