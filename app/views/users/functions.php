<?php

function check_login($con)
{
	if(isset($_SESSION['name']))
	{
		$id = $_SESSION['Username'];
		$query = "select * from supplier where name = '$id' limit 1";
		
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//redirect to login
	header("Location:login.php");
	die;
}


  require "connection.php";

  function connect(){

   $mysqli = new mysqli;
  }
  function register(){

  }
  function login(){

  }
  function logout(){

  }
  function resetpwd(){

  }
  function accountdlt(){

  }