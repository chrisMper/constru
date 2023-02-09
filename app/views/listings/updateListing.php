<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">
<body>
<!------------------------------ navbar ------------------------------------>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>

<!------------------------------------ update listing form ---------------------------------------------->
<main>
	<div class="container">

	
		<form id="addform" action="<?php echo URLROOT; ?>/listings/updateListing/<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data">
			<span id="topic">Add Listing</span>

			<!--first step -->
			<div class="add">
				<p><input id="title" name="title" placeholder="Enter Service Title here" value="<?php echo $data['listing']->Title ?>"></p>
				<p><input id="description" name="description" placeholder="Enter Description here" value="<?php echo $data['listing']->Description ?>"></p>
				<p><input id="inputfile" type="file" name="image" ></p>
			</div>
			<div class="sub-discard-btn"> 
				<button type="submit" class="submitbtn"> Update </button><br>
			</div>
		</form>

	</div>
		<script src="<?php echo URLROOT; ?>/js/compadd.js"></script>


		
<main>
</body>

</html>