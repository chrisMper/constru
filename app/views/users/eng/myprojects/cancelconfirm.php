<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">

<body>
	<!------------------------------ navbar ------------------------------------>
	<div class='navbar'>
		<?php include APPROOT . '/views/inc/navbar.php'; ?>
	</div>

	<!------------------------------------ add listing form ---------------------------------------------->
	<main>
		<div class="container">


			<form method="POST" action="<?php echo URLROOT; ?>/engBookings/cancellConfirm" class="acceptContent">
				<?php foreach ($data['engineerProjectOngoing'] as $engineerProjectOngoing) :
					if ($data['projectId'] == $engineerProjectOngoing->projectId) :  ?>
						<?php foreach ($data['listings'] as $listings) :
							if ($listings->PostId == $engineerProjectOngoing->postId) : ?>
								<br>
								<center> <span id="topic"><?php echo $listings->Title; ?></span></center>

						<?php endif;
						endforeach; ?>
						<div class="add">

							<br><br><br>
							<?php foreach ($data['serviceProvider'] as $serviceProvider) :
								if ($engineerProjectOngoing->customerEmail == $serviceProvider->email && $engineerProjectOngoing->engeneerEmail == $_SESSION['user_email']) : ?>
									<p><label for="completionDate">Customer Name </label></p>
									<p><input type="text" value=" <?php echo $serviceProvider->fName ?> <?php echo $serviceProvider->lName ?>" readonly></p>
									<p><label for="completionDate">Customer Email </label></p>
									<p><input type="text" value=" <?php echo $serviceProvider->email ?>" readonly></p>

								<?php elseif ($engineerProjectOngoing->engeneerEmail == $serviceProvider->email && $engineerProjectOngoing->customerEmail == $_SESSION['user_email']) : ?>

									<p><label for="completionDate">Engineer Name </label></p>
									<p><input type="text" value=" <?php echo $serviceProvider->fName ?> <?php echo $serviceProvider->lName ?>" readonly></p>
									<p><label for="completionDate">Engineer Email </label></p>
									<p><input type="text" value=" <?php echo $serviceProvider->email ?>" readonly></p>


							<?php
								endif;
							endforeach; ?>

							<p><input type="text" name="customerEmail" value=" <?php echo $engineerProjectOngoing->customerEmail ?>" hidden></p>
							<p><input type="text" name="engEmail" value="<?php echo $engineerProjectOngoing->engeneerEmail ?> " hidden></p>
							<p><input type="text" name="postId" value="<?php echo $engineerProjectOngoing->postId ?>" hidden></p>
							<p><input type="number" name="projectId" value="<?php echo $data['projectId'] ?>" hidden></p>
							<p><input type="date" id="date" name="cancelldate" value="<?php echo date('Y-m-d'); ?>" hidden></p>
							<p><input type="date" id="date" name="startDate" value="<?php echo $engineerProjectOngoing->startDate  ?>" hidden></p>

							<?php foreach ($data['cancellNotes'] as $cancellNotes) :
								if ($data['projectId'] == $cancellNotes->projectId) :
									if ($engineerProjectOngoing->engeneerEmail == $_SESSION['user_email']) : ?>


										<p><label for=" customerReason">Customer reason to reject</label></p>
										<p><textarea id="reason" name="customerReason" rows="6" cols="50" value="<?php echo $cancellNotes->cancellNote ?>" readonly> <?php echo $cancellNotes->cancellNote ?></textarea></p>
										<p><label for="engineerReason">Enter your Comment</label></p>
										<p><textarea id="reason" name="engineerReason" rows="6" cols="50"> </textarea></p>


									<?php else :  ?>


										<p><label for=" engineerReason">engineer reason to reject</label></p>
										<p><textarea id="reason" name="engineerReason" rows="6" cols="50" value="<?php echo $cancellNotes->cancellNote ?>" readonly> <?php echo $cancellNotes->cancellNote ?></textarea></p>
										<p><label for="customerReason">Enter your Comment</label></p>
										<p><textarea id="reason" name="customerReason" rows="6" cols="50"> </textarea></p>
									<?php endif; ?>



							<?php endif;

							endforeach; ?>



						</div>
						<div class="sub-discard-btn">
							<button type="submit" class="submitbtn">Submit<br>
								<button type="reset" class="discardbtn">Discard<br>
						</div>

				<?php endif;
				endforeach; ?>
			</form>

		</div>
		<script src="<?php echo URLROOT; ?>/js/compadd.js"></script>



		<main>
</body>

</html>