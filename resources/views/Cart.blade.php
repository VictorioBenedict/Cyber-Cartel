<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px;
            width: 100%;
        }

        .slider-frame {
            overflow: hidden;
            max-width: 100%;
            margin-top: 20px;
        }

        .img-container {
            width: 100%; /* Adjust the width as needed */
            box-sizing: border-box;
            text-align: center;
        }

        .img-container img {
            max-width: 100%; /* Make images responsive */
            height: auto;   /* Allow the height to adjust proportionally */
            border: 1px solid #ddd;
        }

        .card:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); /* Adjust the color and intensity as needed */
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            border: 1px solid black;
        }

        td {
            padding: 15px;
        }

        .product {
            display: flex;
            align-items: center;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .img {
            max-width: 50px; /* Set the maximum width as needed */
            margin-right: 10px; /* Adjust margin as needed */
        }

        h6 {
            margin: 0; /* Remove default margin to avoid extra space */
        }

        .unit, .quantity, .total, .action, .products, .units, .quantitys, .totals, .actions {
            text-align: center;
        }

        .item_1_details {
            width: 45vw;
        }

        .products {
            text-align: left;
            width: 45%;
        }

        @media only screen and (max-width: 600px) {
            .product, .unit, .quantity, .total, .action, .products, .units, .quantitys, .totals, .actions {
                font-size: 0.8rem;
            }
        }
        .checkout_Content{
            border-top: 1px solid
        }
        .checkout {
            position: sticky;
            bottom: 0;
            left: 0;
            width: 80%;
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .checkout_Content {
            text-align: left;
        }
        .total_Price{
            text-align: left;
        }
        .total_Items{
            text-align: right;
            width: 10%;
        }

        .checkout_Content button {
            float: right;
        }
        .selectAll{
            width: 10%;
        }
        .deleteAll{
            width: 60%;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard"><img src="images/logo.png" style="width: 200px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-right: 5vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <a class="dropdown-item" href="#">My account</a>
                                <a class="dropdown-item" href="#">My Purchase</a>
                                <a class="dropdown-item" href="login">Log out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header style="margin-top: 65px">
        <div class="container" id="contents">
            <h1><i>Cyber Cartel | Shopping Cart</i></h1>
        </div>
    </header>
    <br>
    <hr style="margin: 0 auto; width: 80vw;">
    <br>

    <!-- Table Section -->
    <table>
        <tr style="border-bottom: 1px solid">
            <td class="selectAllCheckbox"><input type="checkbox"></td>
            <td class="products">Product</td>
            <td class="units">Unit Price</td>
            <td class="quantitys">Quantity</td>
            <td class="totals">Total Price</td>
            <td class="actions">Action</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">1</td>
            <td class="total">$150</td>
            <td class="action">Delete</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">1</td>
            <td class="total">$150</td>
            <td class="action">Delete</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">1</td>
            <td class="total">$150</td>
            <td class="action">Delete</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">2</td>
            <td class="total">$300</td>
            <td class="action">Delete</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">1</td>
            <td class="total">$150</td>
            <td class="action">Delete</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">1</td>
            <td class="total">$150</td>
            <td class="action">Delete</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">1</td>
            <td class="total">$150</td>
            <td class="action">Delete</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">1</td>
            <td class="total">$150</td>
            <td class="action">Delete</td>
        </tr>
    </table>
    <br>
    <table class="checkout">
        <tr class="checout_Content">
            <td class="selectAll">Select All</td>
            <td class="deleteAll" >Delete All</td>
            <td class="total_Items">Total(items: 0)</td>
            <td class="total_Price">$0</td>
            <td class="checkss"><a href="/checkOut"><button>CHECKOUT</button></a></td>
        </tr>
    </table>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2">
        <p>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the "Select All" checkbox
            var selectAllCheckbox = document.querySelector('.selectAllCheckbox input');

            // Get all other checkboxes
            var otherCheckboxes = document.querySelectorAll('table tr input[type="checkbox"]');

            // Add an event listener to the "Select All" checkbox
            selectAllCheckbox.addEventListener('change', function() {
                // Loop through all other checkboxes and set their checked property
                otherCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            });
        });
    </script>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
