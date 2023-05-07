<html>
<head>

  <title>Items</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/supplierDashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
   <div class="main">

   <a href="<?php echo URLROOT; ?>/items/items" ><i class='bx bx-arrow-back'></i>Back </a>
      <div class="addform">

      <form  method = "post" id="addform" action="<?php echo URLROOT; ?>/items/addItems" enctype="multipart/form-data">

        <table  border="0">
         
          <tr>
             <td>Item</td>
             <td colspan="2"><input type="text" id="item" name="item" required></td>
             <td></td>
          </tr>
          <tr>
             <td colspan="4">Description</td>
          </tr>
          <tr>
             <td colspan="4"><textarea name="description" class="textarea" required></textarea></td>
          </tr>
          <tr>          
            <td>Code</td>
            <td><input type="number" id="code" name="code" required></td>
            <td>Price (Rs.)</td>
            <td><input type="number" id="price" name="price" required></td>
          </tr>
          <tr>
            <td>Available quantity</td>
            <td><input type="number" placeholder="Enter stock amount" id="quantityInStock" name="quantityInStock" required></td>
            <td>Category</td>
            <td><select name="category" required>
              <option value="">Select the category</option>
              <option value="Building materials">Building materials</option>
              <option value="Tools sets">Tools sets</option>
              <option value="Electrical supplies">Electrical supplies</option>
              <option value="Plumbing supplies">Plumbing supplies</option>
              <option value="Housewares">Housewares</option>
              <option value="Garden products">Garden products</option>
              <option value="Cleaning supplies">Cleaning supplies</option>
            </select></td>
          </tr>
          <tr>
             <td colspan="4">Upload pictures</td>
          </tr>
          <tr>
             <td><input type="file" id="itemImage" name="itemImage" required></td>
          </tr>
          

        </table>
        <div class="form-actions">
          <button type="submit" class="submitbtn">Submit</button>
          <button  class="discardbtn"><a href="<?php echo URLROOT; ?>/items/items/items">Discard </a></button>
        </div>
        
      </form>
      
    </div>


    <?php include APPROOT . '/views/inc/footer.php'; ?>
    </div>
  </body>
</html>