<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin"
        rel="stylesheet">
    <style>
    @import url(https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin);

    @font-face {
        font-family: "Spoof Trial Thin";
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot");
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot?#iefix")format("embedded-opentype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff2")format("woff2"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff")format("woff"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.ttf")format("truetype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.svg#Spoof Trial Thin")format("svg");
    }

    body {
        font-family: "Spoof Trial Thin";
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        background-color: #ffffff;
        overflow-x: hidden;
    }

    main {
        flex: 1;
    }

    footer {
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 10px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 0 auto;
        border: 1px solid black;
    }

    td {
        padding: 15px;
        text-align: center;
        /* Center-align content in table cells */
    }

    .delivery_Address {
        font-size: 1.55rem;
        white-space: nowrap;
        /* Prevent text wrapping */
        overflow: hidden;
        /* Hide any overflowing text */
        text-overflow: ellipsis;
        /* Display ellipsis (...) for overflow */
    }

    .user_Address_Data {
        width: 10%;
        /* Adjusted width for better alignment */
    }

    .change_Address {
        width: 90%;
        /* Adjusted width for better alignment */
        text-align: left;
    }

    .product {
        display: flex;
        align-items: center;
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .img {
        max-width: 50px;
        /* Set the maximum width as needed */
        margin-right: 10px;
        /* Adjust margin as needed */
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
        white-space: nowrap;
        /* Prevent text wrapping */
        overflow: hidden;
        /* Hide any overflowing text */
        text-overflow: ellipsis;
        /* Display ellipsis (...) for overflow */
        max-width: 20%;
        /* Adjusted max-width for better alignment */
    }

    .right-align {
        text-align: right;
        width: 80%;
        /* Adjusted width for better alignment */
    }

    .alignment {
        padding-right: 7.5%;
    }

    .button {
        width: 0%;
        /* Set the width to 100% for full width */
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <!-- ... (Your existing HTML) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top" style="border-radius: 0 0 15px 15px;">
        <!-- Added border-radius here -->

        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard"><img src="images/cyber_-removebg-preview.png"
                    style="width:200px; margin-left: 2vw;"></a>
            <br>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-right: 4vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>

                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <a class="dropdown-item text-center" href="/my_account">My account</a>
                                <a class="dropdown-item text-center" href="/my_purchase">My Purchase</a>
                                <a class="dropdown-item text-center" href="login">Log out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header style="margin-top: 65px">
        <div class="container" id="contents">
            <header class="d-flex justify-content-between" style="margin-top: 40px;">
                <h2>Cyber Cartel | Checkout</h2>
                <br>
                <br>
            </header>
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
        <tr style="border-bottom: 1px solid;">
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
    <footer class="bg-black text-light text-center py-2">
        <div class="row">
            <div class="col-md text-left ml-md-2">
                <p><a href="/terms" class="text-light">Terms and Conditions</a></p>
            </div>
            <div class="col-md text-center">
                <p>&copy; 2023 Login Page. All rights reserved.</p>
            </div>
            <div class="col-md text-right mr-md-2">
                <p><a href="https://www.facebook.com/yourpage" class="text-light">Follow us on Facebook</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>