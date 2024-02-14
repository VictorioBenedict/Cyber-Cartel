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
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            border: 1px solid black;
        }
        td {
            padding: 15px;
            text-align: center; /* Center-align content in table cells */
        }
        .delivery_Address {
            font-size: 1.55rem;
            white-space: nowrap; /* Prevent text wrapping */
            overflow: hidden; /* Hide any overflowing text */
            text-overflow: ellipsis; /* Display ellipsis (...) for overflow */
        }
        .user_Address_Data{
            width: 10%; /* Adjusted width for better alignment */
        }
        .change_Address {
            width: 90%; /* Adjusted width for better alignment */
            text-align: left;
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
        .left-align {
            text-align: left;
        }

        .right-align {
            text-align: right;
        }
        .table-container {
            margin-left: auto;
            margin-right: 0;
        }
        .cash-on-delivery {
    white-space: nowrap; /* Prevent text wrapping */
    overflow: hidden; /* Hide any overflowing text */
    text-overflow: ellipsis; /* Display ellipsis (...) for overflow */
    max-width: 20%; /* Adjusted max-width for better alignment */
}

.right-align {
    text-align: right;
    width: 80%; /* Adjusted width for better alignment */
}
.alignment{
    padding-right: 7.5%;
}
.button {
    width: 0%; /* Set the width to 100% for full width */
}

    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"><img src="images/logo.png" style="width: 200px;"></a>
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
                                <a class="dropdown-item" href="/my_account">My account</a>
                                <a class="dropdown-item" href="/my_purchase">My Purchase</a>
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
            <h1><i>Cyber Cartel | Checkout</i></h1>
        </div>
    </header>
    <br>
    <hr style="margin: 0 auto; width: 80vw;">
    <br>

    <!-- Table Section -->
    <table>
        <tr>
            <td class="delivery_Address">Delivery Address</td>
        </tr>
        <tr style="border-bottom: 1px solid" class="user_Address_container">
            <td class="user_Address_Data">User Address</td>
            <td class="change_Address"><a href="/user_address_details">Change</a></td>
        </tr>
    </table>
    <br>
    <table>
        <tr style="border-bottom: 1px solid;">
            <td class="product_Container">Product Ordered</td>
            <td class="unitPrice_Container">Unit Price</td>
            <td class="amount_Container">Amount</td>
            <td class="actions"></td>
            <td class="totals">Total Price</td>
        </tr>
        <tr  style="border-bottom: 1px solid;">
            <td class="product">
                <img src="images/CPU/Amd/amd 1.jpg" class="img">
                <h6>Product Information</h6>
            </td>
            <td class="unit">$150</td>
            <td class="quantity">-1 +</td>
            <td></td>
            <td class="total">$150</td>
        </tr>
        <tr>
            <td class="product">
            </td>
            <td class="unit"></td>
            <td class="quantity">Shipping Fee</td>
            <td></td>
            <td class="total">$50</td>
        </tr>
        <tr>
            <td class="product">
            </td>
            <td class="unit"></td>
            <td class="total_Items">Total(items: 1)</td>
            <td></td>
            <td class="total_Price">$200</td>
        </tr>
    </table>
    <br>
    <table>
        <tr style="border-bottom: 1px solid;">
            <td class="left-align">Payment Method</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-align  cash-on-delivery">Cash On Delivery</td>
            <td class="right-align alignment">Change</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-align">Merchandise Subtotal:</td>
            <td class="right-align alignment">$0</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-align">Shipping Total:</td>
            <td class="right-align alignment">$0</td>
        </tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-align">Total Payment:</td>
            <td class="right-align alignment">$0</td>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-align button"><a href="/my_purchase"><button>Place Order</button></a></td>
        </tr>
    </table>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2">
        <p>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
