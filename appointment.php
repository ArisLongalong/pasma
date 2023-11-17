<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appointment</title>

        <!--SWIPER CSS LINK-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <!--FONT AWESOME CDN LINK -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />"

        <!--CUSTOM CSS FILE LINK-->
        <link rel="stylesheet" href="designs.css">
    </head>
    <body>
    
    <!--HEADER SECTION STARTS-->
    <section class="header">
        <a href="home.php" class="logo"><img src="IMG/LOGO.png"></a>
        
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="services.php">Services</a>
            <a href="about.php">About</a>
            <a href="appointment.php">appointment</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!--HEADER SECTION ENDS-->
    
    <div class="heading" style="background: url(IMG/APPOINTMENT\ GIF\ BACKGROUND.gif) no-repeat;">
        <h1>Appointment</h1>
    </div>

    <!--APPOINTMENT SECTION STARTS-->
    <h1 class="heading-title">Dr. Sarah Mitchell</h1>
    <div class="calendar">
        <div class="header">
            <button id="prevBtn">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class="monthYear" id="monthYear"></div>
            <button id="nextBtn">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="days">
            <div class="day">Mon</div>
            <div class="day">Tue</div>
            <div class="day">Wed</div>
            <div class="day">Thu</div>
            <div class="day">Fri</div>
            <div class="day">Sat</div>
            <div class="day">Sun</div>
        </div>
        <div class="dates" id="dates"></div>
    </div>
    <!--APPOINTMENT SECTION ENDS-->

    <!--FOOTER SECTION STARTS-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="services.html"> <i class="fas fa-angle-right"></i> Services</a>
                <a href="about.html"> <i class="fas fa-angle-right"></i> About</a>
                <a href="career.html"> <i class="fas fa-angle-right"></i> Appointment</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +63 9065619459</a>
                <a href="#"> <i class="fas fa-phone"></i> +63 9295117049</a>
                <a href="#"> <i class="fas fa-envelope"></i> pasmaofficial2023@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> University Of Makati</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fa fa-address-book" aria-hidden="true"></i> Facebook</a>
                <a href="#"> <i class="fa fa-comment" aria-hidden="true"></i> Twitter</a>
                <a href="#"> <i class="fa fa-heart" aria-hidden="true"></i> Instagram</a>
            </div>
        </div>
        <div class="credit">Created by<span> Group 3</span> | ALL RIGHT RESERVED</div>
    </section>
    <!--FOOTER SECTION ENDS-->

    <!--SWIPER JS FILE LINK-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--CUSTOM JS FILE LINK-->
    <script src="script.js"></script>


    </body>
</html>