<?php

include("connection.php");
session_start();
$username=$_GET['updateid'];
$sql = "SELECT * FROM listing WHERE username = '$username'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$product=$row['product'];
$description =$row['description'];
$price =$row['price'];
$time =$row['time'];
$availability =$row['availability'];
$quantity =$row['quantity'];
$stockamount =$row['stockamount'];
$product_img =$row['product_img'];

if (isset($_POST['submit'])) {
	  $product=$_POST['product'];
    $description =$_POST['description'];
    $price =$_POST['price'];
    $time =$_POST['time'];
    $availability =$_POST['availability'];
    $quantity =$_POST['quantity'];
    $stockamount =$_POST['stockamount'];
    $product_img =$_POST['product_img'];

	$check_user = mysqli_query($con, "SELECT id FROM listing WHERE id = '$id' ");
	
	if(!empty($product) && !empty($description) && !empty($price) && !empty($time) && !empty($availability) && !empty($quantity) && !is_numeric($quantity) && !is_numeric($price))
	{
		//save to database
		$query = "INSERT INTO listing(product, description, price, time, availability, quantity,stockamount,product_img) VALUES ('$product', '$description', '$price', '$time', '$availability', '$quantity','$stockamount','$product_img')";
		
		mysqli_query($con, $query);
		
		header("Location:listing.php");
		die;
	}
	else
	{
		echo "<script>window.alert('Please Enter Required Information');</script>";
	}


$sql = "update listing set product='$product', description='$description', price='$price', time='$time', availability='$availability', quantity='$quantity',stockamount='$stockamount',product_img='$product_img' where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	header('location:listings.php');
	//echo "updated";
}else{
	die(mysqli_error($con));
}

}

 ?>
 <html>
<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="supplierDashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >

    <div class="navbar">
      <div class="navlogo">
        <img src="logo.jpg" >
      </div>
      <div class="navright">
        
        <a href="profile.html" target="supplierDashboard"> <img src="profileicon.png" ></a>
        <a href="cart.html" target="supplierDashboard"> <img src="cart.png"></a>
       
      </div>
      <div class="navcenter">

        <ul>
          <li><h2><a href="landingpage.html">Home</a></h2></li>
          <li><h2><a href="aboutus.html">About Us</a></h2></li>
          <li><h2>Our Services</h2>
          
            <div class="servicemenu">
              <ul>
                <li><b><a href="engineer.html">Civil Engineering</a></b></li>
                <li><b><a href="construction.html">Construction</a></b></li>
                <li><b><a href="hardware.html">Hardware Products & Supplies</a></b></li>
                <li><b><a href="tender.html">Tendering</a></b></li>
              </ul>
            </div>
          </li> 
        </ul>
      </div>
      
    </div>  


    <div class="table-container">
      <div class="sidebar">
        <ul>
          <li><a href="landingpage.html"><img src="home.png" >Home</a></li>
          <li><a href="landingpage.html"><img src="dashboard.png" >Dashboard</a></li>
          <li><a href="landingpage.html"><img src="message.png" >Messages</a>
          <li><a href="engineer.html"><img src="order.png" >Orders</a></li>
          <li><a href="construction.html"><img src="listings.png" >Listings</a></li>
          <li><a href="hardware.html"><img src="cart.png" >My cart</a></li>
          <li><a href="tender.html"><img src="myorder.jpg" >My orders</a></li>
          <li><a href="tender.html"><img src="booking-icon.jpg" >My bookings</a></li>
          <li><a href="tender.html"><img src="statistics.jpg" >My statistics</a></li>
          <li><a href="tender.html"><img src="tender .png" >Tender listings</a></li>
          <li><a href="tender.html"><img src="profileicon.png" >Profile</a></li>
          <li><a href="tender.html"><img src="calender.png" >Calender</a></li> 
        </ul>
      </div>

      <div class="addform">

      <form  method = "post">

        <table  border="1">
         
          <tr>
             <td>Product</td>
             <td colspan="2"><input type="text" id="product" name="product"></td>
             <td></td>
          </tr>
          <tr>
             <td colspan="4">Description</td>
          </tr>
          <tr>
             <td colspan="4"><textarea name="description"></textarea></td>
          </tr>
          <tr>
            <td>Price</td>
            <td><input type="text" id="price" name="price"></td>
            <td>Delivery within (approx)</td>
            <td><input type="text" id="time" name="time"></td>
          </tr>
          <tr>
            <td>Availability</td>
            <td><input type="text" id="availability" name="availability"></td>
            <td>Available quantity</td>
            <td><input type="text" id="quantity" name="quantity"></td>
          </tr>
          <tr>
            <td colspan="2"><input class="check" type="checkbox" id="check" name="check" value="check" />
            I would like to receive a message when stock is less than </td>
            <td><input type="text" placeholder="Enter stock amount" id="stockamount" name="stockamount"> </td>
            <td></td>
          </tr>
          <tr>
             <td colspan="4">Upload pictures</td>
          </tr>
          <tr>
             <td><input type="img" id="product_img" name="product_img"></td>
             <td><input type="img" id="product_img" name="product_img"></td>
             <td><input type="img" id="product_img" name="product_img"></td>
             <td><input type="img" id="product_img" name="product_img"></td>
          </tr>
          <tr>
             <td><input type="submit">Upload</td>
             <td colspan="4"></td>
          </tr>

        </table>
      </form>
      <div class="submit-discard_btn"> 
				<button type="button" class="submitbtn">Submit<br>
				<a href="listings.php" ><button type="button" class="discardbtn">Discard</a><br>
	  </div>
    </div>

  </div>


    <div class="footer">
      
        <div class="footerleft">
            <h5>Sri Lanka| English (US)</h5>
        </div>
        <div class=" footerright">
            <h5>&copy; 2022 Constru+,inc.    Privacy   Terms of Use</h5>
        </div>
      
    </div>

  </body>
</html>