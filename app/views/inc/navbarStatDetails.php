 <!--navigation bar-->
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">
     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navbar.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/kusSearchNavSide.css" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/search.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/cv.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/portfolio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="C:\xampp\htdocs\constru\fontawesome-free-6.3.0-web/css/font-awesome.min.css">

<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css"> -->
     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/search.css">
     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/cv.css">
     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/portfolio.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <title><?php echo SITENAME; ?></title>
 </head>

 <body>
     <div class="sidebar active">

         <ul class="nav-links">
             <li>
                 <a href="<?php echo URLROOT; ?>/pages/indexLogged" class="active">
                     <i class='bx bx-home'></i>
                     <span class="links_name">Home</span>
                 </a>
             </li>
             <li>
                 <a href="<?php echo URLROOT; ?>/users/dashboard">
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
                 <a href="<?php echo URLROOT; ?>/listings/listings">
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
                 <a href="<?php echo URLROOT; ?>/listings/stats">
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
                 <a href="<?php echo URLROOT; ?>/users/profile">
                     <i class='bx bx-user'></i>
                     <span class="links_name">Profile</span>
                 </a>
             </li>

             <li class="log_out">
                 <a href="<?php echo URLROOT; ?>/users/logout">
                     <i class='bx bx-log-out'></i>
                     <span class="links_name">Log out</span>
                 </a>
             </li>
         </ul>
     </div>
     