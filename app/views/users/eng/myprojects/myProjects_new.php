<html>

<head>

  <title>navigation1</title>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/myProjects.css">
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
        <li class="active"><a href="myProjects_new.php"><img src="../../../public/img/product_img/calender.png">My projects</a></li>
      </ul>
    </div>


    <div class="main">
      <div class="registerbox">
        <div class="topnav">
          <a class="active" href="<?php echo URLROOT; ?>/pages/myProjectsNew">New</a>
          <a href="<?php echo URLROOT; ?>/pages/myProjectsOnGoing">Ongoing</a>
          <a href="<?php echo URLROOT; ?>/pages/myProjectsCompleted">Completed</a>
          <a href="<?php echo URLROOT; ?>/pages/myProjectsCancelled">Cancelled</a>
        </div>



        <div class="listing">

          <table>
            <!-- 
            <tbody>
            <div class='listing-card' style="background: #ddd">
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3>Structured Analysis and Design</h3>
              </div>
              <div> -->
            <!--<button>Contact</button>-->
            <!-- <button onclick="document.getElementById('accept').style.display='block'; return false;" >Accept</button>
                <button onclick="document.getElementById('reject').style.display='block'; return false;">Reject</button>
              </div>
            </div>

          </table> -->
            <?php foreach ($data['engProjectPendig'] as $projectPendig) :
              if ($projectPendig->engineerEmail == $_SESSION['user_email']) : ?>
                <table>
                  <tbody>
                    <form method="POST">
                      <div class='listing-card' style="background: #ddd">
                        <div>
                          <img src='../../../public/img/product_img/product_placeholder.png'>
                        </div>
                        <div>
                          <h3>Structured Analysis and Design</h3>
                        </div>
                        <div>
                          <input type="text" name="engEmail" value="<?php echo $projectPendig->engineerEmail ?>" id="engEmail" hidden>
                          <input type="text" name="postId" value="<?php echo $projectPendig->PostId ?>" id="postId" hidden>
                          <input type="text" name="customerEmail" value="<?php echo $projectPendig->customerEmail ?>" id="customerEmail" hidden>
                          <input type="text" name="projectId" value="<?php echo $projectPendig->projectId ?>" id="projectId" hidden>

                          <button>Contact</button>
                          <input type="submit" value="Accept" formaction="<?php echo URLROOT; ?>/engBookings/projectsPendingToOngoing">
                          <input type="submit" value="Reject" formaction="<?php echo URLROOT; ?>/engBookings/projectsPendingToCancell">
                          
                        </div>
                      </div>
                    </form>
                </table>
            <?php endif;
            endforeach; ?>



            <!-- <div id="accept" class="popUp" >
         <span onclick="document.getElementById('accept').style.display='none'" class="close" title="Close Modal">&times;</span>
         <form method="POST" action="<?php echo URLROOT; ?>engBookings/engBookingOnGoing" class="acceptContent">
          <table class="acceptTable">
           <tr>

           
            <input type="text" name="engEmail" value="<?php $projectPendig->engineerEmail ?>" hidden>
            <input type="text" name="postId" value="<?php $projectPendig->PostId ?>" hidden>
            <input type="text" name="customerEmail" value="<?php $projectPendig->customerEmail ?>" hidden>

            <td><label for="completionDate">Enter an estimated stages </label></td>
            <td><input type="number" name="noOfStages" ></td>

            </tr>
            <tr>
            <td><label for="startDate">Enter an start date</label></td>
            <td><input type="date" name="startDate" id="completionDate"></td>

            <td><label for="completionDate">Enter an estimated completion date</label></td>
            <td><input type="date" name="completionDate" id="completionDate"></td>
            </tr>
          </table>
         
         <p><h5>A message will be sent to the client that you have accepted the request on this date.</h5></p>
         <button type="submit">Accept</button>
        </div>
        </form>
        <script>
       
         var popUp = document.getElementById('accept');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
          if (event.target == popUp) {
          popUp.style.display = "none";
         }
        } -->
            <!-- </script> -->






            <!-- <div id="reject" class="popUp" >
        <span onclick="document.getElementById('reject').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="acceptContent">
         <table class="acceptTable">
          <tr>
            <td><label for="reason">Mention the reason to reject</label></td>
            <td><textarea id="reason" name="reason" rows="4" cols="50"></textarea></td> 
          </tr>
         </table>
        </form>
        <button><a href="myProjects_cancelled.php">Reject</a></button>
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
  </div> -->
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>