<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">
<body>
<!------------------------------ navbar ------------------------------------>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>

<!------------------------------------ update listing form ---------------------------------------------->
<main>
	<div class="container">

	<form id="addform" action="<?php echo URLROOT; ?>/complistings/updateListing/<?php echo $data['listing']->PostId ?>" method="POST" enctype="multipart/form-data">
			<span id="topic">Update Listing</span>
			<!--first step -->
			<div class="add">
					<p><input id="title" name="title" placeholder="Enter Service Title here" value="<?php echo $data['listing']->Title ?>"></p>
					<p><input id="description" name="description" placeholder="Enter Description here" value="<?php echo $data['listing']->Description ?>></p>
					<div id="stages-container">
						<div class="stage">
						<span>Stage 1 </span>
							<input name="stages[]" placeholder="Enter stage 1 here" value="<?php echo $data['listing']->stage ?>>
							<input name="contact[]" placeholder="Enter contact person to above stage 1 here" value="<?php echo $data['listing']->contact ?>>
							<button type="button" class="delete-stage-btn" onclick="deleteStage(this)">Delete</button>
					</div>
					</div>
					<p><input id="inputfile" type="file" name="image"></p>
				</div>
				<div class="sub-discard-btn">
					<button type="submit" class="submitbtn">Submit<br>
						<button type="reset" class="discardbtn">Discard<br>
						<button type="button" onclick="addStage()">Add Stage</button>
				</div>
			</form>

		</div>
		<script src="<?php echo URLROOT; ?>/js/compadd.js"></script>
		<script src="<?php echo URLROOT; ?>/js/addstages.js"></script>
		
<main>
</body>

</html>