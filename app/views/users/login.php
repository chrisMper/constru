<?php
	session_start();
	include("connection.php");
	
	if (isset($_POST['submit'])){
    
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		if(empty($username) || empty($password)){
			echo 'Please fill the required fields';
		}
		else{
			$query = "SELECT * from supplier where username='$username'";
			$result = mysqli_query($con,$query);
	
			if($row = mysqli_fetch_assoc($result)){
	
				$pass = $row['password'];
	
				if($password === $pass){
					
					header("location:supplierDashboard.php");
				}
				else{
					echo "<script>window.alert('Incorrect Password');</script>";
				}
			}
			else{
				echo "<script>window.alert('Incorrect username');</script>";
			}
		  
		}
	}
?>
<html>

<head>
	<title>login</title>
        <link rel="stylesheet" type="text/css" href="../../../public/css/login.css">
</head>

<body>
<form method="post">
	<div class="logo"><img src="../../../public/img/product_img/logo.png" align="left"></div>
	<div class="box">
		<div><input class="placeholder" type="text" name="username" placeholder="Username"></div>
		<div><input class="placeholder1" type="password" name="password" placeholder="Password"></div>
		<div><input type="submit" class="button1" value="login" name="submit"></div>

		<div class="div3">
			<font class="rem"><a href="supplierRegister.php" >Not yet signed?</a></font>

			<font class="forgot"><a href="" >Forgot Password</a></font>
        </div>

	</div>
</form>

</body>

</html>