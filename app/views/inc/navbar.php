 <!--navigation bar-->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navbar.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <title><?php echo SITENAME; ?></title>
</head>
<body> 
<div class="sidebar active">
        <div class="logo-details">
            <img id="logoimg" src="<?php echo URLROOT; ?>/img/logo.png">
            <!-- <span class="logo_name">Constru Plus</span> -->
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message-detail'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-news'></i>
                    <span class="links_name">Projects</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">My listings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-detail'></i>
                    <span class="links_name">My Orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-repost'></i>
                    <span class="links_name">My bookings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-bar-chart'></i>
                    <span class="links_name">My Statistics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book'></i>
                    <span class="links_name">Company portfolio</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-calendar'></i>
                    <span class="links_name">Calender</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                
            </div>
           <div class="top">
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Our Services </li>
                
            </ul>
           </div>
            <div class="profile-details">
                
                <span class="admin_name"></span>
                <i class='bx bx-bell'></i>
                <span class="admin_name"></span>
                <i class='bx bx-cart'></i>
                <span class="admin_name"></span>
                <i class='bx bx-user'></i>
            </div>
        </nav> 
    </section>
