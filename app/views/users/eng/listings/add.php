<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">
<body>
<!------------------------------ navbar ------------------------------------>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>

<!------------------------------------ add listing form ---------------------------------------------->
<main>
	<div class="container">

	
		<form id="addform" action="<?php echo URLROOT; ?>/listings/add" method="POST" enctype="multipart/form-data">
			<span id="topic">Add Listing</span>

			<!--first step -->
			<div class="add">
				<p><input id="title" name="title" placeholder="Enter Service Title here"></p>
				<p><input id="description" name="description" placeholder="Enter Description here" ></p>
				<p><input id="inputfile" type="file" name="image" ></p>
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