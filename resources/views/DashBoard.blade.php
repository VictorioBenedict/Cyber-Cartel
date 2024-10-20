<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flavors & Co</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin"
        rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <
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

    html, body {
    font-family: "Spoof Trial Thin", sans-serif;
    display: flex;
    flex-direction: column;
    margin: 0;
    overflow-x: hidden;
    overflow-y: auto; /* Enable vertical scrolling */
    height: 100%;
    scrollbar-width: none;

}

    h4 {
        font-weight: bold;
    }

    h1 {
        font-weight: bold;
    }

    a {
        text-decoration: none;
        font-size: 18px;
        color:inherit;
    }

    main {
        flex: 1;
    }

    footer {
        margin-top: auto;
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
        border: hidden;
    }

    .img-container {
        width: 100%;
        /* Adjust the width as needed */
        box-sizing: border-box;
        flex: 0 0 auto;
        text-align: center;
    }

    .img {
        border-bottom-left-radius: 30px;

    }

    #pics {
        max-width: 100%;
        /* Set max-width to 100% to ensure it doesn't exceed its container */
        height: auto;
        /* Allow the height to adjust proportionally */
        display: block;
        /* Remove any default inline styles that may affect sizing */
        margin: 0 auto;
    }

    .img-container img {
        width: 75vw;
        /* Make images responsive */
        height: 500px;
        /* Set a fixed height for all images */
        object-fit: cover;
        /* Ensure images cover the container without stretching */
        border: 1px solid #ddd;
        display: inline-block;
    }

    .card .card-body {
        border-radius: 0px 0px 30px 30px;
    }

    .card {
        transition: transform 0.1s ease-in-out;
        border-radius: 30px;
    }

    .card:hover {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);

        /* Adjust the scale factor as needed */
    }

    .images {
        width: 10px;
        height: 10px;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }

    .rounded-bottom {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .navbar {
        transition: transform 0.3s ease-out;
    }

    .navbar-hidden {
        transform: translateY(-100%);
    }
    .custom-btn-highlight {
        background-color: #4d9584;
        color: white;
        text-decoration: none;
        /* Remove default link underline */
    }

    .custom-btn-highlight:hover {
        color: white;
        background-color: #4d9584;
    }

    .custom-btn{
        border-color: #937952;
        color: #937952;
    }

    .custom-btn:hover{
        color: white;
        background-color: #4d9584;
    }
    .custom-btn:focus{
        color: white;
        background-color: #4d9584;
    }
   
.bgimg-1 {
  background-image: url('images/bg.jpg');
  min-height: 50%;
  background-attachment: fixed;
  min-width:100px;
}
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layouts.navbar')
    <br>

<br>
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-white w3-xlarge w3-wide w3-animate-opacity">FLAVORS <span class="w3-hide-small">&</span> CO</span>
  </div>
</div>


<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT FLAVORS & CO</h3>
  <p class="w3-center"><em>Ice Cream and Dessert Shop</em></p>
  <p>Flavors & Co is a charming ice cream shop that delights customers with an extensive array of dessert options. Alongside their rich and creamy ice cream, they offer a variety of delectable cupcake desserts that are perfect for satisfying any sweet tooth. To complement these treats, customers can choose from a selection of refreshing iced drinks and cozy hot beverages, each infused with unique and enticing flavors. Whether you're in the mood for a classic scoop of ice cream, a fancy cupcake, or a delicious drink, Flavors & Co has something to fulfill every craving!</p>

    <br>
<br>
    
<div class="w3-row-padding w3-center w3-magin-top" style="background-color:#F7CCD;">
<div class="w3-fourth">
  <a href="/Ice_cream_category" class="w3-card w3-container" style="background-color:#F7CCD; min-height:230px; display: block; text-decoration: none; color: inherit;">
    <h3>Ice Cream</h3><br>
    <i><img src="images/iceicon.png" width="125px" height="125px" style="font-size:75px;"></i><br>
    <p></p>
  </a>
</div>

<br>
<div class="w3-fourth">
  <a href="/Dessert_category" class="w3-card w3-container" style="min-height:230px; display: block; text-decoration: none; color: inherit;">
    <h3>Dessert</h3><br>
    <i><img src="images/cupicon.png" width="125px" height="125px" style="font-size:75px;"></i><br>
    <p></p>
  </a>
</div>
<br>
<div class="w3-fourth">
  <a href="/Hot_Drinks_category" class="w3-card w3-container" style="min-height:230px; display: block; text-decoration: none; color: inherit;">
    <h3>Hot Drinks</h3><br>
    <i><img src="images/coffee.png" width="125px" height="125px" style="font-size:75px;"></i><br>
    <p></p>
  </a>
</div>
<br>
<div class="w3-fourth">
  <a href="/Iced_Drinks_category" class="w3-card w3-container" style="min-height:230px; display: block; text-decoration: none; color: inherit;">
    <h3>Iced Drinks</h3><br>
    <i><img src="images/drinkicon.png" width="125px" height="125px" style="font-size:75px;"></i><br>
    <p></p>
  </a>
</div>
</div>

    <!-- RAM -->
    


    <!-- Footer Section -->
    <footer class="bg-whitetext-light text-center py-3 fixed-bottom"
style="background-color:#FCEFF3"  >
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md text-left ">
                <p class="mb-0"><a href="/terms" class="bx bxs-cart"
                
                        style="text-decoration: none;">Terms and Conditions</a></p>
            </div>
           
            <div class="col-md text-right p1-md-">
                <p class="mb-0"><a href="#"class="text-dark"
                         style="text-decoration: none;">Follow us on Facebook</a></p>
            </div>
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

    // Wait for the DOM to be ready
    $(document).ready(function() {
        var previousScroll = 0;

        // Listen for the scroll event
        $(window).scroll(function() {
            var currentScroll = $(this).scrollTop();

            // Determine the scrolling direction
            var scrollingDown = currentScroll > previousScroll;

            // Check if the user has scrolled past the top
            if (currentScroll > 0) {
                // If scrolling down, hide the navbar; if scrolling up, show the navbar when close to the top
                if (scrollingDown) {
                    $('.navbar').addClass('navbar-hidden');
                } else if (currentScroll < 50) {
                    $('.navbar').removeClass('navbar-hidden');
                }
            }

            previousScroll = currentScroll;
        });
    });
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