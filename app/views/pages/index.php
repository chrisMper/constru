<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navbar_.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <title><?php echo SITENAME; ?></title>
</head>
<body> 
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
                <li><a href="<?php echo URLROOT;?>/pages/register">Register</a></li>
                <li><a href="<?php echo URLROOT;?>/pages/login">Login</a></li>
                
            </ul>
           </div>
            <div class="profile-details">
                
                <span class="admin_name"></span>
                <i class='bx bx-bell'></i>
                <span class="admin_name"></span>
                <i class='bx bx-cart'></i>
                <!-- <span class="admin_name"></span>
                <i class='bx bx-user'></i> -->
            </div>
        </nav> 
</section>
<section class="main">
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src="<?php echo URLROOT; ?>/img/land1.png" style="width:100%; height: 400px;">
      <!-- <div class="text">Caption Text</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="<?php echo URLROOT; ?>/img/land2.png" style="width:100%; height: 400px;">
      <!-- <div class="text">Caption Two</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="<?php echo URLROOT; ?>/img/land3.png" style="width:100%; height: 400px;">
      <!-- <div class="text">Caption Three</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src="<?php echo URLROOT; ?>/img/land4.png" style="width:100%; height: 400px;">
      <!-- <div class="text">Caption Three</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 5</div>
      <img src="<?php echo URLROOT; ?>/img/joinus.png" style="width:100%; height: 400px;">
      <!-- <div class="text">Caption Three</div> -->
    </div>

  </div>
  <br>

  <div class="dots">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <div class="servicegrid">
  <div class="grid-item">
    <div class="card">
      <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
      <div class="container">
        <h4><b>Engineers</b></h4>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="card">
      <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
      <div class="container">
        <h4><b>Construction Companies</b></h4>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="card">
      <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
      <div class="container">
        <h4><b>Goods Suppliers</b></h4>
      </div>
    </div>
  </div>
  </div>
</section>


<?php require APPROOT . '/views/inc/footer.php'; ?>