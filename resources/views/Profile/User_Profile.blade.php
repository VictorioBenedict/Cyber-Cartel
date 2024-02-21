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
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .main {
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

    .profile_images {
        border-radius: 50%;
        width: 7vw;
        height: auto;
        margin-left: 35%;
    }

    .container {
        display: flex;
        width: 100%;
        height: auto;
    }

    .user_profile {
        width: 30%;
        overflow-y: hidden;
        box-sizing: border-box;
        border: 1px solid rgb(255, 255, 255);
    }

    .contents {
        width: 100%;
        flex: 1;
        overflow-y: auto;
        padding-left: 20px;
        overflow-x: hidden;
    }

    .contents table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid black;
    }

    .table_1 {
        margin-bottom: 10px;
        position: sticky;
        z-index: 2;
        background-color: #ffffff;
    }

    .profile_img {
        border-radius: 50%;
        width: 7.5vw;
        height: auto;
    }

    .user_details {
        text-align: left;
        margin-left: 30%;
        font-size: 14px;
    }

    .user_header {
        text-align: left;
        text-decoration: none;
    }

    .myPurchase_header {
        margin-top: -30px;
        text-align: left;
        text-decoration: none;
    }

    .payment {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .address {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .change_pass {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .main_content {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .highlight-black {
        background-color: black;
        color: white;
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
            <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 10vw;">
                <!-- Desktop Search Bar -->
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="width: 47vw; margin-left: -7vw;">
            </form>

            <a href="/cart"><img src="images/shopping-cart.png" style="width: 25px; margin-left: 3.5vw;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                        <!-- mx-auto to center the content -->
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item text-center" href="/processor_category">Processor</a>
                                    <a class="dropdown-item text-center" href="/motherboard_category">Motherboard</a>
                                    <a class="dropdown-item text-center" href="/ram_category">Ram</a>
                                    <a class="dropdown-item text-center" href="/gpu_category">Video Card</a>
                                    <a class="dropdown-item text-center" href="/psu_category">Power Supply Unit</a>
                                    <a class="dropdown-item text-center" href="/ssd_category">Solid State Drive</a>
                                    <a class="dropdown-item text-center" href="/hdd_category">Hard Drive</a>
                                    <a class="dropdown-item text-center" href="/chassis_category">Chassis</a>
                                    <a class="dropdown-item text-center" href="/monitor_category">Monitor</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pc Builder
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item text-center" href="#">INTEL</a>
                                    <a class="dropdown-item text-center" href="#">AMD</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="color: white;">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item text-center highlight-black" href="/profile">My account</a>
                                    <a class="dropdown-item text-center" href="/my_purchase">My Purchase</a>
                                    <a class="dropdown-item text-center" href="login">Log out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </nav>

    <!-- Header Section -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <table class="user_profile">
            <tr>
                <td>
                    <a href="/my_account">
                        <img src="images/Pre-Built/sysu 1.jpg" class="profile_img"
                            style="float: left; margin-left: -120px; margin-top: -60px;">
                    </a>
                    <h2 style="margin-bottom: 20px; margin-top: -41px;">Username</h2>
                    <a href="/my_account" style="text-decoration: none; color: rgb(0, 0, 0);">
                        <p>Edit Profile</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <hr style="margin: 0 auto; width: 100%; margin-bottom: -400px; margin-left: -90px; ">
                </td>
            </tr>
            <tr>
                <div class="section">
                    <td style="text-align: center;">
                        <div class="user_header">
                            <a href="/my_account"
                                style="text-decoration: none; font-size: 30px; margin-bottom: -90px;">My
                                Account</a>
                        </div>
                        <br>
                        <div class="user_details" style="margin-left: 40px;">
                            <a href="/my_account" style="text-decoration: none; " class="myPurchase_header">
                                <p>Profile</p>
                            </a>
                            <a href="/address" style="text-decoration: none; " class="address">
                                <p>Address</p>
                            </a>
                            <a href="/change_passwordV" style="text-decoration: none; color:rgb(0, 0, 0));"
                                class="change_pass">
                                <p>Change Password</p>
                            </a>
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <div class="myPurchase_header">
                        <a href="/my_purchase" style="font-size: 30px; text-decoration: none; color: rgb(0, 0, 0);">My
                            Purchase</a>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Table Section -->
        <div class="contents">
            <table class="table_2">
                <tr>
                    <td style="text-align: right; display: flex; flex-direction: column; align-items: flex-end;">
                        <h4 style=" margin-right: auto; padding: 10px; font-weight: bold;">
                            My Profile
                        </h4>
                        <p style="margin: 0; margin-right: auto; padding-left:10px; font-weight: bold;">Manage and
                            protect your account</p>
                        <br>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                </tr>
                <div class="profile_picture">
                    <tr>
                        <td style="display: flex; align-items: center; justify-content: flex-start;">
                            <img src="images/Pre-Built/sysu 1.jpg" class="profile_images">
                            <button style="margin-left: 5%;">Select Image</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr style="margin: 0 auto; width: 100%;">
                        </td>
                    </tr>
                </div>
                <tr class="user">
                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                        <p style="margin-left: 5%; font-weight: bold;">Username:</p>
                        <p style="margin-left: 2%;">John Mark</p>
                    </td>
                </tr>
                <tr class="name">
                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                        <p style="margin-left: 5%; font-weight: bold;">Name:</p>
                        <input type="text" style="margin-left: 2%;  margin-bottom:2%;">
                    </td>
                </tr>
                <tr class="email">
                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                        <p style="margin-left: 5%; font-weight: bold;">Email:</p>
                        <p style="margin-left: 2%;">johnmark@gmail.com</p>
                        <a href="/change_email" style="margin-left: 2%;">
                            <p>change</p>
                        </a>
                    </td>
                </tr>
                <tr class="phoneN">
                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                        <p style="margin-left: 5%; font-weight: bold;">Phone Number:</p>
                        <p style="margin-left: 2%;">123445678901</p>
                        <a href="/change_number" style="margin-left: 2%;">
                            <p>change</p>
                        </a>
                    </td>
                </tr>
                <tr class="gender">
                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                        <p style="margin-left: 5%; font-weight: bold;">Gender:</p>
                        <p style="margin-left: 2%;">Male</p><input type="radio"
                            style="margin-left: 2%; margin-bottom: 2%;">
                        <p style="margin-left: 2%;">Female</p><input type="radio"
                            style="margin-left: 2%; margin-bottom: 2%;">
                        <p style="margin-left: 2%;">Other</p><input type="radio"
                            style="margin-left: 1%; margin-bottom: 2%;">
                    </td>
                </tr>
                <tr class="bday">
                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                        <p style="margin-left: 5%; font-weight: bold;">Date of birth:</p><input type="date"
                            style="margin-left: 2%; margin-bottom:2%;">
                    </td>
                </tr>
                <tr style="display: flex; align-items: center; justify-content: flex-end;">
                    <td>
                        <button>Save</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <br>
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

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>