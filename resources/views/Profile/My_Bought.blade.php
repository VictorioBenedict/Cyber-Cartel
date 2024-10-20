<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
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

    a {
        text-decoration: none;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;

        font-family: "Spoof Trial Thin";
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .main {
        flex: 1;
    }

    footer {
        margin-top: auto;
    }

    table {
        border-collapse: collapse;
        width: 80%;
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
        margin-bottom: 20px;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }


    .table_1 {
        margin-bottom: 10px;
        position: sticky;
        z-index: 2;
        background-color: #ffffff;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }

    .custom-btn-highlight {
        background-color: #EEAFC5;
        color: black;
        text-decoration: none;
        /* Remove default link underline */
    }

    .custom-btn-highlight:hover {
        color: black;
        background-color: #EEAFC5;
    }

    .custom-btn{
        border-color: #EEAFC5;
        color: black;
    }

    .custom-btn:hover{
        color: black;
        background-color: #EEAFC5;
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
    <br>
    <br>
    <div class="container">
        <div class="user_profile" style="margin-right: 60px;">
            <table style="border: none;">
                <tr>
                    <td style="margin-top: 90px;">
                        <br>
                        <a href="/my_account"><img src="images/user.png" class="profile_img"></a>
                        <h4 style="margin-top: 30px;">{{auth()->user()->name}}</h4>
                        <a href="/my_account" style="text-decoration: none; color: rgb(0, 0, 0);">
                            <br>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                </tr>
                <tr>
                    <td><a href="/my_account" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 20px;">My
                            Account</a></td>
                </tr>
                <tr>
                    <td><a href="/my_purchase" style="text-decoration: none; font-size: 20px;">My Purchase</a></td>
                </tr>
            </table>
        </div>
        <!-- Table Section --> 
        <div class="contents">
        <table class="table_1">
                <tr>
                    <td class="products"><a href="my_purchase" class="btn btn custom-btn">All</a></td>
                    <td class="units"><a href="my_bought" class="btn btn custom-btn-highlight">Bought <i class='bx bx-purchase-tag-alt' ></i></a></td>
                    <td class="actions"><a href="my_cancelled" class="btn btn custom-btn">Cancelled <i class='bx bx-message-square-x'></i></a></td>
                    <td class="actions">
                        <a href="my_refunded" class="btn btn custom-btn">Refunded <i class='bx bx-credit-card-front' ></i></a>
                    </td>
                </tr>
            </table>
            @if(session()->has('message'))
                        <div class ="alert alert-danger">{{session('message')}}</div>
                        @endif
                        @if(session()->has('success'))
                        <div class ="alert alert-success">{{session('message')}}</div>
                        @endif
                        @if(session()->has('status'))
                        <div class ="alert alert-danger">{{session('status')}}</div>
                        @endif
                        @if(session()->has('bought'))
                        <div class ="alert alert-success">{{session('bought')}}</div>
                        @endif
    @if(count($bought)>=1)
            @foreach ($bought as $item)
            <table class="table_2">
                <tr>
                    <td style="text-align: right; display: flex; flex-direction: column; align-items: flex-end;">
                        <h6 style="margin: 0; margin-left: auto; padding:10px">
                            <a  style="text-decoration: none;">Order Status</a> | {{$item->status}}
                        </h6>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                <tr>
                    <td style="text-align: left; display: flex; align-items: flex-start;">
                        <img src=" {{$item -> photo}}" class="img" style="margin-right: 10px;">
                        <div>
                            <h5 style="margin: 0;">{{$item -> name}} </h5>
                            <p style="margin: 0; display: flex; align-items: center;">
                                Quantity: {{number_format($item -> quantity)}}
                            </p>
                        </div>
                        <div style="margin-left: auto;">
                            <p style="margin: 0;">₱ {{number_format($item -> price)}}</p>
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
                        <h4 style="margin: 0;">₱ {{number_format($item -> price * $item -> quantity)}}</h4>
                    </td>
                </tr>
                <tr style="display: flex; align-items: center; justify-content: flex-end;">
                    <td>
                        <form method ="POST">
                        @csrf
                        <button class="btn btn-outline-danger">
                        <a href="{{url('my_purchase/'.$item -> id.'/delete')}}"
                        onclick ="return confirm('Are you sure?')" style= "color: inherit;">
                        Remove Item</a></button>
                        <button formaction="{{url('tocancel',$item->id)}}" class="btn btn-outline-secondary">
                        <a onclick ="return confirm('Are you sure?')" style= "color: inherit;">
                        Cancel</a></button>
                        <button formaction="{{url('torefund',$item->id)}}" class="btn btn-outline-dark">
                        <a onclick ="return confirm('Are you sure?')">
                        Refund</a></button>
                        </form>
                    </td>
                </tr>
            </table>
            @endforeach
    <br>
        @else
        <table class="table_2">
            <td>No Product Found</td>
        </table>
        @endif
</div>
</div>

    <!-- Footer Section -->


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>