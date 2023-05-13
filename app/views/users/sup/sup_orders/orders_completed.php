
<html>

<head>

  <title>Orders</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/sup_orders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 

    <div class="main">

    <a href="<?php echo URLROOT; ?>/sup_orders/orders_ongoing" ><i class='bx bx-arrow-back'></i>Back </a>

      <div class="topnav">
        <a href="<?php echo URLROOT; ?>/sup_orders/sup_orders/">New</a>
        <a href="<?php echo URLROOT; ?>/sup_orders/orders_ongoing/">Ongoing</a>
        <a class="active">Completed</a>
        <a href="<?php echo URLROOT; ?>/sup_orders/orders_cancelled/">Cancelled</a>
      </div>

      <?php foreach($data['orders'] as $order) : ?>
         <?php if($order->email ==$_SESSION['user_email']):?>
          <?php foreach($data['items'] as $item) : ?>
          <?php if($order->supplierItemId ==$item->supplierItemId):?>
            <?php foreach($data['Users'] as $users) : ?>
            <?php if($order->customerEmail ==$users->email):?>

    <div class="listing">
        
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='<?php echo URLROOT; ?>/img/itemImage/<?php echo $item ->itemImage; ?>' alt='<?php echo URLROOT; ?>/img/itemImage/product_placeholder.png'> 
              </div>
              <div class="clientDetails">
                <h3><?php echo $item ->item; ?></h3>
                <br>
                <h5>Name of client : </h5><?php echo $users ->fName; ?> <?php echo $users ->lName; ?>
                </br>
                <br>
                <h5>Ordered quantity : </h5><?php echo $order ->quantity; ?>
                <br>
                <br>
                <h5>Date of completion : </h5><?php echo $order ->endedDate; ?>
                <br>
                <br>
                <h5>Client review : </h5><?php echo $order ->review; ?>
             
            </div>
          </table>
       
    </div>
    <?php endif;?>
       <?php endforeach; ?>
     <?php endif;?>
     <?php endforeach; ?>
    <?php endif;?>
    <?php endforeach; ?>
     
  </div>
 
</body>
</html>