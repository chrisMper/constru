<?php
include("connection.php");
?>

<html>

<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/supplierDashboard.css">
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
      <button type="button" class="addbtn"><a href="addlisting.php">Add New</a></button>
      <div class="listing">
        <form method="post">
          <table>

            <tbody>
              <?php

            $sql = "SELECT * FROM listing";
            $result = $con->query($sql);
            // var_dumsp($result);
            
            if (!$result) {
              die("Invalid query: " . $con->error);
            }


            while ($row = $result->fetch_assoc()) {

              // echo "<tr>";
              // foreach ($row as $key => $value) {
              //   echo "<td>$value</td>";
              // }
              // echo "</tr>";
              echo "<div class='listing-card'>
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3>{$row['product']}</h3>
                <div>
                  <div><label for=''>Price</label><input type='text' value='{$row['price']}' readonly></div>
                  <div><label for=''>Availability</label><input type='text' value='{$row['availability']}' readonly></div>
                  <div><label for=''>Available Quantity</label><input type='text' value='{$row['quantity']}'></div>
                </div>
              </div>
              <div>
                Delivery within
                <br>
                (approx)
              </div>
              <div>
                <button>UPDATE</button>
                <button>DELETE</button>
              </div>
            </div>";

            }
            ?>
          </table>
        </form>
      </div>
    </div>
  </div>


  <!-- <div class="footer">
      
        <div class="footerleft">
            <h5>Sri Lanka| English (US)</h5>
        </div>
        <div class=" footerright">
            <h5>&copy; 2022 Constru+,inc.    Privacy   Terms of Use</h5>
        </div>
      
    </div>  -->

</body>

</html>
