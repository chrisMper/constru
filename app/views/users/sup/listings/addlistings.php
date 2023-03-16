<html>
<head>

  <title>listings</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/supplierDashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
<a href="<?php echo URLROOT; ?>/listings" ><i class='bx bx-arrow-back'></i>Back </a>
      <div class="addform">

      <form  method = "post" id="addform" action="<?php echo URLROOT; ?>/listings/addlistings">

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
            <td><input type="number" placeholder="Enter stock amount" id="quantity" name="quantity" required></td>
          </tr>
          <tr>
            <td>Category</td>
            <td><select required>
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
             <td><input type="file" id="product_img" name="product_img" required></td>
          </tr>
          

        </table>
        <div class="form-actions">
        <button type="submit" class="submitbtn">Submit</button>
        <button  class="discardbtn"><a href="<?php echo URLROOT; ?>/pages/listings/listings">Discard </a></button>
        </div>
        
      </form>
      
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