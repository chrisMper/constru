<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?php echo URLROOT; ?>/compregister/verify" method="post">
  <label for="otp">otp</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>