
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/kusSearchNavSide.css" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/search.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/cv.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/portfolio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="C:\xampp\htdocs\constru\fontawesome-free-6.3.0-web/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<?php foreach($data['cvDetails'] as $cvDetails): 
	if($cvDetails->email== $_SESSION['user_email'] ): ?>
<div class="resume_wrapper" style="background-color: #e8e8e8; margin-top:100px;">

	<div class="resume_left">
		<div class="resume_image">
			<img src="<?php echo URLROOT; ?>/img/uploads/profile/<?php echo $cvDetails->profilePhoto; ?>" alt="Resume_image">
		</div>
		<div class="resume_bottom">
			<div class="resume_item resume_namerole">
				<div class="name"><?php echo $cvDetails->Name; ?></div>
				<div class="role"><?php echo $cvDetails->jobTitle; ?></div>
			</div>
			<div class="resume_item resume_profile">
				<div class="resume_title">Profile</div>
				<div class="resume_info"><?php echo $cvDetails->description; ?> </div>
			</div>
			<div class="resume_item resume_address">
				<div class="resume_title">Address</div>
				<div class="resume_info">
				<?php echo $cvDetails->address1; ?>,<br/>
				<?php echo $cvDetails->address2; ?>,<br/>
				<?php echo $cvDetails->address3; ?>
				</div>
			</div>
			<div class="resume_item resume_contact">
				<div class="resume_title">Contact</div>
				<div class="resume_info">
					<div class="resume_subtitle">Phone</div>
					<div class="resume_subinfo"><?php echo $cvDetails->contactNumber; ?></div>
				</div>
				<div class="resume_info">
					<div class="resume_subtitle">Email</div>
					<div class="resume_subinfo"><?php echo $cvDetails->contactEmail; ?></div>
				</div>
			</div>
			<div class="resume_item resume_skills">
				<div class="resume_title">Skills</div>
				<div class="resume_info">
					<?php foreach($data['Skills'] as $Skills):
						if($Skills->cvId==$cvDetails->cvId): ?>
					<div class="skills_list">
						<div class="skills_left"><?php echo $Skills->skill ?></div>
						<div class="skills_bar">
							<p>
								<span style="width: <?php echo $Skills->presentages ?>%"></span>
							</p>
						</div>
					</div>
					<?php endif;
				 endforeach; ?>

				</div>
			</div>
		</div>
	</div>
	<div class="resume_right">
		<div class="resume_item resume_namerole">
			<div class="name"><?php echo $cvDetails->Name; ?></div>
			<div class="role"><?php echo $cvDetails->jobTitle; ?></div>
		</div>
		<div class="resume_item resume_education">

			<div class="resume_title">Education</div>
			<div class="resume_info">
			<?php foreach($data['Education'] as $Education):
						if($Education->cvId==$cvDetails->cvId): ?>
				<div class="resume_data">
					<div class="year"><?php echo $Education->startYear ?> - <?php echo $Education->endYear ?></div>
					<div class="content">
						<p><?php echo $Education->education ?></p>
						<br>
					</div>
				</div>

				<?php endif; 
				endforeach; ?>

		</div>

		<div class="resume_item resume_experience">
			<div class="resume_title">Experience</div>
			<div class="resume_info">
			<?php foreach($data['Experience'] as $Experience):
						if($Experience->cvId==$cvDetails->cvId): ?>
				<div class="resume_data">
					<div class="year"><?php echo $Experience->startYearEx ?> - <?php echo $Experience->endYearEx ?></div>
					<div class="content">
						<p><?php echo $Experience->experience ?></p>
						<br>
					</div>
				</div>
				<?php endif; 
				endforeach; ?>

				
			</div>
		</div>
		<div class="resume_item resmue_interests">
		
		</div>
	</div>
</div>

<?php endif; 
endforeach; ?>



</body>


