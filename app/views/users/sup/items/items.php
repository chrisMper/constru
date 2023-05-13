<html>
<head>

  <title>listings</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/supplierDashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

    <div class="main">
    <a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>
      <button class="addbtn"><a href="<?php echo URLROOT; ?>/items/addItems">Add New</a></button>
      <div class="item">
              <?php foreach($data['items'] as $item) : ?>
                <?php if($item->email ==$_SESSION['user_email']):?>
              <div class='item-card'>
              <div>
                <img src='<?php echo URLROOT; ?>/img/itemImage/<?php echo $item->itemImage; ?>' alt='<?php echo URLROOT; ?>/img/itemImage/product_placeholder.png'> 
              </div>
              <div>
                <h3><?php echo $item->item; ?></h3>
                <div>
                  <div><h5><label for=''>Price : </label></h5><input type='text' value='<?php echo $item->price; ?>' readonly></div>
                  <div><h5><label for=''>Available Quantity : </label></h5><input type='text' value='<?php echo $item->quantityInStock; ?>' readonly></div>
                </div>
              </div>
              <div>
                 <div><h5><label for=''>Description : </label></h5><?php echo $item->description; ?></div></br>
                 <div><h5><label for=''>Category : </label></h5><?php echo $item->category; ?></div>
              </div>
              <div>
                
                <div><button class="updatebtn"><a href="<?php echo URLROOT; ?>/items/updateItems/<?php echo $item->supplierItemId;?>">UPDATE</a></button></div>
                <div><form action="<?php echo URLROOT; ?>/items/deleteItems/<?php echo $item->supplierItemId;?>" method="POST" >
                     <button type="submit" class="deletebtn">DELETE</button>
                </form></div>

                <?php endif;?>
              </div>
            </div>
            <?php endforeach; ?>
      </div>
    </div>

    <?php include APPROOT . '/views/inc/footer.php'; ?>

</body>

</html>
