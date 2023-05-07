<html>

<head>

  <title>navigation1</title>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/mybookings.css">
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
        <li><a href="landingpage.html"><img src="../../../public/img/product_img/message.png">My projects</a>
        <li><a href="engineer.html"><img src="../../../public/img/product_img/order.png">Orders</a></li>
        <li><a href="construction.html"><img src="../../../public/img/product_img/listings.png">Listings</a></li>
        <li><a href="hardware.html"><img src="../../../public/img/product_img/cart.png">My cart</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/myorder.jpg">My orders</a></li>
        <li class="active"><a href="myBookings_ongoing.php"><img src="../../../public/img/product_img/booking-icon.jpg">My bookings</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/statistics.jpg">My statistics</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/tender .png">Tender listings</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/profileicon.png">Profile</a></li>
        <li><a href="tender.html"><img src="../../../public/img/product_img/calender.png">Calender</a></li>
      </ul>
    </div>

    <div class="main">
      <div class="registerbox">
        <div class="topnav">
          <!--<a href="myBookings_new.php">New</a>-->
          <a class="active" href="<?php echo URLROOT; ?>/pages/customerBookingOnGoing">Ongoing</a>
          <a href="<?php echo URLROOT; ?>/pages/customerBookingComplete">Completed</a>
          <a href="<?php echo URLROOT; ?>/pages/customerBookingOnCancell">Cancelled</a>
        </div>



        <div class="listing">

          <?php foreach ($data['engineerProjectOngoing'] as $engineerProjectOngoing) :
            if ($engineerProjectOngoing->customerEmail == $_SESSION['user_email']) : ?>
              <form method="post">
                <table>

                  <tbody>
                    <div class='listing-card'>


                      <?php foreach ($data['listings'] as $listing) :
                        if ($listing->PostId == $engineerProjectOngoing->postId) : ?>

                          <div>
                            <img src='<?php echo URLROOT; ?>/img/uploads/<?php echo $listing->Photos; ?>'>
                          </div>
                          <div>

                            <h3><?php echo $listing->Title ?></h3>
                            <h5>Completion Date : <?php echo $engineerProjectOngoing->dueDate ?></h5>
                        <?php endif;
                      endforeach; ?>


                        <?php foreach ($data['serviceProvider'] as $serviceProvider) :
                          if ($serviceProvider->email == $engineerProjectOngoing->engeneerEmail) : ?>

                            <h5>Engineer Name : <?php echo $serviceProvider->fName . ' ' . $serviceProvider->lName ?></h5>
                        <?php endif;
                        endforeach; ?>

                        <div class="content">
                          <div class="progress-container">

                            <div class="progress" id="progress"></div>
                            <?php for ($i = 1; $i <= $engineerProjectOngoing->stages; $i++) { ?>
                              <?php if ($i <= $engineerProjectOngoing->currentStage) { ?>

                                <div class="circle active"><?php echo $i; ?></div>


                              <?php } elseif ($i == $engineerProjectOngoing->currentStage + 1 && $engineerProjectOngoing->stageComfomation == 0) { ?>
                                <div class="circle intermerdiate"><?php echo $i; ?></div>
                              <?php } else { ?>
                                <div class="circle "><?php echo $i; ?></div>

                            <?php }
                            }  ?>

                          </div>

                        </div>
                          </div>
                          <div class="completion">
                            <h5>Total completion</h5>
                            <div class="completion_amount">
                              <h4><?php echo round(($engineerProjectOngoing->currentStage / $engineerProjectOngoing->stages) * 100, 2) ?>%</h4>
                            </div>
                          </div>

                          <div>
                          <?php if ($engineerProjectOngoing->cancellComfomation != 0 ) { 
                             if ($engineerProjectOngoing->stageComfomation == 0 && $engineerProjectOngoing->currentStage != $engineerProjectOngoing->stages - 1) { ?>
                              <button type="button" onclick="completeFunction(<?php echo $engineerProjectOngoing->projectId ?>).style.display='block';">Confirm stage completion</button>
                            <?php } ?>

                            <?php if ($engineerProjectOngoing->stageComfomation == 0 && $engineerProjectOngoing->currentStage == $engineerProjectOngoing->stages - 1) { ?>
                              <button type="button" onclick="completeProjectFunction(<?php echo $engineerProjectOngoing->projectId ?>).style.display='block';">Confirm completion</button>
                            <?php } }?>

                            <?php if ($engineerProjectOngoing->cancellComfomation == 0 ) { ?>
                              <button type="button" >Confirm Cancelation</button>
                            <?php } ?>


                            <?php if ($engineerProjectOngoing->cancellComfomation != 0 ) { ?>
                              <button type="button" onclick="cancelFunction(<?php echo $engineerProjectOngoing->projectId ?>).style.display='block';">Cancel</button>
                            <?php } ?>
                            
                          </div>
                    </div>
                </table>
              </form>

          <?php endif;
          endforeach; ?>






          <div id="complete" class="popUp">
            <span onclick="document.getElementById('complete').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent" action="<?php echo URLROOT; ?>/engBookings/cusProjectStagConformation" method="POST">
              <table class="acceptTable">
                <tr>
                  <td>Congratulations !!</td>
                </tr>
                <tr>
                  <td>
                    <input type="text" id="projectId" name="projectId" hidden >
                    <h5>You have completed another stage</h5>
                  </td>
                </tr>
              </table>
              <button type="submit" id="confirm"> Confirm</button>
            </form>

          </div>

          
          <script>
            var popUp = document.getElementById('complete');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == popUp) {
                popUp.style.display = "none";
              }
            }


            const completeFun = document.getElementById('complete')

            function completeFunction(projectId) {

              completeFun.style.display = 'block';
              document.getElementById('projectId').value = projectId;

            }
          </script>


          <div id="completeProject" class="popUp">
            <span onclick="document.getElementById('completeProject').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent" action="<?php echo URLROOT; ?>/engBookings/cusProjectConformation" method="POST">
              <table class="acceptTable">
                <tr>
                  <td>Congratulations !!</td>
                </tr>
                <tr>
                  <td>
                    <input type="text" id="pId" name="projectId" hidden >
                    <h5>Your Project Completed</h5>
                  </td>
                </tr>
              </table>
              <button type="submit" id="confirm"> Confirm</button>
            </form>

          </div>






          <script>
            var popUp = document.getElementById('completeProject');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == popUp) {
                popUp.style.display = "none";
              }
            }


            const completeProjectFun = document.getElementById('completeProject')

            function completeProjectFunction(pId) {

              completeProjectFun.style.display = 'block';
              document.getElementById('pId').value = pId;

            }
          </script>

          <div id="cancel" class="popUp">
            <span onclick="document.getElementById('cancel').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent" action="<?php echo URLROOT; ?>/engBookings/engProjectCancellConformation" method="POST">
              <table class="acceptTable">
                <tr>
                  <td><label for="reason">Mention the reasons to cancel</label></td>
                  <td><textarea id="reason" name="reason" rows="4" cols="50" required></textarea></td>
                </tr>
              </table>

              <input type="text" id="Id" name="projectId" hidden>
              <p>
              <h5>A message will be sent to the service provider on the cancellation. Until the acceptence of the service provider, the cancellation will not be valid.</h5>
              </p>
              <button type="submit">Confirm </button>
            </form>
          </div>

          <script>
            var popUp = document.getElementById('cancel');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == popUp) {
                popUp.style.display = "none";
              }
            }

            const cancellFun = document.getElementById('cancel')

            function cancelFunction(Id) {
              cancellFun.style.display = 'block';
              document.getElementById('Id').value = Id;



            }
          </script>






        </div>
      </div>
    </div>
  </div>

</body>

</html>