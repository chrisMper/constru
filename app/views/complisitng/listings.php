<body>
    <!------------------------------ navbar ------------------------------------>
    <div class='navbar'>
        <?php include APPROOT . '/views/inc/navbar.php'; ?>
    </div>

    <!-- -----------------------------list-container------------------------------- -->
    <main>

        <div class="addbtn-container">
            <a href="<?php echo URLROOT; ?>/complistings/add">
                <button type="button" class="addbtn">Add</button>
            </a>
        </div>


        <?php foreach ($data['listings'] as $listing) :  ?>
            <?php if (($listing->UserEmail) == $_SESSION['user_email']) : ?>

                <div class="list-container">

                    <div class="left-mid">
                        <div class="left-col">
                            <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $listing->Photos; ?> ">
                        </div>
                        <div class='mid-col'>
                            <p class='topic'><?php echo $listing->Title; ?>
                            <p>
                            <p class='decription'><?php echo $listing->Description; ?>
                            <p>
                        </div>
                    </div>

                    <div class='right-col'>
                        <a href="<?php echo URLROOT; ?>/complistings/showUpdateListing/<?php echo $listing->PostId; ?>">
                            <button type="button" class="updatebtn">Update</button><br>
                        </a>
                        <a href="<?php echo URLROOT; ?>/complistings/deleteListing/<?php echo $listing->PostId; ?>">
                            <button type="button" class="deletebtn">Delete</button>
                        </a>
                        <a href="<?php echo URLROOT; ?>/analysis/displayAdd/<?php echo $listing->PostId; ?>">
                            <button type="button" class="addbtn">Veiw</button>
                        </a>



                    </div>

                </div>
            <?php endif; ?>
        <?php endforeach; ?>



    </main>