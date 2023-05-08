<html>

<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/myorders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

<div class="main">
 <div class="registerbox">
  <div class="topnav">
   <a class="active" href="myOrders_new.php">New</a>
   <a href="myOrders_ongoing.php">Ongoing</a>
   <a href="myOrders_completed.php">Completed</a>
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
                <h3><?php echo $listings->product; ?></h3>
              </div>
              <div>
                <!--<button>Contact</button>-->
                <button onclick="document.getElementById('accept').style.display='block'; return false;" >Accept</button>
                <button onclick="document.getElementById('reject').style.display='block'; return false;">Reject</button>
              </div>
            </div>
          </table>
        </form>             
        
              
        <div id="accept" class="popUp" >
         <span onclick="document.getElementById('accept').style.display='none'" class="close" title="Close Modal">&times;</span>
         <form class="acceptContent">
          <table class="acceptTable">
           <tr>
            <td><label for="completionDate">Enter an estimated completion date</label></td>
            <td><input type="date" name="completionDate" id="completionDate"></td>
           </tr>
          </table>
         </form>
         <p><h5>A message will be sent to the client that you have accepted the request on this date.</h5></p>
         <button><a href="myOrders_ongoing.php">Accept</a></button>
        </div>
 
        <script>
       
         var popUp = document.getElementById('accept');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
          if (event.target == popUp) {
          popUp.style.display = "none";
         }
        }
        </script>

       <div id="reject" class="popUp" >
        <span onclick="document.getElementById('reject').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="acceptContent">
         <table class="acceptTable">
          <tr>
            <td><label for="reason">Mention the reason to reject</label></td>
            <td><textarea id="reason" name="reason" rows="4" cols="50"></textarea></td> 
          </tr>
         </table>
        </form>
        <button><a href="myOrders_cancelled.php">Reject</a></button>
      </div>
 
      <script>

        var popUp = document.getElementById('reject');

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