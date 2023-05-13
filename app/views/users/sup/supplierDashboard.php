<html>
<head>

  <title>supplier</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/supplierDashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
<div class="main">

    <div class="grid-container">

        <a href="<?php echo URLROOT; ?>/pages/messages">
        <div class="grid-item">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
                <div class="name-container">
                    <h4><b>Messages</b></h4>
                </div>
            </div>
        </div>
        </a>

        <a href="<?php echo URLROOT; ?>/sup_myOrders/sup_myOrders">
        <div class="grid-item">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/img/myprojects.png" alt="myprojects img" style="width:100%">
                <div class="name-container">
                    <h4><b>My orders</b></h4>
                </div>
            </div>
        </div>
        </a>

        <a href="<?php echo URLROOT; ?>/pages/cart">
        <div class="grid-item">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/img/mycart.png" alt="my cart img" style="width:100%">
                <div class="name-container">
                    <h4><b>My Cart </b></h4>
                </div>
            </div>
        </div>
        </a>

        <a href="<?php echo URLROOT; ?>/sup_orders/sup_orders">
        <div class="grid-item">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/img/myorders.png" alt="my orders img">
                <div class="name-container">
                    <h4><b>Orders</b></h4>
                </div>
            </div>
        </div>
        </a>

        <a href="<?php echo URLROOT; ?>/pages/bookings">
        <div class="grid-item">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/img/mybookings.png" alt="my bookings img">
                <div class="name-container">
                    <h4><b>My Bookings</b></h4>
                </div>
            </div>
        </div>
        </a>

        <a href="<?php echo URLROOT; ?>/items/items">
            <div class="grid-item">

                <div class="card">
                    <img src="<?php echo URLROOT; ?>/img/listings.png" alt="listings img">
                    <div class="name-container">
                        <h4><b>Items</b></h4>
                    </div>
                </div>
            </div>
        </a>

        <a href="<?php echo URLROOT; ?>/pages/statistics">
            <div class="grid-item">
                <div class="card">
                    <img src="<?php echo URLROOT; ?>/img/stats.png" alt="msgimg">
                    <div class="name-container">
                        <h4><b>Statistics</b></h4>
                    </div>
                </div>
            </div>
        </a>

        <a href="<?php echo URLROOT; ?>/sup_profile/sup_profile">
            <div class="grid-item">
                <div class="card">
                    <img src="<?php echo URLROOT; ?>/img/portfolio.png" alt="msgimg">
                    <div class="name-container">
                        <h4><b>Profile</b></h4>
                    </div>
                </div>
            </div>
        </a>
    </div>

    </div>


  </body>
</html>