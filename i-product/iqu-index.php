<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iqu-index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<div class="container">
    <div class="row" id="productContainer"></div>
</div>
<script>
    function show(d){
        let html = "";
        d.forEach(element => {
            html += `<div class="card col-md-3">
               <a href="product.php?id=${element.id}&name=${element.title}" style="text-decoration:none">
                <img src="${e.thumbnail}" class="card-img-top" alt="${element.title}">
                <div class="card-body">
                    <h5 class="card-title">${element.title}</h5>
                    <p class="card-text">${element.description}</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Price: ${element.price}</small>
                </div>
                </a>
            </div>`;
            
        });
        document.getElementById("productContainer").innerHTML=html;
    }
    function load(){
       fetch('https://dummyjson.com/products')
            .then(res => res.json())
            .then (d => {show(d.products)});
    }
    load();
</script>
</body>

</html>