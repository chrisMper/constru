<body>
    <!------------------------------ navbar ------------------------------------>
    <div class='navbar'>
        <?php include APPROOT . '/views/inc/navbar.php'; ?>
    </div>

    <!-- -----------------------------list-container------------------------------- -->
    <main>

        <div class="addbtn-container">
            <a href="<?php echo URLROOT; ?>/compListings/add">
                <button type="button" class="addbtn">Add</button>
            </a>
        </div>



        <!-- foreach -->

        <div class="list-container">

            <div class="left-mid">
                <div class="left-col">
                    <img src="<?php echo URLROOT; ?>/img/uploads/img.jpg ">
                    <!-- <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $listing->Photos; ?> "> -->
                </div>
                <div class='mid-col'>
                    <p class='topic'>Topic</p>
                    <p class='description'>Description-orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>
                        <div class="progress-step progress-step-active" data-title="step1 - 444444"></div>
                        <div class="progress-step" data-title="ID" ></div>
                        <div class="progress-step" data-title="jhkhk"></div>
                        <div class="progress-step" data-title="Password"></div>
                        <div class="progress-step" data-title="step1"></div>
                        <div class="progress-step" data-title="Contact"></div>
                        <div class="progress-step" data-title="vnbn "></div>
                        <div class="progress-step" data-title="Password"></div>
                        </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">Previous</a>
                        <a href="#" class="btn btn-next">Next</a>
                    
                    </div>

                    <!-- progress bar ends here  -->


                </div>
                <!-- <p class='topic'><?php echo $listing->Title; ?>
                            <p>
                            <p class='decription'><?php echo $listing->Description; ?>
                            <p> -->


            </div>

            <div class='right-col'>
                <button type="button" class="updatebtn">Update</button>
                <button type="button" class="deletebtn">Delete</button>
                <button type="button" class="addbtn">Veiw</button>

                <!-- <a href="<?php echo URLROOT; ?>/complistings/showUpdateListing/<?php echo $listing->PostId; ?>">
                            <button type="button" class="updatebtn">Update</button><br>
                        </a>
                        <a href="<?php echo URLROOT; ?>/complistings/deleteListing/<?php echo $listing->PostId; ?>">
                            <button type="button" class="deletebtn">Delete</button>
                        </a>
                        <a href="<?php echo URLROOT; ?>/analysis/displayAdd/<?php echo $listing->PostId; ?>">
                            <button type="button" class="addbtn">Veiw</button>
                        </a> -->



            </div>

        </div>

        <!-- <?php foreach ($data['listings'] as $listing) :  ?>
            <?php if (($listing->UserEmail) == $_SESSION['user_email']) : ?> -->

        <!-- <?php endif; ?>
        <?php endforeach; ?> -->



    </main>
    <script src="<?php echo URLROOT; ?>/js/progressbar.js"></script>