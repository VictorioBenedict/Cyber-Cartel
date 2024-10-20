<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
        overflow-x: hidden;
    }

    main {
        flex: 1;
    }

    footer {
        flex-shrink: 0;
        margin-top:auto;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 0 auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .tatable {
        min-height: 551px;
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

    .black-btn {
        padding: 5px;
        background-color: #4d9584;
        color: white;
        border-radius: 5px;
        border: none;
        /* Adjust font size if needed */
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <!-- ... (Your existing HTML) -->
    @include('Layouts.navbar')

    <header style="margin-top: 65px">
        <div class="container" id="contents">
            <header class="d-flex justify-content-between" style="margin-top: 40px;">
                <h2></h2>
                @if(session()->has('error'))
                        <div class ="alert alert-danger">{{session('error')}}</div>
                        @endif
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
            <td class="delivery_Address" style="font-weight:bold;">Delivery Address</td>
        </tr>
        <tr  class="user_Address_container">
        @if(count($addresses)>=1)
        @foreach ($addresses->slice(0,3) as $item)
            <td class="user_Address_Data">{{$item -> region}}, {{$item -> city}}, {{$item -> address}}, {{$item -> postal_code}}</td>
        @endforeach
        @else
        <td><p>Please add an address</p></td>
        <td><a class="btn btn-outline-dark" href="/profile">My account</a></td>
        @endif
        </tr>
    </table>
    <br>
    <table>
        <tr style="font-weight:bold;">
            <td class="product_Container">Product Ordered</td>
            <td class="unitPrice_Container">Unit Price</td>
            <td class="amount_Container">Product</td>
            <td class="actions">Quantity</td>
            <td class="totals">Full Price</td>
        </tr>
        @foreach ($cart as $cartitem)
        <tr>
            <td class="product">
                <img src="{{$cartitem -> photo}}" class="img">
                <h6>{{$cartitem -> name}}</h6>
            </td>
            <td class="unit">₱{{number_format($cartitem -> price)}}</td>
            <td class="quantity">{{$cartitem -> category}}</td>
            <td>{{number_format($cartitem -> quantity)}}</td>
            <td class="total"><nobr>₱{{number_format($cartitem -> price * $cartitem ->quantity)}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <table>
        <td></td>
        <td></td>
        <td></td>
        <td class="right-align">Total Items: {{number_format($totalitems)}}</td>
        <td class="right-align">Total Payment: </td>
        <td class="right-align">₱{{number_format($totalPrice)}}</td>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <form action="{{url('topurchase',$bought->id)}}" method = "POST">
            @csrf
            <td class="right-align button"><button class="btn btn-outline-dark">Place Order</button></td>
            </form>
        </tr>
    </table>
    <br>

    <!-- Footer Section -->
 
    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>