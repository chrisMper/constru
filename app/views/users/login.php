<?php include APPROOT . '/views/inc/loginheader.php'; ?>
<div class="split left">
  <div class="loginimg">
		<img src="<?php echo URLROOT; ?>/img/login.gif">
      </div>
</div>

<div class="split right">
  <div class="loginbox">
	<div class="box">
		<div class="form">
			<h1>Login</h1>
			<form action="<?php echo URLROOT; ?>/users/login" method="post">
			<div class="inputBox">
				
					<input type="text" name="email" required="required">
					<span>Email</span> 
					<i></i>
			</div>
			<div class="inputBox">
				
					<input type="password" name="password" required="required">
					<span>Password</span> 
					<i></i>
				
			</div>
			<div class= "links">
				<a href="#">Forgot Password</a>
				<a href="#">Signup</a>
			</div>
				<input type="submit" name="submit" value="Login">
			</form>
			</div>	
		</div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>