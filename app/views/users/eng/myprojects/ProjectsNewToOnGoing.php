<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">

<body>
	<!------------------------------ navbar ------------------------------------>
	<div class='navbar'>
		<?php include APPROOT . '/views/inc/navbar.php'; ?>
	</div>

	<!------------------------------------ add listing form ---------------------------------------------->
	<main>
		<div class="container">


		<form method="POST" action="<?php echo URLROOT; ?>/engBookings/engBookingOnGoing" class="acceptContent">
			<center> <span id="topic"><?php echo $data['postDetails']->Title?></span></center>

			<!--first step -->
			<div class="add">
			
				
			<p><label for="completionDate">Customer Name </label></p>
			<p><input type="text"  value=" <?php echo $data['customerDetails']->fName ?>  <?php echo $data['customerDetails']->lName ?>" readonly></p>
			<p><label for="completionDate">Customer Email </label></p>
			<p><input type="text"  value=" <?php echo $data['customerEmail']?>" readonly></p>
			


					<p><input type="text" name="engEmail" value=" <?php echo $data['engineerEmail']?>" hidden></p>
					<p><input type="text" name="postId" value="<?php echo $data['postId']?>" hidden></p>
					<p><input type="text" name="customerEmail" value="<?php echo $data['customerEmail'] ?>" hidden></p>

					<p><input type="text" name="projectId" value="<?php echo $data['projectId'] ?>" hidden></p>




					<p><label for="completionDate">Enter an estimated stages </label></p>
					<p><input type="number" name="noOfStages" required></p>
				
					<p><label for="startDate">Enter an start date</label></p>
					<p><input type="date" name="startDate" id="completionDate" required></p>

					<p><label for="completionDate">Enter an estimated completion date</label></p>
					<p><input type="date" name="completionDate" id="completionDate" required></p>
				
				
			</div>
			<div class="sub-discard-btn">
				<button type="submit" class="submitbtn">Accept<br>
					<button type="reset" class="discardbtn">Discard<br>
			</div>
		</form>

		</div>
		<script src="<?php echo URLROOT; ?>/js/compadd.js"></script>



		<main>
</body>

</html>