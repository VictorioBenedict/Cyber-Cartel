<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    /* Additional styles for responsiveness */
    body {
        font-family: "Spoof Trial Thin";
        padding-top: 30px;
        overflow: hidden;
        color:black;
        background-color:#E7DFCB
        ;
        /* Add padding to body for the fixed navbar */
    }

    .black-button {
        background-color: #D69EB1
        ;
        color: white;
    }

    .black-link {
        text-decoration: none;
        color: black;
    }

    /* Hover effect for the "Login" button */
    .grey-hover:hover {
        background-color: #eeafc5;
        color: white;
        /* You may adjust the text color as needed */
    }

    /* Increase right margin for the content */
    .custom-container {
        margin-right: -350px;
        position: relative;
        /* Adjust as needed */
    }

    .custom-container::before {
        content: '';
        display: block;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .custom-container .row {
        position: relative;
        z-index: 1;
    }

    @media (max-width: 767px) {
        .custom-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 400px;
        }
    }

    @media (max-width: 767px) {
        .hide-on-small {
            display: none;
        }
    }

    /* Add more padding for the login form */
    /*ajust para sa login form*/
    #loginForm {
        border-radius: 50px;
        padding: 105px;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

        /* Adjust as needed */
    }

    .btn-black {
        background-color: #eeafc5;
        color: black;
    }

    .btn-black-active {
        background-color: #eeafc5;
        color: white;
    }

    .position-fixed {
        transition: transform 0.3s ease-in-out;
        /* Adjust the transition properties as needed */
    }



    footer {
        flex-shrink: 0;
        margin-top:auto;
    }
    </style>
</head>

<body>

    <!-- Navigation Bar 
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background-color: black; position: fixed; width: 100%; border-radius: 0 0 15px 15px;">
        <a class="navbar-brand" href="/"><img src="images/cyber_-removebg-preview.png" style="width:200px;"></a>
         Add your navigation links if needed
    </nav> -->


    <!-- Content Section -->
    <section style=" ">
        <div class="container custom-container text-center">
            <!-- Login Form Row -->
            <div class="row" style="border: none;">
                <div class="col-lg-7 col-md-9 col-sm-12">
                    <!-- Login Content -->
                    <div class>

                        @if(session()->has('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                        @endif

                        @if(session()->has('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                    </div>
                    <form id="loginForm" action="{{route('adminpost')}}" method="post" style= "background-color: white;">
                        @csrf
                        <header class="py-5 text-center">
                            <h1><b>LOGIN</b></h1>
                        </header>

                        <div class="form-group" style="margin-bottom: 20px;">
                          
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 30px;">
                         
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-black btn-sm" id="showPasswordBtn"
                                        onclick="togglePassword()">Show</button>
                                </div>
                            </div>
                            @error('password') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-block black-button grey-hover">Login</button>
                        <br>

                        
                        <p>Don't have an account?</p><nobr><a href="/signup" class="black-link" style="text-decoration: none;"><nobr><p>Create one</p></a>
                            
                    </form>
                </div>

                <!-- Image on the left side (as a clickable button) -->
                <div class="col-lg-6 col-md-3 col-sm-9 position-fixed text-left" style="left: 30px; top: 70px;">
                    <a href="/">
                        <img src="images/logo.png" alt="Left Image" style="width: 80%;">
                    </a>
                </div>
            </div>
        </div>
    </section>

    
 



    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var showPasswordBtn = document.getElementById("showPasswordBtn");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordBtn.classList.add("btn-black-active");
        } else {
            passwordInput.type = "password";
            showPasswordBtn.classList.remove("btn-black-active");
        }
    }
    </script>
</body>

</html>