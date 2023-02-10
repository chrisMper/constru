<?php
include APPROOT . '/views/inc/navbar.php';
?>
<main>
    <div class="grid-container">
        <!-- first parameter is the controller, second parameter is the function name inside that controller  -->
        <a href="<?php echo URLROOT; ?>/pages/msg">
            <div class="grid-item">
                <div class="card">
                    <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
                    <div class="container">
                        <h4><b>Messages</b></h4>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo URLROOT; ?>/pages/cart">
            <div class="grid-item">
                <div class="card">
                    <img class="dashimg" src="<?php echo URLROOT; ?>/img/mycart.png" alt="my cart img" style="width:100%">
                    <div class="container">
                        <h4><b>My Cart </b></h4>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo URLROOT; ?>/pages/orders">
        <div class="grid-item">
            <div class="card">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/myorders.png" alt="my orders img">
                <div class="container">
                    <h4><b>My Orders</b></h4>
                </div>
            </div>
        </div>
</a>    <a href="<?php echo URLROOT; ?>/pages/bookings">
        <div class="grid-item">
            <div class="card">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/mybookings.png" alt="my bookings img">
                <div class="container">
                    <h4><b>My Bookings</b></h4>
                </div>
            </div>
        </div>
</a>
        <a href="<?php echo URLROOT; ?>/pages/profile">
        <div class="grid-item">
            <div class="card">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/portfolio.png" alt="msgimg">
                <div class="container">
                    <h4><b>Profile</b></h4>
                </div>
            </div>
        </div>
</a>
    </div>


</main>
</body>
<?php include APPROOT . '/views/inc/footer.php'; ?>

</html>