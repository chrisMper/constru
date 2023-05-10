<html>

<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/mybookings.css">
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
        <li class="active"><a href="tender.html"><img src="../../../public/img/product_img/calender.png">My projects</a></li>
      </ul>
    </div>


    <div class="main">
      <div class="registerbox">
        <div class="topnav">
          <a href="<?php echo URLROOT; ?>/pages/myProjectsNew">New</a>
          <a href="<?php echo URLROOT; ?>/pages/myProjectsOnGoing">Ongoing</a>
          <a href="<?php echo URLROOT; ?>/pages/myProjectsCompleted">Completed</a>
          <a class="active" href="<?php echo URLROOT; ?>/pages/myProjectsCancelled">Cancelled</a>
        </div>

        <div class="listing">

          <?php foreach ($data['engineerProjectCancell'] as $engineerProjectCancell) :
            if ($engineerProjectCancell->engineerEmail == $_SESSION['user_email']) : ?>

              <form method="post">
                <table>

                  <tbody>
                    <div class='listing-card' style="background: #ddd">


                      <?php foreach ($data['listings'] as $listing) :
                        if ($listing->PostId == $engineerProjectCancell->PostId) : ?>
                          <div>
                            <img src='<?php echo URLROOT; ?>/img/uploads/<?php echo $listing->Photos; ?>'>
                          </div>
                          <div>
                            <h3><?php echo $listing->Title ?></h3></br>


                            <h5>
                              <hr>
                            </h5></br>
                            <h5>Name of client</h5></br>
                            <h5>Reason to cancel</h5></br>
                            <h5>Date of cancellation</h5></br>

                          </div>
                      <?php endif;
                      endforeach; ?>

                      <div>
                        <?php if (empty($engineerProjectCancell->startDate)) { ?>

                          <h4 style="color: red;">rejected</h4>

                        <?php } else { ?>
                          <button class="review-btn">Customer review</button>
                          </br>

                        <?php } ?>

                        <?php foreach ($data['serviceProvider'] as $cliant) :
                          if ($engineerProjectCancell->customerEmail == $cliant->email) : ?>

                            <p><?php echo $cliant->fName;
                                echo ' ';
                                echo $cliant->lName ?></p>

                        

                        <p><?php echo $engineerProjectCancell->engReason  ?></p>
                        <p><?php echo $engineerProjectCancell->cancellDate  ?></p>
                        <div class="popup-data" 
                        data-client="<?php echo $cliant->fName;
                                echo ' ';
                                echo $cliant->lName ?>"
                        data-start="<?php echo $engineerProjectCancell->startDate ?>" 
                        data-cancelDate="<?php echo $engineerProjectCancell->cancellDate ?>" 
                        data-progress="<?php echo $engineerProjectCancell->completionWhenCancell ?>" 
                        data-review="<?php echo $engineerProjectCancell->customerReason ?>"></div>

                        <?php endif;
                        endforeach; ?>
                        <div class="div"></div>
                      </div>
                    </div>
                </table>
              </form>
          <?php endif;
          endforeach; ?>

          <div id="review" class="popUp">
            <span onclick="document.getElementById('review').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent">
              <table class="acceptTable">
                <tr>
                  <h5>Client Name</h5>
                  <td id="client-popup"></td>
                </tr>
                <tr>
                  <td>
                    <h5>Start Date</h5>
                  </td>
                  <td id="start-popup"></td>
                </tr>
                <tr>
                  <td>
                    <h5>Cancellation date</h5>
                  </td>
                  <td id="cancelDate-popup"></td>
                </tr>
                <tr>
                  <td>
                    <h5>Progress when service ended</h5>
                  </td>
                  <td id="progress-popup"></td>
                </tr>
                <tr>
                  <td>
                    <h5>Review</h5>
                  </td>
                  <td id="review-popup"></td>
                </tr>
              </table>
            </form>
            <button onclick="location.reload();">Back</button>
          </div>

          <script>
            const reviewButtons = document.querySelectorAll(".review-btn");
            reviewButtons.forEach((button) => {
              button.addEventListener('click', (e) => {
                e.preventDefault();
                const popUp = document.getElementById('review');
                const parentDiv = button.parentElement;
                
                const dataDiv = parentDiv.querySelector(".popup-data");
                const popupClientName = document.querySelector("#client-popup");
                const popupStart = document.querySelector("#start-popup");
                const popUpCancel = document.querySelector("#cancelDate-popup");
                const popupProgress = document.querySelector("#progress-popup");
                const popupReview = document.querySelector("#review-popup");

                popupClientName.innerHTML = dataDiv.dataset.client;
                popupStart.innerHTML = dataDiv.dataset.start;
                popUpCancel.innerHTML = dataDiv.dataset.canceldate;
                popupProgress.innerHTML = dataDiv.dataset.progress + '%';
                popupReview.innerHTML = dataDiv.dataset.review;

                popUp.style.display = "block";
                

              })
            })
          </script>

        </div>
      </div>
    </div>
  </div>
</body>

</html>