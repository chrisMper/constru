<html>

<head>

  <title>My Bookings</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/mybookings.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

<div class="main">

<a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>
<div class="registerbox">
  <div class="topnav">
   <a href="myBookings_new.php">New</a>
   <a href="myBookings_ongoing.php">Ongoing</a>
   <a class="active" href="myBookings_completed.php">Completed</a>
   <a href="myBookings_cancelled.php">Cancelled</a>
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
      
           </div>  
           </div> 
    </div>

</body>
</html>