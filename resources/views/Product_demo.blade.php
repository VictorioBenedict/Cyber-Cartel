<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Info</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap");

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      html,
      body {
        font-family: "Roboto", sans-serif;
      }

      img {
        width: 100%;
        display: block;
      }

      .main-wrapper {
        min-height: 65vh;
        background-color: #eeeeee;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        max-width: 1200px;
        padding: 0 1rem;
        margin: 0 auto;
      }

      .product-div {
        margin: 1rem 0;
        padding: 2rem 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        background-color: #ffffff;
        border-radius: 50px;
        column-gap: 10px;
      }

      .product-div-two {
        text-align: center;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(2);
        background-color: #ffffff;
        border-radius: 50px;
        column-gap: 90px;
      }

      .product-div-left {
        padding: 20px;
      }

      .product-div-right {
        padding: 20px;
      }

      .img-container img {
        width: 100%;
        margin: 0 auto;
      }

      .hover-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        margin-top: 32px;
      }

      .hover-container div {
        border: 2px solid rgba(252, 160, 175, 0.7);
        padding: 1rem;
        border-radius: 3px;
        margin: 0 4px 8px 4px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .active {
        border-color: rgb(0, 162, 255) !important;
      }

      .hover-container div:hover {
        border-color: rgb(255, 145, 163);
      }

      .hover-container div img {
        width: 50px;
        cursor: pointer;
      }

      .product-div-right span {
        display: block;
      }

      .product-name {
        font-size: 26px;
        margin-bottom: 22px;
        font-weight: 700;
        letter-spacing: 1px;
        opacity: 0.9;
      }

      .product-price {
        font-weight: 700;
        font-size: 24px;
        opacity: 0.9;
        font-weight: 500;
      }

      .product-rating {
        display: flex;
        align-items: center;
        margin-top: 12px;
      }

      .product-rating span {
        margin-right: 6px;
      }

      .product-description {
        font-weight: 18px;
        line-height: 1.6;
        font-weight: 300;
        opacity: 0.9;
        margin-top: 22px;
      }

      .product-description-one {
        font-weight: 18px;
        line-height: 1.6;
        font-weight: 300;
        opacity: 0.9;
        margin-top: 22px;
      }

      .btn-groups {
        margin-top: 22px;
      }

      .btn-groups button {
        display: inline-block;
        font-size: 16px;
        font-family: inherit;
        text-transform: uppercase;
        padding: 15px 16px;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .btn-groups button .fas {
        margin-right: 8px;
      }

      .add-cart-btn {
        border-radius: 50px;
        background-color: #db1818;
        border: 2px solid #ff0000;
        margin-right: 8px;
      }

      .add-cart-btn:hover {
        background-color: #fff;
        color: #ff0000;
      }

      .buy-now-btn {
        border-radius: 50px;
        background-color: #000;
        border: 2px solid #000;
      }

      .buy-now-btn:hover {
        background-color: #fff;
        color: #000;
      }

      .product-details-box {
        text-align: center;
        margin: auto;
        max-width: 1000px;
        padding: 50px;
        background-color: #ff0000d6;
        border-radius: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      @media screen and (max-width: 992px) {
        .product-div {
          grid-template-columns: 100%;
        }

        .product-div-right {
          text-align: center;
        }

        .product-rating {
          justify-content: center;
        }

        .product-description {
          max-width: 400px;
          margin-right: auto;
          margin-left: auto;
        }
      }

      /* Reviews Section */
      .reviews-section {
        margin-top: 0px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .reviews-section h2 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
      }

      /* Individual Review Comments */
      .review-comment {
        margin-bottom: 20px;
        border-bottom: 1px solid #000000;
        padding-bottom: 15px;
      }

      .user-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }

      .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
      }

      .user-info span {
        font-weight: 600;
      }

      .review-text {
        font-size: 16px;
        line-height: 1.6;
        opacity: 0.9;
      }

      /* Comment Form for New Reviews */
      .comment-form {
        margin-top: 30px;
      }

      .comment-form h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img  src="images/logo.png"  style="width:200px;"></a>
            <li style="margin-left: 5vw;">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 40vw;"> <!-- Adjust the width as needed -->
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </li>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0"> <!-- mx-auto to center the content -->
                    <li class="nav-item" style="margin-left: 7.5px; margin-right:10px">
                        <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                    <li class="nav-item" style="margin-right: 30px;">
                        <a class="nav-link" aria-current="page" href="signup">Sign-up</a>
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
    <div class="main-wrapper" style="margin-top: 50px">
      <div class="container">
        <div class="product-div">
          <div class="product-div-left">
            <div class="img-container">
              <img src="images/sysu 1.jpg" />
            </div>
          </div>
          <div class="product-div-right">
            <span class="product-name">Pc System Unit!Gaming Pc</span>
            <span class="product-price">₱12,500.00 PHP*</span>
            <div class="product-rating">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star-half-alt"></i></span>
              <span>(50 ratings)</span>
            </div>
            <p class="product-description"></p>
            <div class="btn-groups">
              <button type="button" class="add-cart-btn">
                <i class="fas fa-shopping-cart"></i>add to cart
              </button>
              <button type="button" class="buy-now-btn">
                <i class="fas fa-wallet"></i>buy now
              </button>
            </div>
          </div>
        </div>

        <!-- Additional box for details -->
      </div>
    </div>

    <div class="main-wrapper">
        <div class="container">
            <div class="product-div-two" style="text-align: left;"> <!-- Add inline style for text alignment -->
                <div class="product-div-left">
                    <h4>General Specifications</h4>
                    <p class="product-description-one"></p>

                    <p class="product-description-one">
                        Details<br>
                        Condition<br>
                        New<br>
                        Fresh na fresh.<br>
                        Pang YouTube lang ginamit..<br>
                        <br><br>
                        PC Set/Pwedi ring system unit only<br>
                        Syempre may bawas sa sure buyer.<br>
                        I5 4460<br>
                        With glass side panel<br>
                        Can play 99 percent of top 11,000 games.<br>
                        GTA V/Dota 2/ Call of duty Warzone/Vallorant/FARLIGHT and almost all of the games.<br>
                        <br><br>
                        Amd Rx 580 video card/8 gig<br>
                        Mootherboard/Lenovo 4 slot ram<br>
                        Ram/Hyper Fury 8x2=16 Gig Ram<br>
                        Casing/Keyteck<br>
                        PSU/ Ramsta 80 plusWhite600watts<br>
                        Storage/Ramsta 240 Ssd<br>
                        Inplay Fans 3 PCs.<br>
                        AO water cold heatsink inplay<br>
                        Monitor/22inch' Hp<br>
                        Keyboard/mouse.<br>
                        Windows 10 activated.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>




    <div class="main-wrapper">
      <div class="container">
        <!-- ... (existing content) ... -->

        <!-- Reviews Section -->
        <div class="reviews-section">
          <h2>Product Reviews</h2>

          <!-- Individual Review Comments -->
          <div class="review-comment">
            <div class="user-info">
              <img src="meowww.jpg" alt="User Avatar" />
              <span>RRs Shia</span>
            </div>
            <p class="review-text">
              This product is amazing! I love the performance and speed.
              Definitely recommended.
            </p>
          </div>

          <div class="review-comment">
            <div class="user-info">
              <img src="meoww.jpg" alt="User Avatar" />
              <span>Boss Ranhod</span>
            </div>
            <p class="review-text">
              Excellent processor! It exceeded my expectations. Great value for
              the money.
            </p>
          </div>

          <!-- Add more reviews as needed -->

          <!-- Comment Form for New Reviews -->
          <div class="comment-form">
            <h3>Leave a Review</h3>
            <!-- Your comment form HTML goes here (e.g., input fields for name, rating, comment, etc.) -->
          </div>
        </div>
      </div>
    </div>

    <script>
      const allHoverImages = document.querySelectorAll(".hover-container div img");
      const imgContainer = document.querySelector(".img-container");

      window.addEventListener("DOMContentLoaded", () => {
        allHoverImages[0].parentElement.classList.add("active");
      });

      allHoverImages.forEach((image) => {
        image.addEventListener("mouseover", () => {
          imgContainer.querySelector("img").src = image.src;
          resetActiveImg();
          image.parentElement.classList.add("active");
        });
      });

      function resetActiveImg() {
        allHoverImages.forEach((img) => {
          img.parentElement.classList.remove("active");
        });
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
