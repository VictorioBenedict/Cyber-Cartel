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
            margin: 0;
            padding: 0;
        }

        .main {
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
            width: 65%;
            border: 1px solid black;
        }

        td {
            padding: 15px;
            text-align: center;
        }

        .table_1 td {
            padding: 15px;
            text-align: center;
            cursor: pointer;
            width: 16.66%;
        }

        .img {
            max-width: 10%;
            margin-right: 10px;
        }

        .clicked {
            border-bottom: 2px solid rgb(0, 0, 0);
            color: rgb(68, 0, 255);
        }

        .profile_img {
            border-radius: 50%;
            width: 7.5vw;
            height: auto;
        }

        .container {
            display: flex;
            width: 100%;
            height: auto;
        }

        .user_profile {
            width: 30%;
            overflow-y: hidden;
            border-right: 1px solid #ccc;
            box-sizing: border-box;
            margin-right: 0;
        }

        .contents {
            width: 100%;
            flex: 1;
            overflow-y: auto;
            padding: 20px;
            overflow-x: hidden;
        }

        .contents table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
            margin-bottom: 20px;
        }

        .table_1 {
            margin-bottom: 10px;
            position: sticky;
            z-index: 2;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"><img  src="images/logo.png"  style="width:200px;"></a>
            <br>
            <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 10vw;">
                <!-- Desktop Search Bar -->
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 40vw;">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <a href="/cart"><img src="images/shopping-cart.png" style="width: 25px; margin-left: 2vw;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0"> <!-- mx-auto to center the content -->
                    <li class="nav-item" style="margin-right: 1.5vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <!-- Dropdown content goes here -->
                                <a class="dropdown-item" href="#">Processor</a>
                                <a class="dropdown-item" href="#">Motherboard</a>
                                <a class="dropdown-item" href="#">Ram</a>
                                <a class="dropdown-item" href="#">Video Card</a>
                                <a class="dropdown-item" href="#">Power Supply Unit</a>
                                <a class="dropdown-item" href="#">Solid State Drive</a>
                                <a class="dropdown-item" href="#">Hard Drive</a>
                                <a class="dropdown-item" href="#">Chassis</a>
                                <a class="dropdown-item" href="#">Monitor</a>
                                <a class="dropdown-item" href="#">Keyboard</a>
                                <a class="dropdown-item" href="#">Mouse</a>
                                <a class="dropdown-item" href="#">Headset</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" style="margin-right: 1.5vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pc Builder
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <!-- Dropdown content goes here -->
                                <a class="dropdown-item" href="#">INTEL</a>
                                <a class="dropdown-item" href="#">AMD</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" style="margin-right: 1.5vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <!-- Dropdown content goes here -->
                                <a class="dropdown-item" href="/profile">My account</a>
                                <a class="dropdown-item" href="/my_purchase">My Purchase</a>
                                <a class="dropdown-item" href="login">Log out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Header Section -->
    <br>
    <br>
    <br>
    <div class="container">
        <div class="user_profile">
            <table>
                <tr>
                    <td>
                        <a href="/my_account"><img src="images/Pre-Built/sysu 1.jpg" class="profile_img"></a>
                        <h6>Username</h6>
                        <a href="/my_account" style="text-decoration: none; color: rgb(0, 0, 0);"><p>Edit Profile</p></a>
                    </td>
                </tr>
                <tr>
                    <td><hr style="margin: 0 auto; width: 100%;"></td>
                </tr>
                <tr>
                    <td><a href="/my_account"  style="text-decoration: none; color: rgb(0, 0, 0);">My Account</a></td>
                </tr>
                <tr>
                    <td><a href="/my_purchase"  style="text-decoration: none;">My Purchase</a></td>
                </tr>
            </table>
        </div>
        <!-- Table Section -->
        <div class="contents">
            <table class="table_1">
                <tr style="border-bottom: 1px solid">
                    <td class="products" onclick="toggleBorderBottom(this)">ALL</td>
                    <td class="units" onclick="toggleBorderBottom(this)">To Pay</td>
                    <td class="quantitys" onclick="toggleBorderBottom(this)">To Ship</td>
                    <td class="totals" onclick="toggleBorderBottom(this)">To Receive</td>
                    <td class="actions" onclick="toggleBorderBottom(this)">Completed</td>
                    <td class="actions" onclick="toggleBorderBottom(this)">Cancelled</td>
                </tr>
            </table>
            <table class="table_2">
                <tr>
                    <td style="text-align: right; display: flex; flex-direction: column; align-items: flex-end;">
                        <h6 style="margin: 0; margin-left: auto; padding:10px">
                            <a href="#" style="text-decoration: none;">Order Status</a> | To Pay
                        </h6>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                    <tr>
                        <td style="text-align: right; display: flex; align-items: flex-start;">
                            <img src="images/Pre-Built/sysu 1.jpg" class="img" style="margin-right: 10px;">
                            <div>
                                <h5 style="margin: 0;">Product Description</h5>
                                <p style="margin: 0; display: flex; align-items: center;">
                                    Quantity: 1x
                                </p>
                            </div>
                            <div style="margin-left: auto;">
                                <p style="margin: 0;">Price</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr style="margin: 0 auto; width: 100%;">
                        </td>
                    </tr>

                    <tr>
                        <td style="display: flex; align-items: center; justify-content: flex-end;">
                            <h3 style="margin: 0;">Price: </h3>
                            <h4 style="margin: 0;">$0</h4>
                        </td>
                    </tr>
                    <tr style="display: flex; align-items: center; justify-content: flex-end;">
                        <td>
                            <button style="margin-right: 10px">To Receive</button>
                            <button>Buy Again</button>
                        </td>
                    </tr>
            </table>
            <br>
            <table class="table_3">
                <tr>
                    <td style="text-align: right; display: flex; flex-direction: column; align-items: flex-end;">
                        <h6 style="margin: 0; margin-left: auto; padding:10px">
                            <a href="#" style="text-decoration: none;">Order Status</a> | To Pay
                        </h6>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                    <tr>
                        <td style="text-align: right; display: flex; align-items: flex-start;">
                            <img src="images/Pre-Built/sysu 1.jpg" class="img" style="margin-right: 10px;">
                            <div>
                                <h5 style="margin: 0;">Product Description</h5>
                                <p style="margin: 0; display: flex; align-items: center;">
                                    Quantity: 1x
                                </p>
                            </div>
                            <div style="margin-left: auto;">
                                <p style="margin: 0;">Price</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr style="margin: 0 auto; width: 100%;">
                        </td>
                    </tr>

                    <tr>
                        <td style="display: flex; align-items: center; justify-content: flex-end;">
                            <h3 style="margin: 0;">Price: </h3>
                            <h4 style="margin: 0;">$0</h4>
                        </td>
                    </tr>
                    <tr style="display: flex; align-items: center; justify-content: flex-end;">
                        <td>
                            <button style="margin-right: 10px">To Receive</button>
                            <button>Buy Again</button>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2">
        <p>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script>
        function toggleBorderBottom(element) {
            // Remove 'clicked' class from all td elements in the table
            var tds = element.parentNode.getElementsByTagName('td');
            for (var i = 0; i < tds.length; i++) {
                tds[i].classList.remove('clicked');
            }

            // Add 'clicked' class to the clicked td element
            element.classList.toggle('clicked');
        }
    </script>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
