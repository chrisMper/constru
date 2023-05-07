<html>

<head>

  <title>My Orders</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/myorders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 

    <div class="main">
    <a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>
    <div class="registerbox">
      <div class="topnav">
        <a href="myOrders_new.php">New</a>
        <a href="myOrders_ongoing.php">Ongoing</a>
        <a href="myOrders_completed.php">Completed</a>
        <a class="active" href="myOrders_cancelled.php">Cancelled</a>
    </div>

    <div class="listing">
        <form method="post">
          <table>

            <tbody>
            <?php foreach($data['listings'] as $listings) : ?>
            <div class="listing-card">
              <div>
                <img src='<?php echo URLROOT; ?>/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3><?php echo $listings->product; ?></h3></br>
                <h5>Name of client</h5></br>
                <h5>Cancellation by</h5></br>
                <h5>Reason to cancel</h5></br>
                <h5>Date of cancellation</h5></br>

              </div>
              <div>
                <button onclick="document.getElementById('review').style.display='block'; return false;" >Customer review</button>
                </br>
                <p><?php echo $listings->client; ?></p>
                <p>Client</p>
                <p>bk,g k,bjgbhugytcd vytf hvfytfytf hgvf6f</p>
                <p>09.02.2023</p>
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
                  <td><h5>Client review</h5></td>
                  <td>nark gnqkgne rnbedreo kfjgorgj mlvnvv vkee ns sdvw dvwseve</td>
                </tr>
                <!--<tr>
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