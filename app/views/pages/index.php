<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Construplus</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css" />
</head>

<body>
<div class="fullContainer banner" id="homeSection">
    <header>
        <div class="container">
            <div class="logo">
                <img src="<?php echo URLROOT; ?>/img/logo.png" alt="logo" />
            </div>
            <!-- navbar starts here -->
            <nav>
                <ul>
                    <li>
                        <a href="#homeSection">Home</a>
                    </li>
                    <li>
                        <a href="#aboutSection">Join Us</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo URLROOT; ?>/users/register">Register</a>
                    </li> -->
                    <li>
                        <a href="<?php echo URLROOT; ?>/users/login">Login</a>
                    </li>
                </ul>
            </nav>
            <!-- navbar ends here -->
        </div>
    </header>
    <!--header ends here-->

    <div class="container">
        <h1>Constru Plus<span><a href="<?php echo URLROOT; ?>/pages/search">Shop with Us</a></span></h1>
        <p>
        Welcome to our e-commerce website, your one-stop shop for all your construction needs. 
        We offer a vast selection of products, from construction materials and tools to equipment and safety gear, 
        making it easy and convenient for builders and contractors to find everything they need in one place.
        </p>
        <a href="#aboutSection"><button>Signup</button></a>
    </div>
</div>
<!--homeSection ends here -->

<section class="fullContainer" id="aboutSection">
    <div class="container">
        <h2 class="sectionTitle">Join Us</h2>
        <div class="cards">
            <div class="donationBox">
                <div class="title">Register as a Engineer</div>
                <p>
                Are you a professional engineer looking to expand your reach and connect with new clients?
                Our website offers a platform for service providers like you to register and showcase your expertise to potential customers.
                </p>
                <button><a href="<?php echo URLROOT; ?>/Users/engRegister">Register Now</a></button>
            </div>
            <!--donation box ends here-->

            <div class="beneficiaryBox">
                <div class="title">Register As a Construction Company</div>
                <p>
                Are you a construction company looking to grow your business and connect with new clients? 
                Our website provides a platform for service providers like you to register and showcase your company's expertise to potential customers.
                </p>
                <button><a href="<?php echo URLROOT; ?>/Pages/compRegister">Register Now</a></button>
            </div>
            <!--donation box ends here-->

            <div class="eventHosterBox">
                <div class="title">Register as a Supplier</div>
                <p>
                Are you a construction material supplier looking to expand your reach and connect with new customers? 
                Our website provides a platform for service providers like you to register and showcase your products and services to potential clients.
                </p>
                <button><a href="<?php echo URLROOT; ?>/users/register">Register Now</a></button>
            </div>
            <!--donation box ends here-->
        </div>
    </div>
</section>
<!--about section ends here-->

 <section class="donorsContainer cover" id="donorsSection">
    <div class="container">
        <h1>About us</h1>
        <p>We are a team of ambitious second-year undergraduate students at the University of Colombo School of Computing, 
            united by our passion for technology and innovation. With expertise in software development, design, and business strategy, 
            we aim to create impactful solutions that exceed expectations. Our website is the culmination of our efforts to make a difference in the world. 
            We are committed to innovation, excellence, and customer satisfaction, and we look forward to working with you to create impactful solutions together.</p>
    </div>
</section>
<!--donors section ends here-->


</body>
</html>