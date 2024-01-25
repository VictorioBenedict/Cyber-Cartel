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
                    <h2>Reset Password</h2>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Content -->
    <section style=" margin-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <form id="signupForm" action="/login" method="POST" style="border: 1px solid #ccc; border-radius: 10px; padding: 10%;">
                        @csrf
                        <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                            <div>
                                <h3 class="text-center">SET YOUR PASSWORD</h3>
                                <p class="text-center" style="margin-bottom: -2.5px;">Create a new password for</p>
                                <p class="text-center">User@email.com</p>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="username">New Password</label>
                            <input type="password" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="email">Confirm Password</label>
                            <input type="password" class="form-control" id="email" name="email" placeholder="Enter your Email">
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
    <footer class="bg-dark text-light text-center py-2 fixed-bottom">
        <p>&copy; 2023 Login Page. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

