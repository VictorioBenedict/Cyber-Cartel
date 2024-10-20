<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
            padding-top: 60px;
            /* Add padding to body for the fixed navbar */
        }

        .black-button {
            background-color: black;
            color: white;
        }

        .black-link {
            text-decoration: none;
            color: black;
        }

        .btn-primary.black-button:hover {
            background-color: #333;
            border: 1px solid #333;
            color: white;
        }

        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/"><img src="images/logo.png" style="width:200px;"></a>
         
    </nav> -->

    <!-- Header Section -->


    <!-- Login Content -->
    <section style="margin-top: -15px; margin-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <!-- Back Button -->
                    <a href="/login" class="btn btn-outline-secondary mb-3">Back</a>

                    <form id="signupForm" action="/login" method="POST"
                        style="border: 1px solid #ccc; border-radius: 50px; padding: 90px;">
                        @csrf

                        <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                            <div>
                                <h3 class="text-center">SET YOUR PASSWORD</h3>
                                <br>
                                <br>

                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="username">New Password</label>
                            <input type="password" class="form-control" id="username" name="username"
                                placeholder="Enter your username">
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="email">Confirm Password</label>
                            <input type="password" class="form-control" id="email" name="email"
                                placeholder="Enter your Email">
                        </div>
                        <div>
                            <p>
                                * At least one lowercase character<br>
                                * At least one upper case character<br>
                                * 8-16 characters<br>
                                * Only letters, numbers and common punctuation can be used
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block black-button">Save</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <br>
    <br>

    <!-- Footer Section -->
    <footer class="bg-black text-light text-center py-3 fixed-bottom">
        <div class="row">
            <div class="col-md text-left ml-md-5">
                <p><a href="/terms" class="text-light">Terms and Conditions</a></p>
            </div>
            <div class="col-md text-center">
                <p>&copy; 2024 Login Page. All rights reserved.</p>
            </div>
           
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>