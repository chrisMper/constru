<?php
session_start();
include("connection.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $id=$_POST['id'];
		$product=$_POST['product'];
    $description =$_POST['description'];
    $price =$_POST['price'];
    $time =$_POST['time'];
    $availability =$_POST['availability'];
    $quantity =$_POST['quantity'];
    $stockamount =$_POST['stockamount'];
    $product_img =$_POST['product_img'];
		
		$check_user = mysqli_query($con, "SELECT id FROM listing where id = '$id' ");

    $result = !empty($product) && !empty($description) && !empty($price) && !empty($time) && !empty($availability) && !empty($quantity) && is_numeric($quantity) && is_numeric($price);

		
		if(!empty($product) && !empty($description) && !empty($price) && !empty($time) && !empty($availability) && !empty($quantity) && is_numeric($quantity) && is_numeric($price))
		{
      echo "in if";
      $file_name=$_FILES['product_img']['name'];
      $file_type=$_FILES['product_img']['type'];
      $file_size=$_FILES['product_img']['size'];
      $tmp_name=$_FILES['product_img']['tmp_name'];

      $upload_to='product_img/';
      move_uploaded_file($temp_name,$upload_to . $file_name);

			//save to database
			$sql = "INSERT INTO listing(product, description, price, time, availability, quantity,stockamount,product_img) VALUES ('$product', '$description', '$price', '$time', '$availability', '$quantity','$stockamount','$product_img')";
			
			mysqli_query($con, $sql);
			
			header("Location: ./listings.php");
			die;
		}
		else
		{
		//	echo "<script>window.alert('Please Enter Valid Information');</script>";
		}
	}
?>

<html>
<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/supplierDashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >

    <div class="navbar">
      <div class="navlogo">
        <img src="../../../public/img/product_img/logo.png" >
      </div>
      <div class="navright">
        
        <a href="profile.html" target="supplierDashboard"> <img src="../../../public/img/product_img/profileicon.png" ></a>
        <a href="cart.html" target="supplierDashboard"> <img src="../../../public/img/product_img/cart.png"></a>
    
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
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/home2.png" >Home</a></li>
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/dashboard.png" >Dashboard</a></li>
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/message.png" >Messages</a>
          <li><a href="engineer.html"><img src="../../../public/img/product_img/order.png" >Orders</a></li>
          <li><a href="construction.html"><img src="../../../public/img/product_img/listings.png" >Listings</a></li>
          <li><a href="hardware.html"><img src="../../../public/img/product_img/cart.png" >My cart</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/myorder.jpg" >My orders</a></li>
          <li><a href="myBookings_ongoing.php"><img src="../../../public/img/product_img/booking-icon.jpg" >My bookings</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/statistics.jpg" >My statistics</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/tender .png" >Tender listings</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/profileicon.png" >Profile</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/calender.png" >Calender</a></li> 
        </ul>
      </div>

      <div class="addform">

      <form  method = "post" action="">

        <table  border="0">
         
          <tr>
             <td>Product</td>
             <td colspan="2"><input type="text" id="product" name="product" required></td>
             <td></td>
          </tr>
          <tr>
             <td colspan="4">Description</td>
          </tr>
          <tr>
             <td colspan="4"><textarea name="description" class="textarea" required></textarea></td>
          </tr>
          <tr>
            <td>Price (Rs.)</td>
            <td><input type="number" id="price" name="price" required></td>
            <td>Delivery within (approx)</td>
            <td><input type="text" id="time" name="time" required></td>
          </tr>
          <tr>
            <td>Availability</td>
            <td><input type="text" id="availability" name="availability" required></td>
            <td>Available quantity</td>
            <td><input type="number" placeholder="Enter stock amount" id="quantity" name="quantity"></td>
          </tr>
          <tr>
            <td>Category</td>
            <td><select>
              <option>Building materials</option>
              <option>Tools sets</option>
              <option>Electrical supplies</option>
              <option>Plumbing supplies</option>
              <option>Housewares</option>
              <option>Garden products</option>
              <option>Cleaning supplies</option>
            </select></td>
          </tr>
          <tr>
            <td colspan="3"><input type="checkbox" id="check" name="check" value="check" >       I would like to receive a message when stock is less than </td>
            <td></td>
            <td></td>
          </tr>
          <tr>
             <td colspan="4">Upload pictures</td>
          </tr>
          <tr>
             <td><input type="file" id="product_img" name="product_img"></td>
          </tr>
          

        </table>
        <div class="form-actions">
        <button type="submit" class="submitbtn">Submit</button>
        <a href="listings.php" class="discardbtn">
          Discard
        </a>
        </div>
        
      </form>
      
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