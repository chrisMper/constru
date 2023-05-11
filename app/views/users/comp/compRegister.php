<!------------------------------ navbar ------------------------------------>

<?php include APPROOT . '/views/inc/regNav.php'; ?>
<!-- -----------------------------list-container------------------------------- -->



<div class="split left" style="overflow:hidden">
    <div class="regimg">
        <img src="<?php echo URLROOT; ?>/img/reggif2.gif"><!--source: https://pin.it/1ywerW9-->
    </div>
</div>

<div class="split right">
    <form method = "POST" action="<?php echo URLROOT; ?>/users/compRegister" class="form">
        <h1 class="text-center">Registration Form</h1>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Intro"></div>
            <div class="progress-step" data-title="Contact"></div>
            <div class="progress-step" data-title="ID"></div>
            <div class="progress-step" data-title="Password"></div>
        </div>

        <!-- Step-1 -->
        <div class="form-step form-step-active">
            <div class="input-group">
                <label for="FName">Company Name</label>
                <input type="text" name="FName" id="FName" />
                <div class="input-group">
                    <label for="Tele">Telephone number</label>
                    <input type="text" name="Tele" id="Tele" />
                </div>
                <div class="input-group">
                    <label for="email">Email address</label>
                    <input type="text" name="email" id="email" />
                </div>
            </div>

            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>
        <!-- Step-2 -->
        <div class="form-step">
            <div class="input-group">
                <label for="adline1">Address line 1</label>
                <input type="text" name="adline1" id="adline1" />
            </div>
            <div class="input-group">
                <label for="adline2">Address line 2</label>
                <input type="text" name="adline2" id="adline2" />
            </div>
            <div class="input-group">
                <label for="Postcode">Postal code</label>
                <input type="text" name="Postcode" id="Postcode" />
            </div>
            <div class="input-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" />
            </div>
            <div class="input-group">
                <label for="District">City</label>
                <input type="text" name="District" id="District" />
            </div>
            <div class="input-group">
                <label for="Country">Country</label>
                <input type="text" name="Country" id="Country" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
            <!-- Step-3 -->
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="ictadno">ICTAD Number</label>
                <input type="text" name="ictadno" id="ictadno" />
            </div>
            <div class="input-group">
                <label for="compGrade">Company Grade</label>
                <input type="text" name="compGrade" id="compGrade" />
            </div>
            <div class="input-group">
                <label for="ID">Upload Company Registration Document</label>
                <input type="file" name="ID" id="ID" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="password"> Create Password</label>
                <input type="password" name="password" id="password" />
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" />
            </div>
            <div class="input-group">
                <label for="confirmPassword">Enter OTP</label>
                <input type="text" name="confirmPassword" id="confirmPassword" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <input type="submit" value="Submit" class="btn" />
            </div>
        </div>
    </form>
</div>




<script src="<?php echo URLROOT; ?>/js/compsignup.js"></script>