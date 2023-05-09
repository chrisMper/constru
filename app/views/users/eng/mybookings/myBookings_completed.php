<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/myBookings.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <div class="navbar">
    <div class="navlogo">
      <img src="../../../public/img/product_img/logo.png">
    </div>
    <div class="navright">

      <a href="profile.html" target="supplierDashboard"> <img src="../../../public/img/product_img/profileicon.png"></a>
      <a href="cart.html" target="supplierDashboard"> <img src="../../../public/img/product_img/cart.png"></a>

    </div>
    <div class="navcenter">

      <ul>
        <li>
          <h2><a href="landingpage.html">Home</a></h2>
        </li>
        <li>
          <h2><a href="aboutus.html">About Us</a></h2>
        </li>
        <li>
          <h2>Our Services</h2>

          <div class="servicemenu">
            <ul>
              <li><b><a href="engineer.html">Civil Engineering</a></b></li>
              <li><b><a href="construction.html">Construction</a></b></li>
              <li><b><a href="hardware.html">Hardware Products & Supplies</a></b></li>
              <li><b><a href="tender.html">Tendering</a></b></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

  </div>


  <div class="table-container">
    <div class="sidebar">
      <ul>
        <li><a href="landingpage.html"><img src="../../../public/img/product_img/home2.png">Home</a></li>
        <li><a href="landingpage.html"><img src="../../../public/img/product_img/dashboard.png">Dashboard</a></li>
        <li><a href="landingpage.html"><img src="../../../public/img/product_img/message.png">Messages</a>
        <li><a href="engineer.html"><img src="../../../public/img/product_img/order.png">Orders</a></li>
        <li><a href="construction.html"><img src="../../../public/img/product_img/listings.png">Listings</a></li>
        <li><a href="hardware.html"><img src="../../../public/img/product_img/cart.png">My cart</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/myorder.jpg">My orders</a></li>
        <li><a href="myBookings_ongoing.php"><img src="../../../public/img/product_img/booking-icon.jpg">My bookings</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/statistics.jpg">My statistics</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/tender .png">Tender listings</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/profileicon.png">Profile</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/calender.png">Calender</a></li>
      </ul>
    </div>


    <div class="main">

      <div class="registerbox">
        <div class="topnav">
          <!-- <a href="myBookings_new.php">New</a>-->
          <a href="<?php echo URLROOT; ?>/pages/customerBookingOnGoing">Ongoing</a>
          <a class="active" href="<?php echo URLROOT; ?>/pages/customerBookingComplete">Completed</a>
          <a href="<?php echo URLROOT; ?>/pages/customerBookingOnCancell">Cancelled</a>
        </div>



        <div class="listing">
          <?php foreach ($data['engineerProjectComplete'] as $engineerProjectComplete) : 
            if($engineerProjectComplete->customerEmail==$_SESSION['user_email']):?>
            <form method="post">
              <table>

                <tbody>
                  <div class='listing-card'>
            <?php foreach($data['listings'] as $listings): 
              if($listings->PostId == $engineerProjectComplete->PostId):?> 
                    <div>
                      <img src='<?php echo URLROOT; ?>/img/uploads/<?php echo $listings->Photos; ?>'>
                    </div>
                    <div>
                      <h3><?php echo $listings->Title  ?></h3>
                      <?php endif;
                    endforeach; ?>
                      <h5>Completion Date : <?php echo $engineerProjectComplete->finishDate ?></h5>

                      <div class="content">
                        <div class="progress-container">
                          <?php for($i=1; $engineerProjectComplete->stages>=$i; $i++): ?>
                          <div class="progress" id="progress"></div>
                          <div class="circle active"><?php echo $i ?></div>
                          <?php endfor; ?>
                        </div>

                      </div>
                    </div>
                    <div class="completion">
                      <h5>Total completion</h5>
                      <div class="completion_amount">
                        <h4>100%</h4>
                      </div>
                    </div>
                  </div>

              </table>
            </form>

          <?php endif;
        endforeach; ?>

        </div>
      </div>
    </div>
  </div>
  </div>

</body>

</html>