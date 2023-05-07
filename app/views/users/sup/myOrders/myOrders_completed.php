
<html>

<head>

  <title>my orders- Constru+</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/myorders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 

    <div class="main">
    <div class="registerbox">
      <div class="topnav">
        <a href="myOrders_new.php">New</a>
        <a href="myOrders_ongoing.php">Ongoing</a>
        <a class="active" href="myOrders_completed.php">Completed</a>
        <a href="myOrders_cancelled.php">Cancelled</a>
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
                <h5>Date of completion</h5>
              </div>
              <div>
                <button onclick="document.getElementById('view').style.display='block'; return false;" >View customer review</button>
                </br>
                <p><?php echo $listings->client; ?></p>
                <p><?php echo $listings->completed_date; ?></p>
              </div>
            </div>
          </table>
        </form>


        <div id="view" class="popUp_review" >
            <span onclick="document.getElementById('view').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent">
              <table class="acceptTable">
                <tr>
                  <td><h2><?php echo $listings->client; ?></h2></td>
                </tr>
                <tr>
                  <td><h5>Completion date</h5></td>
                  <td><?php echo $listings->completed_date; ?></td>
                </tr>
                <tr>
                  <td><h5>Progress when service ended</h5></td>
                  <td><?php echo $listings->progress; ?></td>
                </tr>
                <tr>
                  <td><h5>Client review</h5></td>
                  <td><?php echo $listings->client_review; ?></td>
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
        </script>

    </div>
    </div> 
  </div>
 
</body>
</html>