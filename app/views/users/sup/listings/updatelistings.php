<html>
<head>

  <title>constru+</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/supplierDashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

      <div class="addform">

      <form  method = "post" id="addform" action="<?php echo URLROOT; ?>/listings/updatelistings/<?php echo $data['id'];?>" >
        <input type="hidden" name="id" value="<?php echo $data['listing']->id; ?>">
        <table  border="0">
         
          <tr>
             <td>Product</td>
             <td colspan="2"><input type="text" id="product" name="product" value="<?php echo $data['listing']->product ?>"></td>
             <td></td>
          </tr>
          <tr>
             <td colspan="4">Description</td>
          </tr>
          <tr>
             <td colspan="4"><textarea name="description" class="textarea" value="<?php echo $data['listing']->description ?>"required></textarea></td>
          </tr>
          <tr>
            <td>Price</td>
            <td><input type="text" id="price" name="price" value="<?php echo $data['listing']->price ?>"required></td>
            <td>Delivery within (approx)</td>
            <td><input type="text" id="time" name="time" value="<?php echo $data['listing']->time ?>" required></td>
          </tr>
          <tr>
            <td>Availability</td>
            <td><input type="text" id="availability" name="availability" value="<?php echo $data['listing']->availability ?>"required></td>
            <td>Available quantity</td>
            <td><input type="number" value="<?php echo $data['listing']->quantity ?>"  id="quantity" name="quantity"></td>
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
            <td colspan="3"><input type="checkbox" id="check" name="check" value="check" >
            I would like to receive a message when stock is less than </td>
            <td></td>
            <td></td>
          </tr>
          <tr>
             <td colspan="4">Upload pictures</td>
          </tr>
          <tr>
            <td><input type="file" id="product_img" name="product_img" value="<?php echo $data['listing']->product_img?>"></td>
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