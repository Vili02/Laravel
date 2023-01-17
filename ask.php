<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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

<!-- booking section starts-->
<section class="ask">
    <h1 class="heading-title">Ask questions!</h1>
    <p>Customer Service Department. We are available 24/7.</p>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name.." name="name">
            </div>

            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="Enter your email.." name="email">
            </div>

            <div class="inputBox">
                <span>Phone number:</span>
                <input type="number" placeholder="Enter your phone number.." name="number">
            </div>

            <div class="inputBox">
                <span>Write your question:</span>
                <input type="text" placeholder="Enter your question.." name="question">

            </div>

            <input type="submit" value="submit" class="btn" name="Send"
    </form>
</section>

<!-- booking section ends-->





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
