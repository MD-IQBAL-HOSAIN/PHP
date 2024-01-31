<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
        }

        .navbar {
            background-color: #343a40;
        }

        .product {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">E-commerce Site</a>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <p>Price: $50</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <p>Price: $70</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
            <!-- Add more product divs as needed -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
