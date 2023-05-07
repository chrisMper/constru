<html>
<head>

  <title>supplier profile</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/sup_profile.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

  <div class="main">

  <a href="<?php echo URLROOT; ?>/sup_profile/sup_profile" ><i class='bx bx-arrow-back'></i>Back </a>

    <div class="registerbox">

<form align="right" method = "post" action="<?php echo URLROOT; ?>/sup_profile/updateProfile/<?php echo $_SESSION['user_email']= $user_email; ?>" enctype="multipart/form-data" >

    <div class="user">
       <img src="<?php echo $file['uploads'] ?>" alt="<?php echo URLROOT; ?>/img/uploads/profile.jpg">
      <div class="profileimg"> 
       <input type="file" id="uploads" name="uploads"></br></br>
       <div class="profileName"><b><?php echo $data['fName'] ?> <?php echo $data['lName'] ?> </b></div>
      </div>
    </div>

  <table  border="0">
   
    <tr>
       <td style="width:25%">Please select your role</td>
       <td style="width:25%"></td>
       <td style="width:25%"></td>
       <td style="width:25%"></td>
    </tr>
    <tr>
       <td><input type="radio" id="individual" name="role" value="Individual">Individual</td>
       <td><input type="radio" id="company" name="role" value="Company">Company</td>
       <td></td>
       <td></td>
    </tr>
    <tr>
     <td>Full name</td>
     <td colspan="3"></td>
    </tr>
    <tr>
     <td colspan="2"><input type="text" id="fName" name="fName" value="<?php echo $data['fName'] ?>" required></td>
     <td colspan="2"><input type="text" id="lName" name="lName" value="<?php echo $data['lName'] ?>" required></td>
    </tr>
    <tr>
       <td>Address</td>
       <td colspan="3"></td>
    </tr>
    <tr>
      <td>Address Line 1</td>
      <td>Address Line 2</td>
      <td>City</td>
    </tr>
    <tr>
      <td><input type="text" id="adLine1" name="adLine1" value="<?php echo $data['adLine1'] ?>" required></td>
      <td><input type="text" id="adLine2" name="adLine2" value="<?php echo $data['adLine2'] ?>" required></td>
      <td><input type="text" id="city" name="city" value="<?php echo $data['city'] ?>" required></td>
    </tr>
    <tr>
     <td>Country</td>
     <td>District</td>
     <td></td>
     <td></td>
    </tr>
    <tr>
     <td><input type="text" id="country" name="country" value="<?php echo $data['country'] ?>" required></td>
     <td><input type="text" id="district" name="district" value="<?php echo $data['district'] ?>" required></td>
    </tr>
    
    <tr>
     <td colspan="2">Email</td>
     <td colspan="2">Tele No</td>
    </tr>
    <tr>
     <td colspan="2"><input type="text" id="email" name="email" value="<?php echo $data['email'] ?>" required > <span class="error"><?php echo $data['email_err']; ?></span></td>
     <td colspan="2"><input type="text" id="telephoneNo" name="telephoneNo" value="<?php echo $data['telephoneNo'] ?>" required> <span class="error"><?php echo $data['tele_err']; ?></span></td>
    </tr>
    <tr>
      <td colspan="2"></td>
    </tr>
  </table>

  <div class="form-actions"> 
        <button type="submit" class="submitbtn">Submit</button>
        <button  class="discardbtn"><a href="<?php echo URLROOT; ?>/sup_profile/sup_profile">Discard </a></button>
	</div>
</form>
</div>

    </div>  
  <?php include APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>
