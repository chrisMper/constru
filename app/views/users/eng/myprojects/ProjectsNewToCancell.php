<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">

<body>
	<!------------------------------ navbar ------------------------------------>
	<div class='navbar'>
		<?php include APPROOT . '/views/inc/navbar.php'; ?>
	</div>

	<!------------------------------------ add listing form ---------------------------------------------->
	<main>
		<div class="container">


		<form method="POST" action="<?php echo URLROOT; ?>/engBookings/engProjectCancell" class="acceptContent">
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
					<p><input type="number" name="projectId" value="<?php echo $data['projectId'] ?>" hidden></p>
					<p><input type="date" id="date" name="cancelldate" value="<?php echo date('Y-m-d'); ?>" hidden></p>
					<p><label for="reason">Mention the reason to reject</label></p>
					<p><textarea id="reason" name="reason" rows="6" cols="50"></textarea></p>
       
				
				<!-- <p><input id="title" name="title" placeholder="Enter Service Title here"></p>
				<p><input id="description" name="description" placeholder="Enter Description here"></p>
				<p><input id="inputfile" type="file" name="image"></p> -->
			</div>
			<div class="sub-discard-btn">
				<button type="submit" class="submitbtn">Submit<br>
					<button type="reset" class="discardbtn">Discard<br>
			</div>
		</form>

		</div>
		<script src="<?php echo URLROOT; ?>/js/compadd.js"></script>



		<main>
</body>

</html>