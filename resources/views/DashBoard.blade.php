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
            height: 500px; /* Set a fixed height for all images */
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
            <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 15vw;">
                <!-- Desktop Search Bar -->
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 40vw;">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
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
                        <a class="nav-link" aria-current="page" href="/market">Market Place</a>
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
        <div class="container" id="contents">
            <header class="d-flex justify-content-between" style="margin-top: 30px;">
                <h2><i>System Units</i></h2>
                <br>
                <a href="#"><p style="margin-top:15px ">See all</p></a>
            </header>
        </div>
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




                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 30px;">
                        <h2><i>Central Processing Units</i></h2>
                        <br>
                        <a href="#"><p style="margin-top:15px ">See all</p></a>
                    </header>
                </div>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/amd 1.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h3 class="card-subtitle mb-2 mt-2">AMD Ryzen 5 7600</h3>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/cpu 2.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h4 class="card-subtitle mb-2 mt-2">Intel Core i5-12600K</h4>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/cpu 3.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h4 class="card-subtitle mb-2 mt-2">AMD Ryzen 5 5500</h4>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/cpu 4.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h4 class="card-subtitle mb-2 mt-2">Intel Core i5-10400</h4>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/cpu 6.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h4 class="card-subtitle mb-2 mt-2">Intel Core i9-13900K</h4>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/cpu 5.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h4 class="card-subtitle mb-2 mt-2">AMD Ryzen 9 7950X</h4>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/cpu 7.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h3 class="card-subtitle mb-2 mt-2">Intel Core i5-13600K</h3>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

                <article class="col-lg-3 col-md-6 mb-4 mx-auto col-sm-6 col-12">
                    <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark" style="border-radius: 50px;">
                        <div class="card-body text-center" style="background: linear-gradient(to top right, black, rgb(131, 131, 131)); color: rgb(255, 255, 255); border-radius: 50px;"> <!-- Added text-center class for centering content -->
                            <img src="images/cpu 8.jpg" class="card-img-top" alt="Card Image 2" id="pics" style="border-radius: 25px; border: 2px solid white;">
                            <!-- Removed mx-auto class, added display:block and margin for centering -->
                            <h4 class="card-subtitle mb-2 mt-2">AMD Ryzen 7 5700X</h4>
                            <p class="card-text">Full-stack developer.</p>
                            <h5 class="card-subtitle mb-2 mt-2">Price</h5>
                        </div>
                    </div>
                    </a>
                </article>

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
