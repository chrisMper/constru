<div class='navbar'>
    <?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>



<div class="profileDisplay">
    <div class="image">
        <div class="imageEdit">
            <img src="<?php echo URLROOT; ?>/img/msg.png" alt="">
            <button>Edit</button>
        </div>
        <div class="profileName"> Yohan Madhavan </div>
    </div>
    <div class="profileDetails">
        <div class="details">
            User Details <br>
            <br>
            Name : <br>
            Email : tdesilva@gmail.com <br>
            Address : <br>
            Tel No. : <br>
            District : <br>
            Country : Sri Lanka <br>

            <button class="" id="openUpdateForm">Edit Profile</button>
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


<dialog id="updateForm" class="popup">
    <form action="<?php echo URLROOT; ?>" method="POST">

        <div class="inputBox">
            <span>First Name</span><br>
            <input type="text" name="FName" required>

            <i></i>
        </div>

        <div class="inputBox">
        <span>Last Name</span><br>
            <input type="text" name="LName" required="required">
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>Email</span><br>
            <input type="text" name="email" required="required">
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>Address line 1</span><br>
            <input type="text" name="adline1" required="required">
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>Address line 2</span><br>
            <input type="text" name="adline2">
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>City</span><br>
            <input type="text" name="city" required>
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>Postal code</span><br>
            <input type="text" name="Postcode" required>
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>District</span><br>
            <input type="text" name="District" required="required">
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>Country</span><br>
            <input type="text" name="Country" required="required">
            
            <i></i>
        </div>

        <div class="inputBox">
        <span>Telephone Number</span><br>
            <input type="text" name="Tele" required="required">
            
            <i></i>
        </div>







        <input type="submit" name="submit" value="Register" class="">
        <button id="closeForm">Close</button>
    </form>
</dialog>


<?php include APPROOT . '/views/inc/footer.php'; ?>

</html>