<html>
<head>

  <title>supplier profile</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/sup_profile.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

    <div class="main">
    <a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>

    <?php foreach($data['profile'] as $profile) : ?>
    <?php if($_SESSION['user_email'] == $profile->email):?>
   <div class="profile">
    <div class="user">
       <img src='<?php echo URLROOT; ?>/img/uploads/<?php echo $profile->uploads; ?>'  alt='<?php echo URLROOT; ?>/img/uploads/profile.jpg'>
       <div class="profileName"> <?php echo $profile->fName; ?> <?php echo $profile->lName; ?> </div>
    </div>

    <div class="details">
        <div class="userdetails">
            <h3>User Details</h3> <br>
            Name : <?php echo $profile->fName; ?> <?php echo $profile->lName; ?><br>
            Email : <?php echo $profile->email; ?> <br>
            Address : <?php echo $profile->adLine1; ?>, <?php echo $profile->adLine2; ?>, <?php echo $profile->city; ?>, <?php echo $profile->district; ?> <br>
            Role : <?php echo $profile->role; ?><br>
            Tel No. : <?php echo $profile->telephoneNo; ?> <br>
            District : <?php echo $profile->district; ?> <br>
            Country : <?php echo $profile->country; ?><br>

            <button class="updatebtn"><a href="<?php echo URLROOT; ?>/sup_profile/updateProfile/<?php echo $_SESSION['user_email'];?>">Edit Profile</a></button>
        </div>


        <div class="accessdetails">
            <h3>Login Activity</h3> <br>
            <br>
            First Access to site <br>
            <?php echo $profile->loginAccess; ?> <br>
            <br>
            Last Access to site <br>
            <?php echo $profile->lastLogin; ?> <br>
        </div>
    </div>
    <?php endif;?>
    <?php endforeach; ?>
</div>

<?php include APPROOT . '/views/inc/footer.php'; ?>
</div>
</body>
</html>