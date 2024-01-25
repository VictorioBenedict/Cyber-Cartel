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
            background-color: #ffffff
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px;
            bottom: 0;
            width: 100%;
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
            height: 500px; /* Set a fixed height for all images */
            object-fit: cover; /* Ensure images cover the container without stretching */
            border: 1px solid #ddd;
            display: inline-block;

        }
        .card:hover {
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); /* Adjust the color and intensity as needed */
    }
    .images{
        width: 10px;
        height: 10px;
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
                                <a class="dropdown-item" href="/processor_category">Processor</a>
                                <a class="dropdown-item" href="/motherboard_category">Motherboard</a>
                                <a class="dropdown-item" href="/ram_category">Ram</a>
                                <a class="dropdown-item" href="/gpu_category">Video Card</a>
                                <a class="dropdown-item" href="/psu_category">Power Supply Unit</a>
                                <a class="dropdown-item" href="/ssd_category">Solid State Drive</a>
                                <a class="dropdown-item" href="/hdd_category">Hard Drive</a>
                                <a class="dropdown-item" href="/chassis_category">Chassis</a>
                                <a class="dropdown-item" href="/monitor_category">Monitor</a>
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

    <br>


  <!-- Header Section -->
  <header style="margin-top: 50px">
      <div class="container"  id="contents">
          <h1><i>Top Products</i></h1>
      </div>
  </header>

  <!-- Dashboard Content -->
  <div class="slider-frame">
    <div class="slide-images">
        <div class="img-container">
            <img src="images/image 1.jpg" alt="Slide 1">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/intel 1.jpg') }}" alt="Slide 2">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/gpu 1.jpg') }}" alt="Slide 3">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/ram.jpg') }}" alt="Slide 4">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/motherboard.png') }}" alt="Slide 5">
        </div>
    </div>
    <br>
        <div class="container mt-4">
            <div class="row">
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Pre-Built Units</i></h4>
                        <br>
                        <a href="/pre_built_units"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 1.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_2" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 2.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 3.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 4.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 5.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 6.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>





                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Processor</i></h4>
                        <br>
                        <a href="/processor_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/amd 1.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 2.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/cpu 3.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 4.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/cpu 5.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 6.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="motherboard_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Graphics Card</i></h4>
                        <br>
                        <a href="gpu_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 1 AMD Radeon RX 7600.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 2 AMD Radeon RX 6600.png" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 3 Gigabyte NVIDIA GeForce RTX 3050.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 4 GeForce GTX 1660 SUPER TUF.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 5 Zotac Gaming GeForce RTX 3050 Twin Edge.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 6 MSI AMD Radeon RX 6600.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Ram</i></h4>
                        <br>
                        <a href="ram_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 1 G.Skill Trident Z5 Neo RGB DDR5-6000.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 2 Patriot Viper Steel DDR4-4400.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 3 Patriot Viper RGB DDR4-3600.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 4 Patriot Viper 4 DDR4-3400.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 5 Corsair Vengeance RGB Pro DDR4-3200.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 6 G.Skill Trident Z Neo DDR4-3600.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Power Supply</i></h4>
                        <br>
                        <a href="psu_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 1 Corsair RM750x.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 2 Seasonic Prime Titanium TX-1000.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 3 XPG Pylon 450.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 4 BeQuiet! Pure Power 11 FM 550W.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 5 Corsair AX1600i.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 6 silverstone sx1000 lpt 1000w 80 plus platinum.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>






                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Monitor</i></h4>
                        <br>
                        <a href="monitor_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Solid State Drive</i></h4>
                        <br>
                        <a href="ssd_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Hard Disk Drive</i></h4>
                        <br>
                        <a href="hdd_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Chassis</i></h4>
                        <br>
                        <a href="chassis_category"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg" class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center" style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>



            </div>
        </div>



    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2">
        <p>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    <!-- ... (Your existing HTML) -->

<!-- ... (Your existing HTML) -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slideContainer = document.querySelector(".slide-images");
        const slideImages = document.querySelector(".slide-images");
        let currentIndex = 0;
        let startX;
        let isSwiping = false;

        function showSlide(index) {
            const translateValue = -index * 100 + "%";
            slideImages.style.transform = "translateX(" + translateValue + ")";
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % 5;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + 5) % 5; // Ensure positive index
            showSlide(currentIndex);
        }

        function handleStart(event) {
            if (event.type === "touchstart") {
                startX = event.touches[0].clientX;
            } else {
                startX = event.clientX;
            }
            isSwiping = true;
            event.preventDefault(); // Prevent default behavior to avoid page scrolling
        }

        function handleMove(event) {
            if (!isSwiping) return;

            const currentX = event.type === "touchmove" ? event.touches[0].clientX : event.clientX;
            const diffX = currentX - startX;

            if (Math.abs(diffX) > 50) { // Adjust the sensitivity as needed
                if (diffX > 0) {
                    prevSlide();
                } else {
                    nextSlide();
                }
                startX = null;
                isSwiping = false;
            }
            event.preventDefault(); // Prevent default behavior to avoid page scrolling
        }

        function handleEnd() {
            startX = null;
            isSwiping = false;
        }

        slideContainer.addEventListener("touchstart", handleStart);
        slideContainer.addEventListener("touchmove", handleMove);
        slideContainer.addEventListener("touchend", handleEnd);

        slideContainer.addEventListener("mousedown", handleStart);
        slideContainer.addEventListener("mousemove", handleMove);
        slideContainer.addEventListener("mouseup", handleEnd);

        // Automatic slideshow
        setInterval(nextSlide, 5000);

        // Optional: Pause slideshow on hover
        slideContainer.addEventListener("mouseenter", function () {
            clearInterval(intervalId);
        });

        slideContainer.addEventListener("mouseleave", function () {
            intervalId = setInterval(nextSlide, 5000);
        });
    });
</script>

<!-- ... (Your existing JavaScript) -->

<!-- ... (Your existing HTML) -->


<!-- ... (Your existing JavaScript) -->

<!-- ... (Your existing HTML) -->


    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
