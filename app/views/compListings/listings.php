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
        <?php foreach ($data['listings'] as $listing) :  ?>            
                <?php if (($listing->UserEmail) == $_SESSION['user_email']) : ?>
                    <div class="list-container">
                        <div class="left-mid">
                            <div class="left-col">
                                <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $listing->Photos; ?> ">
                            </div>
                            <div class='mid-col'>
                                <p class='topic'><?php echo $listing->title; ?></p>
                                <p class='description'><?php echo $listing->description; ?></p>
                                <div class="progressbar">
                                <ul>
                                    <?php foreach ($data['listing_stages'] as $stage) : ?>
                                        <!-- select stages according to postId -->
                                    <?php if ($stage->postId === $listing->postId) : ?>
                                        <!------------------------------------------------------- css maru karanna ------------------------------------------------------------------->
                                        <div style="display:flex;align-items: center;justify-content: space-between;">
                                        <div class="progress-step" data-title="<?php echo $stage->stage; ?>"></div>
                                        <div><?php echo $stage->contact; ?></div>
                                        </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                                </div>
                                <div class="btns-group">
                                    <a href="#" class="btn btn-prev">Previous</a>
                                    <a href="#" class="btn btn-next">Next</a>
                                </div>
                                <!-- progress bar ends here  -->
                            </div>
                        </div>
                        <div class='right-col'>
                            <a href="<?php echo URLROOT; ?>/complistings/showUpdateListing/<?php echo $listing->postId; ?>">
                                <button type="button" class="updatebtn">Update</button><br>
                            </a>
                            <a href="<?php echo URLROOT; ?>/complistings/deleteListing/<?php echo $listing->postId; ?>">
                                <button type="button" class="deletebtn">Delete</button>

                                <a href="<?php echo URLROOT; ?>/compListings/viewlistings/<?php echo $listing->postId; ?>">
                                    <button type="button" class="addbtn">Veiw</button>
                                </a>
                                <!-- <a href="<?php echo URLROOT; ?>/analysis/displayAdd/<?php echo $listing->PostId; ?>">
                            <button type="button" class="addbtn">Veiw</button>
                        </a> -->
                        </div>
                    </div>
                <?php endif; ?>       
        <?php endforeach; ?>
    </main>
    <script src="<?php echo URLROOT; ?>/js/progressbar.js"></script>