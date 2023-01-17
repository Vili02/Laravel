<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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

<!-- home section starts -->
<section class="home">
    <div class=" swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>Discover new places</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>Make your tour worthwhile</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section ends -->

<!-- services section starts -->
<section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Adventures</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>Tour guides</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>Camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>Off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>Camping</h3>
        </div>
    </div>
</section>

<!-- services section ends -->

<!-- home about section starts -->
<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>About us</h3>
        <p>TravelExpress,It is the newest and fastest growing innovative agency dedicated to holidays and recreation
            in exotic destinations at affordable prices. Our mission is to make it easier for everyone
            to explore the world by offering good quality and service. TravelExpress offers millions of travelers
            unforgettable experiences, a wide choice of transportation options and amazing places
            to stay both in Bulgaria and beyond its borders.</p>
        <a href="about.php" class="btn">Read more</a>
    </div>
</section>
<!-- home about section ends -->

<!-- home packages section starts -->
<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Plovdiv</h3>
                <p>Plovdiv is the second largest and most important city of the Republic of Bulgaria.</p>
                <p>940 BGN - 3 days</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Veliko Turnovo</h3>
                <p>Veliko Turnovo is the rich cultural and historical heritage and an important tourist center.</p>
                <p>620 BGN - 4 days</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sofia</h3>
                <p>Sofia is the beautiful capital and largest city of the Republic of Bulgaria.</p>
                <p>780 BGN - 2 days</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>
    </div>
</section>
<!-- home packages section ends -->

<!-- home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>Up to 50% off</h3>
        <p>Yes, you noticed correctly, we currently offer you a 50% discount
            on selected destinations, which you can only see in our agency.
            Hurry up to find a place for your next vacantion!</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>

</section>

<!-- home offer section ends -->






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
