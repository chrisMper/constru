<html>
<head>

  <title>listings</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/supplierDashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

    <div class="main">
      <button class="addbtn"><a href="<?php echo URLROOT; ?>/pages/addlistings">Add New</a></button>
      <div class="listing">
              <?php foreach($data['listings'] as $listings) : ?>
              <div class='listing-card'>
              <div>
                <img src='<?php echo URLROOT; ?>/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3><?php echo $listings->product; ?></h3>
                <div>
                  <div><label for=''>Price</label><input type='text' value='<?php echo $listings->price; ?>' readonly></div>
                  <div><label for=''>Availability</label><input type='text' value='<?php echo $listings->availability; ?>' readonly></div>
                  <div><label for=''>Available Quantity</label><input type='text' value='<?php echo $listings->quantity; ?>' readonly></div>
                </div>
              </div>
              <div>
                 <div></div><label for=''>Delivery within(approx)</label><input type='text' value='<?php echo $listings->time; ?>' readonly>
              </div>
              <div>
                <?php if($data['listings']->user_id ==$_SESSION['user_id']):?>
                
                <div><button class="updatebtn"><a href="<?php echo URLROOT; ?>/pages/updatelistings/<?php echo $data['listings']->id;?>">UPDATE</a></button></div>
                <div><form action="<?php echo URLROOT; ?>/listings/deletelistings/<?php echo $data['listings']->id;?>" method="POST">
                     <button type="submit" class="deletebtn">DELETE</button>
                </form></div>

                <?php endif;?>
              </div>
            </div>
            <?php endforeach; ?>
      </div>
    </div>

    <?php include APPROOT . '/views/inc/footer.php'; ?>
  <!-- <div class="footer">
      
        <div class="footerleft">
            <h5>Sri Lanka| English (US)</h5>
        </div>
        <div class=" footerright">
            <h5>&copy; 2022 Constru+,inc.    Privacy   Terms of Use</h5>
        </div>
      
    </div>  -->

</body>

</html>
