<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){  
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PASMA</title>

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
    <!--HEADER SECTIONS ENDS-->
    
    <!--HOME SECTION STARTS-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide slide" style="background: url(IMG/homepage\ 1.jpg) no-repeat">
                    <div class="content">
                        <span>P A S + M A</span>
                        <h3>Welcome to our medical hub, where knowledge meets care.</h3>                 
                    </div>
                </div>
                
                <div class="swiper-slide slide" style="background: url(IMG/homepage\ 2.jpg) no-repeat">
                    <div class="content">
                        <span>P A S + M A</span>
                        <h3>Explore a world of trusted health information, expert guidance, and community support.</h3>                
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(IMG/homepage\ 3.jpg) no-repeat">
                    <div class="content">
                        <span>P A S + M A</span>
                        <h3>Your journey to wellness begins here.</h3>                   
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--HOME SECTIONS ENDS-->

    <!--HOME SERVICES SECTION STARTS-->
    <section class="home-services">
        <h1 class="heading-title"> Services </h1>
        <div class="box-container">
            
            <div class="box">
                <img src="IMG/consultation.png" alt="">
                <h3>CONSULTATION</h3>
            </div>

        </div>
        <div class="load-more"><a href="services.php" class="btn">Details</a></div>
    </section>
    <!--HOME SERVICES SECTION ENDS-->

    <!--HOME ABOUT SECTION STARTS-->
    <section class="home-about">
        <div class="image">
            <img src="IMG/about.png" alt="">
        </div>

        <div class="content">
            <h3>ABOUT US</h3>
            <p>Your Pathway to Healthier Living. It's not just an app, it's a lifestyle.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!--HOME ABOUT SECTION ENDS-->

    <!--HOME APPOINTMENT STARTS-->
    <section class="home-appointment">
        <h1 class="heading-title">APPOINTMENTS</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="IMG/doctor 1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dr. Sarah Mitchell</h3>
                    <p>Dr. Sarah Mitchell is dedicated to providing comprehensive and compassionate care to her patients. She believes in a patient-centered approach, focusing on open communication and shared decision-making.</p>
                    <div class="load-more"><a href="appointment.php" class="btn">Book Appointment</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--HOME APPOINTMENT ENDS-->

    <!--FOOTER SECTION STARTS-->
    <section class="footer">
        <div class="box-container">
            
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="services.php"> <i class="fas fa-angle-right"></i> Services</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="career.php"> <i class="fas fa-angle-right"></i> Appointment</a>
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
    </php>