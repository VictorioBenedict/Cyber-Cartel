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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .slider-frame {
            overflow: hidden;
            max-width: 100%;
            margin-top: 20px;
        }

        .slide-images {
            display: flex;
            flex-direction: row;
            transition: transform 0.5s ease-in-out;
        }

        .img-container {
            width: 100%; /* Adjust the width as needed */
            box-sizing: border-box;
            flex: 0 0 auto;
            text-align: center;
        }
        #pics{
            max-width: 100%; /* Set max-width to 100% to ensure it doesn't exceed its container */
            height: auto;   /* Allow the height to adjust proportionally */
            display: block; /* Remove any default inline styles that may affect sizing */
            margin: 0 auto;
        }

        .img-container img {
            width: 75vw; /* Make images responsive */
            height: 5; /* Set a fixed height for all images */
            object-fit: cover; /* Ensure images cover the container without stretching */
            border: 1px solid #ddd;
            display: inline-block;

        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->

    <!-- ... (Your existing HTML) -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard"><img  src="images/logo.png"  style="width:200px;"></a>
            <br>
            <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 10vw;">
                <!-- Desktop Search Bar -->
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 40vw;">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <a href="#"><img src="images/shopping-cart.png" style="width: 25px; margin-left: 2vw;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0"> <!-- mx-auto to center the content -->
                    <li class="nav-item" style="margin-right: 1.5vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <!-- Dropdown content goes here -->
                                <a class="dropdown-item" href="#">CPU</a>
                                <a class="dropdown-item" href="#">GPU</a>
                                <a class="dropdown-item" href="#">RAM</a>
                                <a class="dropdown-item" href="#">CASE</a>
                                <a class="dropdown-item" href="#">PSU</a>
                                <a class="dropdown-item" href="#">MONITOR</a>
                                <a class="dropdown-item" href="#">MOTHERBOARD</a>
                                <a class="dropdown-item" href="#">KEYBOARD</a>
                                <a class="dropdown-item" href="#">MOUSE</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" style="margin-right: 1.5vw;">
                        <a class="nav-link" aria-current="page" href="/market">Pc Builder</a>
                    </li>
                    <li class="nav-item" style="margin-right: 1.5vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <!-- Dropdown content goes here -->
                                <a class="dropdown-item" href="#">My account</a>
                                <a class="dropdown-item" href="#">My Purchase</a>
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

    <br>


  <!-- Header Section -->
  <header style="margin-top: 50px">
      <div class="container"  id="contents">
          <h1><i>Market Place</i></h1>
      </div>
  </header>
<div class="container mt-4">
    <div class="row">
        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                <div class="card border-dark" style="border-radius: 50px;">
                    <!-- Added border-radius for the entire card -->
                    <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: white; border-radius: 50px;">
                        <!-- Added text-center class for centering content -->
                        <img src="images/sysu 1.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                        <!-- Added border-white class, border-radius, and border for the image -->
                        <!-- Removed mx-auto class, added display:block and margin for centering -->
                        <h4 class="card-subtitle mb-2 mt-2"><i>Gaming Pc</i></h4>
                        <p class="card-text">System Unit</p>
                        <h5 class="card-subtitle mb-2 mt-2">₱12,500</h5>
                    </div>
                </div>
            </a>
        </article>




        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
            <div class="card border-dark" style="border-radius: 50px;"> <!-- Added border-radius for the entire card -->
                <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;">
                    <!-- Added text-center class for centering content -->
                    <img src="images/sysu 2.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                    <!-- Added border-white class and border-radius for the image -->
                    <!-- Removed mx-auto class, added display:block and margin for centering -->
                    <h4 class="card-subtitle mb-2 mt-2"><i>PC RYZEN 7</i></h4>
                    <p class="card-text">System Unit</p>
                    <h5 class="card-subtitle mb-2 mt-2">₱24,000</h5>
                </div>
            </div>
            </a>
        </article>

        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
            <div class="card border-dark" style="border-radius: 50px;"> <!-- Added border-radius for the entire card -->
                <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;">
                    <!-- Added text-center class for centering content -->
                    <img src="images/sysu 3.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                    <!-- Added border-white class and border-radius for the image -->
                    <!-- Removed mx-auto class, added display:block and margin for centering -->
                    <h4 class="card-subtitle mb-2 mt-2"><i>Pc set</i></h4>
                    <p class="card-text">System Unit / monitor.</p>
                    <h5 class="card-subtitle mb-2 mt-2">₱13,000 </h5>
                </div>
            </div>
            </a>
        </article>

        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
            <div class="card border-dark" style="border-radius: 50px;"> <!-- Added border-radius for the entire card -->
                <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;">
                    <!-- Added text-center class for centering content -->
                    <img src="images/sysu 4.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                    <!-- Added border-white class and border-radius for the image -->
                    <!-- Removed mx-auto class, added display:block and margin for centering -->
                    <h4 class="card-subtitle mb-2 mt-2"><i>Gaming Desktop</i></h4>
                    <p class="card-text">System Unit</p>
                    <h5 class="card-subtitle mb-2 mt-2">₱12,000</h5>
                </div>
            </div>
            </a>
        </article>

        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
            <div class="card border-dark" style="border-radius: 50px;"> <!-- Added border-radius for the entire card -->
                <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;">
                    <!-- Added text-center class for centering content -->
                    <img src="images/sysu 5.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                    <!-- Added border-white class and border-radius for the image -->
                    <!-- Removed mx-auto class, added display:block and margin for centering -->
                    <h4 class="card-subtitle mb-2 mt-2"><i>GAMING PC SET</i></h4>
                    <p class="card-text">System Unit</p>
                    <h5 class="card-subtitle mb-2 mt-2">₱12,000</h5>
                </div>
            </div>
            </a>
        </article>

        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
            <div class="card border-dark" style="border-radius: 50px;"> <!-- Added border-radius for the entire card -->
                <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;">
                    <!-- Added text-center class for centering content -->
                    <img src="images/sysu 6.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                    <!-- Added border-white class and border-radius for the image -->
                    <!-- Removed mx-auto class, added display:block and margin for centering -->
                    <h4 class="card-subtitle mb-2 mt-2"><i>BUDGET GAMING PC</i></h4>
                    <p class="card-text">Gaming PC set</p>
                    <h5 class="card-subtitle mb-2 mt-2">₱9,800</h5>
                </div>
            </div>
            </a>
        </article>

        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
            <div class="card border-dark" style="border-radius: 50px;"> <!-- Added border-radius for the entire card -->
                <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;">
                    <!-- Added text-center class for centering content -->
                    <img src="images/sysu 7.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                    <!-- Added border-white class and border-radius for the image -->
                    <!-- Removed mx-auto class, added display:block and margin for centering -->
                    <h4 class="card-subtitle mb-2 mt-2"><i>Gaming Pc</i></h4>
                    <p class="card-text">Gaming PC set</p>
                    <h5 class="card-subtitle mb-2 mt-2">₱25,500</h5>
                </div>
            </div>
            </a>
        </article>

        <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
            <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
            <div class="card border-dark" style="border-radius: 50px;"> <!-- Added border-radius for the entire card -->
                <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;">
                    <!-- Added text-center class for centering content -->
                    <img src="images/sysu 8.jpg" class="card-img-top border-white" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                    <!-- Added border-white class and border-radius for the image -->
                    <!-- Removed mx-auto class, added display:block and margin for centering -->
                    <h4 class="card-subtitle mb-2 mt-2"><i>Gaming Pc</i></h4>
                    <p class="card-text">PC set</p>
                    <h5 class="card-subtitle mb-2 mt-2">₱26,500</h5>
                </div>
            </div>
            </a>
        </article>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
