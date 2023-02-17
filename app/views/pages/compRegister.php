<!------------------------------ navbar ------------------------------------>
<?php include APPROOT . '/views/inc/compregheader.php'; ?>
<!-- -----------------------------list-container------------------------------- -->

<body>
    <div class="left"></div>
    <form action="#" class="form">
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
                <label for="username">Company Name</label>
                <input type="text" name="username" id="username" />
                <div class="input-group">
                    <label for="phone">Telephone number</label>
                    <input type="text" name="phone" id="phone" />
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
                <label for="position">Address line 1</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group">
                <label for="position">Address line 2</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group">
                <label for="position">Postal code</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group">
                <label for="position">City</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group">
                <label for="position">Country</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
            <!-- Step-3 -->
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="dob">ICTAD Number</label>
                <input type="text" name="dob" id="dob" />
            </div>
            <div class="input-group">
                <label for="ID">Company Grade</label>
                <input type="text" name="ID" id="ID" />
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
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPassword" />
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
</body>
<script src="<?php echo URLROOT; ?>/js/compsignup.js"></script>