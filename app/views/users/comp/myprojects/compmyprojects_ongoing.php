<body>
    <!------------------------------ navbar ------------------------------------>
    <div class='navbar'>
        <?php include APPROOT . '/views/inc/navbar.php'; ?>
    </div>

    <!-- -----------------------------list-container------------------------------- -->
    <main>
        <div class="myprojects">
            <div class="projectsnav">
                <?php include APPROOT . '/views/inc/projectsnav.php'; ?>
            </div>
            <div class="project_box">
                <div class="projectimg_box">
                    <img src="<?php echo URLROOT; ?>/img/mycart.png">
                </div>
                <div class="projecTitle_box">
                    <span>Project Title</span>
                </div>
                <div class="btn_box">
                    <a href="<?php echo URLROOT; ?>/pages/#"><button type="submit" class="contactbtn">Contact</a>
                    <a href="<?php echo URLROOT; ?>/pages/#"><button type="submit" class="acceptbtn">Accept</a>
                    <a href="<?php echo URLROOT; ?>/pages/#"><button type="submit" class="rejectbtn">Reject</a>
                </div>
            </div>
        </div>
    </main>