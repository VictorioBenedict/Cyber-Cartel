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
        .user_details{
            text-align:left;
            margin-left: 30%;
            font-size: 14px;
        }
        .user_header{
            text-align:left;
            text-decoration: none;
        }
        .myPurchase_header{
            margin-top: -30px;
            text-align:left;
            text-decoration: none;
        }
        .payment{
            text-decoration: none;
            color:rgb(0, 0, 0);
        }
        .address{
            text-decoration: none;
            color:rgb(0, 0, 0);
        }
        .change_pass{
            text-decoration: none;
            color:rgb(0, 0, 0);
        }
        .main_content {
        display: flex;
        flex-direction: column;
        width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    @include('Layouts.navbar')

    <!-- Header Section -->
    <br>
    <br>
    <br>
    <div class="container">
            <table class="user_profile">
                <tr>
                    <td>
                        <a href="/my_account"><img src="images/Pre-Built/sysu 1.jpg" class="profile_img"></a>
                        <h6>Username</h6>
                    </td>
                </tr>
                <tr>
                    <td><hr style="margin: 0 auto; width: 100%;"></td>
                </tr>
                    <td>
                        <div class="user_header">
                            <a href="/my_account" style="text-decoration: none">My Account</a>
                        </div>
                        <div class="user_details">
                            <a href="/my_account"  style="text-decoration: none;" class="myPurchase_header"><p>Profile</p></a>
                            <a href="/bank_and_card" style="text-decoration: none;" class="payment"><p>Bank & Cards</p></a>
                            <a href="/address" style="text-decoration: none;" class="address"><p>Address</p></a>
                            <a href="/change_passwordV" style="text-decoration: none; color:rgb(0, 0, 0));" class="change_pass"><p>Change Password</p></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="myPurchase_header">
                            <a href="/my_purchase"  style="text-decoration: none; color: rgb(0, 0, 0);">My Purchase</a>
                        </div>
                    </td>
                </tr>
        </table>
        <!-- Table Section -->
        <div class="contents">
            <table class="table_2">
                <tr>
                    <td style="text-align: right; display: flex; flex-direction: column; align-items: flex-end;">
                        <h4 style="margin: 0; margin-right: auto; padding:10px">
                            My Profile
                        </h4>
                        <p  style="margin: 0; margin-right: auto; padding-left:10px">Manage and protect your account</p>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                </tr>
                <form action="{{route("user.update-profile")}}" method = "POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="profile_picture">
                                <tr>
                                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                                        <img src="images/Pre-Built/sysu 1.jpg" class="profile_images">
                                        <button style="margin-left: 5%;">Select Image</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><hr style="margin: 0 auto; width: 100%;"></td>
                                </tr>
                            </div>
                        <tr class="user">
                            <td style="display: flex; align-items: center; justify-content: flex-start;">
                                <p style="margin-left: 10%;">Username:</p>
                                <input type="text"  style="margin-bottom: 1.5%; margin-left:2%" name ="name" id="name" value="{{$user -> name}}"/>
                            </td>
                        </tr>
                        <tr class="email">
                            <td style="display: flex; align-items: center; justify-content: flex-start;">
                                <p style="margin-left: 10%;">Email:</p>
                                <input type="email"  style="margin-bottom: 1.5%; margin-left:2%" name ="email" id="email" value="{{$user -> email}}"/>
                            </td>
                        </tr>
                        <tr class="phoneN">
                            <td style="display: flex; align-items: center; justify-content: flex-start;">
                                <p style="margin-left: 10%;">Phone Number:</p>
                                <p style="margin-left: 2%;">123445678901</p>
                            </td>
                        </tr>
                    <tr style="display: flex; align-items: center; justify-content: flex-end;">
                        <td>
                            <button type="submit">Save</button>
                        </td>
                    </tr>
                    </form>
            </table>
        </div>
    </div>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2">
        <p>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
