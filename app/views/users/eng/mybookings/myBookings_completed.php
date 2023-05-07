
<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/myBookings.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="navbar">
      <div class="navlogo">
        <img src="../../../public/img/product_img/logo.png" >
      </div>
      <div class="navright">
        
        <a href="profile.html" target="supplierDashboard"> <img src="../../../public/img/product_img/profileicon.png" ></a>
        <a href="cart.html" target="supplierDashboard"> <img src="../../../public/img/product_img/cart.png"></a>
    
      </div>
      <div class="navcenter">

        <ul>
          <li><h2><a href="landingpage.html">Home</a></h2></li>
          <li><h2><a href="aboutus.html">About Us</a></h2></li>
          <li><h2>Our Services</h2>
          
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
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/home2.png" >Home</a></li>
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/dashboard.png" >Dashboard</a></li>
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/message.png" >Messages</a>
          <li><a href="engineer.html"><img src="../../../public/img/product_img/order.png" >Orders</a></li>
          <li><a href="construction.html"><img src="../../../public/img/product_img/listings.png" >Listings</a></li>
          <li><a href="hardware.html"><img src="../../../public/img/product_img/cart.png" >My cart</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/myorder.jpg" >My orders</a></li>
          <li><a href="myBookings_ongoing.php"><img src="../../../public/img/product_img/booking-icon.jpg" >My bookings</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/statistics.jpg" >My statistics</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/tender .png" >Tender listings</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/profileicon.png" >Profile</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/calender.png" >Calender</a></li> 
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
        <form method="post">
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3>3D modeling</h3>
                <h5>Completion Date : 04.10.2023</h5>
               
                <div class="content">
                  <div class="progress-container">
                    <div class="progress" id="progress"></div>
                    <div class="circle active">1</div>
                    <div class="circle active">2</div>
                    <div class="circle active">3</div>
                    <div class="circle active">4</div>
                  </div>
                  
                </div>
              </div>
              <div class="completion">
                <h5>Total completion</h5>
                <div class="completion_amount"><h4>100%</h4></div>
              </div>
              </div>
            
          </table>
        </form>
        <form method="post">
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3>3D modeling</h3>
                <h5>Completion Date : 04.13.2023</h5>
               
                <div class="content">
                  <div class="progress-container">
                    <div class="progress" id="progress"></div>
                    <div class="circle active">1</div>
                    <div class="circle active">2</div>
                    <div class="circle active">3</div>
                    <div class="circle active">4</div>
                  </div>
                 
                </div>
              </div>
              <div class="completion">
                <h5>Total completion</h5>
                <div class="completion_amount"><h4>100%</h4></div>
              </div>
              
            </div>
          </table>
        </form>
      
           </div>  
           </div> 
    </div>
  </div> 
</div>

</body>
</html>