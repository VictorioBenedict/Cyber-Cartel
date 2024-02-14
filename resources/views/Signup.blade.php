<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional styles for responsiveness */
        body {
            padding-top: 60px; /* Add padding to body for the fixed navbar */
        }
        .black-button {
        background-color: black;
        color: white;
        }
        .black-link {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/"><img  src="images/logo.png"  style="width:200px;"></a>
        <!-- Add your navigation links if needed -->
    </nav>

    <!-- Header Section -->
    <header class="py-5 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h1>Sign-Up</h1>
                    <p>Enter your credentials and create your account.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Content -->
    <section style="margin-top: 20px; margin-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <form id="signupForm" action="/dashboard" method="POST" style="border: 1px solid #ccc; border-radius: 10px; padding: 20px;">
                        @csrf
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block black-button">Sign-Up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2 fixed-bottom">
        <p>&copy; 2023 Login Page. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

