<?php
	session_start();
	include("connection.php");
?>

<html>

<head>

  <title>Join requests</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/join_requests.css">
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
          <li>
          <button class="dropbtn">
            <h2>Our Services</h2>
          </button>
            <div class="servicemenu">
              <a href="engineer.html">Civil Engineering</a></br>
              <a href="construction.html">Construction</a></br>
              <a href="hardware.html">Hardware Products & Supplies</a></br>
              <a href="tender.html">Tendering</a>
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
          <li class="active" ><a href="join_requests.php"><img src="../../../public/img/product_img/message.png" >Join requests</a>
          <li><a href="engineer.html"><img src="../../../public/img/product_img/order.png" >Complaints</a></li>
          <li><a href="construction.html"><img src="../../../public/img/product_img/listings.png" >Service providers</a></li>
          <li><a href="hardware.html"><img src="../../../public/img/product_img/cart.png" >Admins</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/myorder.jpg" >Profile</a></li>
          <li><a href="myBookings_ongoing.php"><img src="../../../public/img/product_img/booking-icon.jpg" >My statistics</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/statistics.jpg" >Calender</a></li>
        </ul>
      </div>
    </div>

    <div class="main">
        <h2>Join Requests</h2>
    
 <div class="registerbox">
    
  <form method="post">
    <table>

      <tbody>
  <?php
    $sql = "SELECT * FROM supplier";
    $result = $con->query($sql);

    if (!$result) {
      echo "<div>Error: " . $con->error . "</div>";
    } else {
      while ($row = $result->fetch_assoc()) {
        echo "<div class='listing-card'>
              <div><strong>Role:</strong> " . $row['role'] . "</div><div></div></br>
              <div><strong>Country:</strong> " . $row['country'] . "</div>
              <div><strong>District:</strong> " . $row['district'] . "</div>
              <div><strong>Address:</strong> " . $row['address'] . "</div>
              <div><strong>Full name:</strong> " . $row['fname'] . " " . $row['lname'] . "</div>
              <div><strong>Email:</strong> " . $row['email'] . "</div>
              <div><strong>Tele No:</strong> " . $row['tele'] . "</div>
              <div><strong>Academic transcript:</strong> " . $row['transcript'] . "</div></br>
              <div><button class='reject-button'>Reject</button> <button class='accept-button'>Accept</button></div>
              </div>";
      }
    }
  ?>
 <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    jQuery(document).ready(function($) {
    $('.reject-button').click(function() {
      $(this).closest('.listing-card').hide();
    });
    $('.accept-button').click(function() {
      $(this).closest('.listing-card').hide();
    });
  });
</script>-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  jQuery(document).ready(function($) {
    $('.reject-button').click(function() {
      var card = $(this).closest('.listing-card');
      var id = card.data('id');

      var xhr = new XMLHttpRequest();
      xhr.open('DELETE', '/listing/' + id, true);
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          card.hide();
        }
      };
      xhr.send();
    });

    $('.accept-button').click(function() {
      $(this).closest('.listing-card').hide();
    });
  });
</script>

   </table>
  </form>
 </div>
 </div>
</body>
</html>