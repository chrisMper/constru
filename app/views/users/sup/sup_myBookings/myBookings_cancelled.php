<html>

<head>

  <title>My Bookings</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/mybookings.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

    <div class="main">

      <div class="topnav">
        <a href="myBookings_new.php">New</a>
        <a href="myBookings_ongoing.php">Ongoing</a>
        <a href="myBookings_completed.php">Completed</a>
        <a class="active" href="myBookings_cancelled.php">Cancelled</a>
      </div>

     <div class="listing">
        <form method="post">
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='<?php echo URLROOT; ?>/img/uploads/<?php echo $data['profile']->uploads; ?>'  alt='<?php echo URLROOT; ?>/img/uploads/profile.jpg'> 
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
                <div class="completion_amount"><h4>10%</h4></div>
              
                <button onclick="document.getElementById('review').style.display='block'; return false;" >View reason</button>
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
                <div class="completion_amount"><h4>20%</h4></div>
              
                <button onclick="document.getElementById('review').style.display='block'; return false;" >View reason</button>
              </div>
            </div>
          </table>
        </form>

        <div id="review" class="popUp" >
            <span onclick="document.getElementById('review').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent">
              <table class="acceptTable">
                <tr>
                  <td>Client 10 </td>
                </tr>
                <tr>
                  <td><h5>Completion date</h5></td>
                  <td>10.02.2023</td>
                </tr>
                <tr>
                   <td><h5>Progress when service ended</h5></td>
                   <td>10%</td>
                </tr>
                <tr>
                  <td><h5>Your statement</h5></td>
                  <td>nark gnqkgne rnbedreo kfjgorgj mlvnvv vkee ns sdvw dvwseve</td>
                </tr>
                <tr>
                  <td><h5>Service provider's statement</h5></td>
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
 
</body>
</html>