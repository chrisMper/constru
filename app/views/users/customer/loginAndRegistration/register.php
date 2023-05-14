<!------------------------------ navbar ------------------------------------>

<?php include APPROOT . '/views/inc/regNav.php'; ?>
<!-- -----------------------------list-container------------------------------- -->



<div class="split left" style="overflow:hidden">
    <div class="regimg">
        <img src="<?php echo URLROOT; ?>/img/reggif2.gif"><!--source: https://pin.it/1ywerW9-->
    </div>
</div>

<div class="split right">
    <form action="<?php echo URLROOT; ?>/users/customerRegister" method="POST" class="form">
        <h1 class="text-center">Customer Registration Form</h1>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Intro"></div>
            <div class="progress-step" data-title="Contact"></div>
            <div class="progress-step" data-title="Password"></div>
        </div>

        <!-- Step-1 -->
        <div class="form-step form-step-active">
            <div class="input-group">
                <label for="firstName">First Name</label>
                <input type="text" name="FName" id="firstName" />

                <div class="input-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="LName" id="lastName" />
                </div>
                <div class="input-group">
                    <label for="phone">Telephone number</label>
                    <input type="text" name="Tele" id="phone" />
                </div>
                <div class="input-group">
                    <label for="email">Email address</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="error">
						<span><?php echo $data['email_err']; ?></span>
					</div>
            </div>

            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>
        <!-- Step-2 -->
        <div class="form-step">
            <div class="input-group">
                <label for="position">Address line 1</label>
                <input type="text" name="adline1" id="position" />
            </div>
            <div class="input-group">
                <label for="position">Address line 2</label>
                <input type="text" name="adline2" id="position" />
            </div>
            <div class="input-group">
                <label for="position">District</label>
                <input type="text" name="District" id="position" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
            <!-- Step-3 -->
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="password"> Create Password</label>
                <input type="password" name="password" id="password" />
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirmPassword" />
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