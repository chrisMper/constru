<?php include APPROOT . '/views/inc/compregheader.php'; ?>
<div class="split left">
  <div class="regimg">
		<img src="<?php echo URLROOT; ?>/img/reggif.gif">
      </div>
</div>

<!-- <?php print_r ($data)?> -->

<div class="split right">
  <div class="regbox">
	<div class="box">
		<div class="form">
			<h1>Register</h1>
			<form action="<?php echo URLROOT; ?>users/register" method="post">

			<div class="inputBox">
					<input type="text" name="company_name" required="required">
					<span>Company Name</span> 
					<i></i>
			</div>

			<div class="inputBox">
					<input type="text" name="company_email" required="required">
					<span>Company Email</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="password" name="password" required="required">
					<span> Create Password</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="password" name="confirm_passowrd" required="required">
					<span> confirm password</span> 
					<i></i>	
			</div>


			<div class="inputBox">
					<input type="text" name="addressline1" required="required">
					<span>address line 1</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="addressline2">
					<span>address line 2</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="city">
					<span>City</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="postcode">
					<span>Postal code</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="district" required="required">
					<span>District</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="country" required="required">
					<span>Country</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="ictadno">
					<span>ICTAD number</span> 
					<i></i>	
			</div>

			<div class="inputBox">
					<input type="text" name="company_type">
					<span>Company type</span> 
					<i></i>	
			</div>

			<!-- <div class="inputBox">
					<input type="text" name="grade">
					<span>Company Grade</span> 
					<i></i>	
			</div> -->

			<!-- <div class="inputBox">
					<input type="file" id="myFile" name="filename">
					<span>Upload Company Registration Document</span>
					<i></i>	
			</div> -->
				<input type="submit" name="submit" value="Register">
			</form>
			</div>	
		</div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>