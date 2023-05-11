<div class='navbar'>
    <?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>


<div class="profileDisplay">
    <div class="image">
        <div class="imageEdit">
            <img src="<?php echo URLROOT; ?>/img/msg.png" alt="">
            <button>Edit</button>
        </div>


        <div class="profileName"> <?php echo $data['engineer']->fName; ?> <?php echo $data['engineer']->lName; ?> </div>
    </div>
    <div class="profileDetails">
        <div class="details">
            User Details <br>
            <br>
            Name : <?php echo $data['engineer']->fName; ?> <?php echo $data['engineer']->lName; ?><br>
            Email : <?php echo $data['engineer']->email; ?> <br>
            Address :<?php echo $data['engineer']->adLine1; ?> , <?php echo $data['engineer']->adLine2; ?>, <?php echo $data['engineer']->city; ?>,<?php echo $data['engineer']->postalcode; ?> <br>
            Tel No. : <?php echo $data['engineer']->telephoneNo; ?> <br>
            District : <?php echo $data['engineer']->district; ?> <br>
            Country : <?php echo $data['engineer']->country; ?><br>

            <button class="upBttn" id="openUpdateForm">Edit Profile</button>
        </div>


        <div class="loginDetails">
            Login Activity <br>
            <br>
            First Access to site <br>
            Tuesday, 14 June 2022, 10:17 PM (143 days 4 hours) <br>
            <br>
            Last Access to site <br>
            Saturday, 5 November 2022, 2:58 AM (5 secs) <br>
        </div>
    </div>
</div>

<!-- ..................................................................................................................................... -->

<dialog id="updateForm" class="popupDialog">
    <div class="updateFormAlign">
        <form action="<?php echo URLROOT; ?>/users/updateForm" method="POST">

            <div class="inputBox">
                <span>First Name</span><br>
                <input type="text" name="FName" value="<?php echo $data['engineer']->fName; ?>" required>

                <i></i>
            </div>

            <div class="inputBox">
                <span>Last Name</span><br>
                <input type="text" name="LName" value="<?php echo $data['engineer']->lName; ?>" required="required">

                <i></i>
            </div>

            <div class="inputBox">
                <span>Email</span><br>
                <input type="text" name="email" value="<?php echo $data['engineer']->email; ?>" required="required">

                <i></i>
            </div>

            <!-- <div class="error">
                <span><?php echo $data['email_err']; ?></span>
            </div> -->

            <div class="inputBox">
                <span>Address line 1</span><br>
                <input type="text" name="adline1" value="<?php echo $data['engineer']->adLine1; ?>" required="required">

                <i></i>
            </div>

            <div class="inputBox">
                <span>Address line 2</span><br>
                <input type="text" name="adline2" value="<?php echo $data['engineer']->adLine2; ?>">

                <i></i>
            </div>

            <div class="inputBox">
                <span>City</span><br>
                <input type="text" name="city" value="<?php echo $data['engineer']->city; ?>" required>

                <i></i>
            </div>

            <div class="inputBox">
                <span>Postal code</span><br>
                <input type="text" name="Postcode" value="<?php echo $data['engineer']->postalcode; ?>" required>

                <i></i>
            </div>

            <div class="inputBox">
                <span>District</span><br>
                <input type="text" name="District" value="<?php echo $data['engineer']->district; ?>" required="required">

                <i></i>
            </div>

            <div class="inputBox">
                <span>Country</span><br>
                <input type="text" name="Country" value="<?php echo $data['engineer']->country; ?>" required="required">

                <i></i>
            </div>

            <div class="inputBox">
                <span>Telephone Number</span><br>
                <input type="text" name="Tele" value="<?php echo $data['engineer']->telephoneNo; ?>" required="required">

                <i></i>
            </div>





            <div class="updatFormButtonAlign">
                <input type="submit" name="submit" value="Update" class="updatebttn">
                <div class="closeBttonAlign">
                    <button id="closeForm" class="closeBttn">Close</button>
                </div>
            </div>


        </form>

    </div>
</dialog>


<?php include APPROOT . '/views/inc/footer.php'; ?>

</html>