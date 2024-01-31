<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        .product {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            text-align: center;
        }

        #cart {
            margin-top: 20px;
        }

        #cart ul {
            list-style-type: none;
            padding: 0;
        }

        #cart li {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <!-- nav stat -->
    <nav class="navbar bg-body-tertiary fixed-top navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="shark_logo-removebg-preview.png" style="width: 100px; height: 60px;"
                        alt="logo"></a>
            <a class="navbar-brand" href="#">FIST Ecommerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Log in</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- Nav End -->
    <!-- add to cart  -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <p>Price: $50</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 1', 50)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                <a href="#"><img src="download (1).jpeg" alt=""></a>
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <p>Price: $70</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 2', 70)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <a href="#"><img src="1.jpg" alt=""></a>
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <p>Price: $50</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 1', 50)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                <a href="#"><img src="download (1).jpeg" alt=""></a>
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <p>Price: $70</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 2', 70)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <p>Price: $50</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 1', 50)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                <a href="#"><img src="1.jpg" alt=""></a>
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <p>Price: $70</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 2', 70)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <p>Price: $50</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 1', 50)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <p>Price: $70</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 2', 70)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <p>Price: $50</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 1', 50)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <p>Price: $70</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 2', 70)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                    <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <p>Price: $50</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 1', 50)">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product">
                <a href="#"><img src="download.jpeg" alt=""></a>
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <p>Price: $70</p>
                    <button class="btn btn-primary" onclick="addToCart('Product 2', 70)">Add to Cart</button>
                </div>
            </div>
            <!-- Add more product divs as needed -->
        </div>

        <div id="cart">
            <h2>Shopping Cart</h2>
            <ul id="cart-items"></ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function addToCart(productName, price) {
            // Create a new list item
            var newItem = document.createElement("li");

            // Set the item's content
            newItem.innerHTML = productName + " - $" + price;

            // Add the item to the cart
            document.getElementById("cart-items").appendChild(newItem);
        }
    </script>
</body>

</html>