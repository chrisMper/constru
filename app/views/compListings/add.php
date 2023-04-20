<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">

<body>
	<!------------------------------ navbar ------------------------------------>
	<div class='navbar'>
		<?php include APPROOT . '/views/inc/navbar.php'; ?>
	</div>

	<!------------------------------------ add listing form ---------------------------------------------->
	<main>
		<div class="container">


			<form id="addform" action="<?php echo URLROOT; ?>/complistings/add" method="POST" enctype="multipart/form-data">
				<span id="topic">Add Company Listing</span>

				<!--first step -->
				<div class="add">
					<p><input id="title" type="text" name="title" placeholder="Enter Service Title hereeeeeeeeeeee"></p>
					<p><input id="description" type="text" name="description" placeholder="Enter Description here"></p>
					<p><input id="contactPerson" type="number" name="contactPerson" placeholder="Enter project contact number here"></p>
					<!-- <div id="stages-container">
						<div class="stage">
						<span>Stage 1 </span>
							<input type="text" name="stages" placeholder="Enter stage 1 here">
							<input type="number" ame="contact" placeholder="Enter contact person to above stage 1 here">
							<button type="button" class="delete-stage-btn" onclick="deleteStage(this)">Delete</button>
					</div> -->
					</div>
					<p><input id="inputfile" type="file" name="image"></p>
				</div>
				<div class="sub-discard-btn">
				<button type="reset" class="discardbtn">Discard<br>
						<button type="button" onclick="addStage()">Add Stage</button> 
					<button type="submit" class="submitbtn">Submit<br>
						
				</div>
			</form>

		</div>
		<script src="<?php echo URLROOT; ?>/js/compadd.js"></script>
		<script src="<?php echo URLROOT; ?>/js/addstages.js"></script>



		<main>
</body>

</html>