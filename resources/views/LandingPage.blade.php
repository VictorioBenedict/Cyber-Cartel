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
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .search-icon {
        width: 30px;
        /* Adjust the width as needed */
        height: 30px;
        /* Adjust the height as needed */
        border: none;
        /* Remove border */
        background-color: transparent;
        /* Transparent background */
        cursor: pointer;
        /* Set cursor to pointer for better UX */
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
        width: 100%;
        box-sizing: border-box;
        flex: 0 0 auto;
        text-align: center;

    }

    .img-container img {
        width: 100%;
        /* Change to 100% for responsiveness */
        height: auto;
        /* Maintain aspect ratio */
        max-width: 75vw;
        /* Limit maximum width */
        border: 1px solid #ddd;
        display: inline-block;
    }
    </style>
</head>


<body>
    <!-- Navigation Bar -->

    <!-- ... (Your existing HTML) -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top" style="border-radius: 0 0 15px 15px;">
        <!-- Added border-radius here -->
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="images/cyber_-removebg-preview.png"
                    style="width:200px; margin-left: 40px;"></a>

            <li style="margin-left: 15vw; list-style-type: none;">
                <!-- Added list-style-type: none; -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        style="width: 30vw; margin-top: 15px;"> <!-- Adjust the width as needed -->
                </form>
            </li>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ml-auto">
                    <!-- Added ml-auto here -->
                    <!-- mx-auto to center the content -->
                    <li class="nav-item" style="margin-left: 100px; margin-right: 30px">
                        <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                    <li class="nav-item" style="margin-right: 30px;">
                        <a class="nav-link" aria-current="page" href="signup">Sign-up</a>
                    </li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>





    <!-- Header Section -->
    <header style="margin-top: 110px">
        <div class="container" id="contents">
            <h1>
                <p>Top Products</p>
            </h1>
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

        <!-- Pre-Built Units -->
        <div class="container mt-4">
            <div class="row">
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4>
                            <p>Pre-Built Units</p>
                        </h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 1.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 2.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 3.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 4.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 5.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 6.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>




                <!-- Processor -->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4>
                            <p>Processor</p>
                        </h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/amd 1.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>AMD RYZEN 5</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱46,OOO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 2.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Intel Core i5</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱15,995</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/cpu 3.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Ryzen 5 5OOO</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱8,897</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 4.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Intel Core i5</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱8,6O5</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/cpu 5.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 6.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 1 AMD Radeon RX 7600.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 2 AMD Radeon RX 6600.png"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 3 Gigabyte NVIDIA GeForce RTX 3050.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 4 GeForce GTX 1660 SUPER TUF.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 5 Zotac Gaming GeForce RTX 3050 Twin Edge.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/GPU/GPU 6 MSI AMD Radeon RX 6600.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 1 G.Skill Trident Z5 Neo RGB DDR5-6000.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 2 Patriot Viper Steel DDR4-4400.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 3 Patriot Viper RGB DDR4-3600.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 4 Patriot Viper 4 DDR4-3400.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 5 Corsair Vengeance RGB Pro DDR4-3200.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 6 G.Skill Trident Z Neo DDR4-3600.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 1 Corsair RM750x.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 2 Seasonic Prime Titanium TX-1000.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 3 XPG Pylon 450.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 4 BeQuiet! Pure Power 11 FM 550W.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 5 Corsair AX1600i.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 6 silverstone sx1000 lpt 1000w 80 plus platinum.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
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

        <script>
        document.addEventListener("DOMContentLoaded", function() {
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
            slideContainer.addEventListener("mouseenter", function() {
                clearInterval(intervalId);
            });

            slideContainer.addEventListener("mouseleave", function() {
                intervalId = setInterval(nextSlide, 5000);
            });
        });
        </script>
</body>

</html>