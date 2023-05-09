<html>

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

      <div class="topnav">
        <!--<a href="myBookings_new.php">New</a>-->
        <a href="<?php echo URLROOT; ?>/pages/customerBookingOnGoing">Ongoing</a>
        <a href="<?php echo URLROOT; ?>/pages/customerBookingComplete">Completed</a>
        <a class="active" href="<?php echo URLROOT; ?>/pages/customerBookingOnCancell">Cancelled</a>
      </div>

      <div class="listing">

        <?php foreach ($data['engineerProjectCancell'] as $engineerProjectCancell) :
          if ($engineerProjectCancell->customerEmail == $_SESSION['user_email']) : ?>
            <form method="post">
              <table>
                <tbody>
                  <div class='listing-card'>
                    

                    <div>
                      <img src='./product_img/product_placeholder.png'>
                    </div>
                    <div>
                      <h3>Structured Analysis and Design</h3>
                      <div class="content">
                    
                      <div class="progress-container">
                          <div class="progress" id="progress"></div>
                          <div class="circle active">1</div>
                          <div class="circle">2</div>
                          <div class="circle">3</div>
                          <div class="circle">4</div>
                        </div>

                      </div>
                      <h5><b>Cancelled by you</b></h5>
                    </div>
                    <div class="completion">
                      <h5>Total completion</h5>
                      <div class="completion_amount">
                        <h4>10%</h4>
                      </div>

                      <button onclick="document.getElementById('review').style.display='block'; return false;">View reason</button>
                    </div>
                  </div>
              </table>
            </form>

        <?php endif;
        endforeach; ?>

        <div id="review" class="popUp">
          <span onclick="document.getElementById('review').style.display='none'" class="close" title="Close Modal">&times;</span>
          <form class="acceptContent">
            <table class="acceptTable">
              <tr>
                <td>Client 10 </td>
              </tr>
              <tr>
                <td>
                  <h5>Completion date</h5>
                </td>
                <td>10.02.2023</td>
              </tr>
              <tr>
                <td>
                  <h5>Progress when service ended</h5>
                </td>
                <td>10%</td>
              </tr>
              <tr>
                <td>
                  <h5>Your statement</h5>
                </td>
                <td>nark gnqkgne rnbedreo kfjgorgj mlvnvv vkee ns sdvw dvwseve</td>
              </tr>
              <tr>
                <td>
                  <h5>Service provider's statement</h5>
                </td>
                <td>nark gnqkgne rnbedreo kfjgorgj mlvnvv vkee ns sdvw dvwseve</td>
              </tr>


            </table>
          </form>
          <button onclick="location.reload();">Back</button>
        </div>

        <script>
          var popUp = document.getElementById('review');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == popUp) {
              popUp.style.display = "none";
            }
          }
        </script>

      </div>
    </div>
  </div>

</body>

</html>