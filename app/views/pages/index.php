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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
            molestias commodi dolor necessitatibus nisi nesciunt velit.
        </p>
        <button><a href="">Signup</a></button>
    </div>
</div>
<!--homeSection ends here -->

<section class="fullContainer" id="aboutSection">
    <div class="container">
        <h2 class="sectionTitle">Join Us</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
            molestias commodi dolor necessitatibus nisi nesciunt velit, ipsam
            animi accusantium, vero fugiat in iusto ipsa facere inventore culpa
            sed. Dignissimos, enim.
        </p>
        <div class="cards">
            <div class="donationBox">
                <div class="title">Register as a Engineer</div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Temporibus, vitae quidem. Laudantium, animi cum saepe hic id in?
                    Quisquam corrupti odit commodi dolor ipsam architecto vitae iusto
                    amet explicabo illo.
                </p>
                <button><a href="<?php echo URLROOT; ?>/Users/engRegister">Register Now</a></button>
            </div>
            <!--donation box ends here-->

            <div class="beneficiaryBox">
                <div class="title">Register As a Construction Company</div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                    officiis nemo quod sed mollitia maxime aliquam dolore voluptas.
                    Dolor commodi voluptates aliquid, earum minima accusantium eos
                    aspernatur ullam aperiam tempora.
                </p>
                <button><a href="<?php echo URLROOT; ?>/Pages/compRegister">Register Now</a></button>
            </div>
            <!--donation box ends here-->

            <div class="eventHosterBox">
                <div class="title">Register as a Supplier</div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga
                    neque expedita itaque alias aliquid cum qui voluptatem tenetur?
                    Expedita enim fuga deserunt molestiae, tenetur molestias eveniet
                    fugit non commodi pariatur!
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
        <h1>Constru+ <span>Signup</span></h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem
            quam voluptatum beatae, est praesentium iure illum, nesciunt ab esse
            nihil consectetur dicta explicabo voluptas soluta eveniet eos eaque,
            vitae cumque?
        </p>
        <button><a href="http://localhost/constru/users/cusregister">Shop With Us</a></button>
    </div>
</section>
<!--donors section ends here-->

<!-- <section class="beneficiaryContainer cover1" id="beneficiarySection">
    <div class="container">
        <h1>Together you can <span>Help Them</span></h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem
            quam voluptatum beatae, est praesentium iure illum, nesciunt ab esse
            nihil consectetur dicta explicabo voluptas soluta eveniet eos eaque,
            vitae cumque?
        </p>
        <button><a href="http://localhost/Donate/users/register">Start with a little</a></button>
    </div>
</section>
<!--beneficiary section ends here-->
<!-- <section class="beventHostersContainer cover2" id="eventHostersSection">
    <div class="container">
        <h1>Together you can <span>Help Them</span></h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem
            quam voluptatum beatae, est praesentium iure illum, nesciunt ab esse
            nihil consectetur dicta explicabo voluptas soluta eveniet eos eaque,
            vitae cumque?
        </p>
        <button>Start with a little</button>
    </div> -->
</section> 
<!-- event hosters section ends here --> 
</body>
</html>