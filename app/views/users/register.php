<?php include APPROOT . '/views/inc/compregheader.php'; ?>

<div class="split left">
  <div class="regimg">
		<img src="<?php echo URLROOT; ?>/img/reggif.gif">
      </div>
</div>

<div class="split right">
  <div class="regbox">
	<div class="box">
		<div class="form">
		<!-- <span><?php print_r($data) ?></span> -->
			<h1>Register</h1>
			<form action="<?php echo URLROOT; ?>" method="POST">

			<div class="inputBox">
					<input type="text" name="FName" required >
					<span>First Name</span>
					<i></i> 	
			</div>

			<div class="inputBox">
					<input type="text" name="LName" required="required">
					<span>Last Name</span> 
					<i></i>
			</div>

			<div class="inputBox">
					<input type="text" name="email" required="required">
					<span>Email</span> 
					<i></i>
			</div>

			<div class="error">
                    <span><?php echo $data['email_err']; ?></span>
                </div>


			<div class="inputBox">
					<input type="password" name="password" required="required">
					<span> Create Password</span> 
					<i></i>
			</div>

			<div class="error">
                    <span><?php echo $data['password_err']; ?></span>
                </div>


			<div class="inputBox">
					<input type="password" name="confirm_password" required="required">
					<span> confirm password</span> 
					<i></i>	
			</div>

			<div class="error">
                    <span><?php echo $data['confirm_password_err']; ?></span>
                </div>



			<div class="inputBox">
					<input type="text" name="adline1" required="required">
					<span>Address line 1</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="adline2">
					<span>Address line 2</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="city" required>
					<span>City</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="Postcode" required>
					<span>Postal code</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="District" required="required">
					<span>District</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="Country" required="required">
					<span>Country</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="Tele" required="required">
					<span>Telephone Number</span> 
					<i></i>	
			</div>

			
			


			

				<input type="submit" name="submit" value="Register">
			</form>
			</div>	
		</div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>