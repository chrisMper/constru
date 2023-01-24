<?php 
include APPROOT. '/views/inc/navbar.php';
?>
<main>
    <div class="stat-container">
        <div class="stat-item">
            <div class="scard">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
                <div class="container">
                    <h4><b>Punctuality</b></h4>
                </div>
            </div>
        </div>
        <div class="stat-item">
            <div class="scard">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/myprojects.png" alt="myprojects img" style="width:100%">
                <div class="container">
                    <h4><b>Service Completion</b></h4>
                </div>
            </div>
        </div>
        <div class="stat-item">
            <div class="scard">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/mycart.png" alt="my cart img" style="width:100%">
                <div class="container">
                    <h4><b>Friendliness </b></h4>
                </div>
            </div>
        </div>
        <div class="stat-item">
            <div class="scard">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/myorders.png" alt="my orders img">
                <div class="container">
                    <h4><b>Response Time</b></h4>
                </div>
            </div>
        </div>
        <div class="stat-item">
            <div class="scard">
                <img class="dashimg" src="<?php echo URLROOT; ?>/img/mybookings.png" alt="my bookings img">
                <div class="container">
                    <h4><b>No of orders Complete</b></h4>
                </div>
            </div>
        </div>
        <a href="<?php echo URLROOT; ?>/listings/listings">
        <div class="stat-item">
            
            <div class="scard">
                <div class="container">
                    <h4><b>No of Active Days</b></h4>
                </div>
            </div>
        </div>
        </a>
       
    </div>


</main>
    </body>
    <?php include APPROOT . '/views/inc/footer.php'; ?>
    </html>