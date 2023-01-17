<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!--swiper css link -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" ">

    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">TravelExpress</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Packages</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->
<div class="heading" style="background: url(images/header-bg-1.png) no-repeat">
    <h1>About us</h1>
</div>
<!-- about section starts -->
<section class="about">
    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>Why choose us?</h3>
        <p>About TravelExpress™
            Founded in 2022 in Dobrich, TravelExpress has grown from a small Bulgarian
            startup to one of the world's leading online travel companies.</p>
        <p>As one of the world's largest travel marketplaces for both established names and entrepreneurs of all sizes,
            TravelExpress enables accommodations around the world to reach a global audience and grow their business.
            No matter where you want to go and what you want to do, TravelExpress will make it easy
            and available 24/7 thanks to the customer service team.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>Top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>Affordable prices</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 Guide service</span>
            </div>
        </div>
    </div>
</section>

<!-- about section ends -->

<!-- reviews section starts -->
<section class="reviews">
    <h1 class="heading-title">Clients Reviews</h1>
    <div class=" swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Here you can find the best trips! I strongly recommend!</p>
                <h3>Nikolai Jivkov</h3>
                <span>Traveler</span>
                <img src="images/pic-1.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>That was awesome! I want again for sure. </p>
                <h3>Izet</h3>
                <span>Traveler</span>
                <img src="images/pic-2.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Thank you TravelExpress for the nice destinations and offers</p>
                <h3>Stilian Asparuhov</h3>
                <span>Traveler</span>
                <img src="images/pic-3.jpg" alt="">
            </div>

        </div>
</section>

<!-- reviews section ends -->


<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Packages</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="ask.php"><i class="fas fa-angle-right"></i>Ask questions</a>
            <a href="operators.php"><i class="fas fa-angle-right"></i>Tour operators</a>
            <a href="privacy.php"><i class="fas fa-angle-right"></i>Privacy policy</a>
            <a href="terms.php"><i class="fas fa-angle-right"></i>Terms of use</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+359 878 455 123</a>
            <a href="#"><i class="fas fa-envelope"></i>velislava@gmail.com</a>
            <a href="#"><i class="fas fa-phone"></i>+359 899 334 237</a>
            <a href="#"><i class="fas fa-envelope"></i>ivailo@gmail.com</a>
            <a href="#"><i class="fas fa-phone"></i>+359 882 788 690</a>
            <a href="#"><i class="fas fa-envelope"></i>kameliq@gmail.com</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i>Twitter</a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
    </div>
    <div class="credit">Created by<span> VIK </span>|ALL RIGHTS RESERVED!</div>
</section>
<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!--custom js file link -->
<script src="script.js"></script>

</body>
</html>
