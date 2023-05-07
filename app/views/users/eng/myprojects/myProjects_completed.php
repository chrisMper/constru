
<html>

<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/mybookings.css">
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
          <li class="active"><a href="myProjects_new.php"><img src="../../../public/img/product_img/calender.png" >My Projects</a></li> 
        </ul>
      </div>
 

    <div class="main">
    <div class="registerbox">
      <div class="topnav">
        <a href="<?php echo URLROOT; ?>/pages/myProjectsNew">New</a>
        <a href="<?php echo URLROOT; ?>/pages/myProjectsOnGoing">Ongoing</a>
        <a class="active" href="<?php echo URLROOT; ?>/pages/myProjectsCompleted">Completed</a>
        <a href="<?php echo URLROOT; ?>/pages/myProjectsCancelled">Cancelled</a>
    </div>

    <div class="listing">

    <?php foreach ($data['engineerProjectComplete'] as $engineerProjectComplete) :
            if ($engineerProjectComplete->serviceProviderEmail == $_SESSION['user_email']) : ?>
        <form method="post">
          <table>
            <tbody>
            <div class='listing-card' style="background: #ddd">
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <?php foreach($data['listings'] as $listings): 
                if($engineerProjectComplete->PostId == $listings->PostId): ?>
              <div>
                <h3><?php echo $listings->Title ?></h3></br>

                <?php endif; 
                endforeach; ?>
                
                <h5>Name of client</h5></br>
                
                <h5>Date of completion</h5>
              </div>
              <div>
                <button onclick="document.getElementById('view').style.display='block'; return false;" >View customer review</button>
                </br>
                <?php foreach($data['serviceProvider'] as $serviceProvider): 
                if($serviceProvider->email  == $engineerProjectComplete->customerEmail): ?>
                <p><?php echo $serviceProvider->fName . ' '. $serviceProvider->lName ?></p>
                <?php endif; 
                endforeach; ?>
                <p><?php echo $engineerProjectComplete->finishDate ?></p>
              </div>
            </div>
          </table>
        </form>
        <?php endif;
        endforeach; ?>


        <div id="view" class="popUp_review" >
            <span onclick="document.getElementById('view').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent">
              <table class="acceptTable">
                <tr>
                  <td><h2>Client 10</h2></td>
                </tr>
                <tr>
                  <td><h5>Completion date</h5></td>
                  <td>10.02.2023</td>
                </tr>
                <tr>
                  <td><h5>Progress when service ended</h5></td>
                  <td>100%</td>
                </tr>
                <tr>
                  <td><h5>Client review</h5></td>
                  <td>nark gnqkgne rnbedreo kfjgorgj mlvnvv vkee ns sdvw dvwseve</td>
                </tr>
               <!-- <tr>
                  <td><h5>Rate service provider</h5></td>
                </tr>
                <tr>
                  <td><div><h5>Punctuality</h5></div></td>
                  <td><div><h5>Service completion</h5></div></td>
                  <td><div><h5>Friendliness</h5></div></td>
                </tr>-->

              </table>
           </form>
           <button onclick="location.reload();">Back</button>
         </div>
 
       <script>
      
         var popUp_review = document.getElementById('view');
         

       // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
          if (event.target == popUp_review) {
            popUp_review.style.display = "none";
         }
         }

         const viewFun = document.getElementById('view')

            function viewFunction(clientName,completionDate,review) {

              viewFun.style.display = 'block';
              document.getElementById('clientName').value = clientName;
              document.getElementById('completionDate').value = completionDate;
              document.getElementById('review').value = review;
            }

        </script>

    </div>
    </div> 
  </div>
 
</body>
</html>