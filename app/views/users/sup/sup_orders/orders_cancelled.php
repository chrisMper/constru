
<html>

<head>

  <title>Orders</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/sup_orders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 

    <div class="main">

    <a href="<?php echo URLROOT; ?>/sup_orders/orders_completed" ><i class='bx bx-arrow-back'></i>Back </a>

      <div class="topnav">
        <a href="<?php echo URLROOT; ?>/sup_orders/sup_orders/">New</a>
        <a href="<?php echo URLROOT; ?>/sup_orders/orders_ongoing/">Ongoing</a>
        <a href="<?php echo URLROOT; ?>/sup_orders/orders_completed/">Completed</a>
        <a class="active">Cancelled</a>
      </div>

      <?php foreach($data['orders'] as $order) : ?>
         <?php if($order->email ==$_SESSION['user_email']):?>
          <?php foreach($data['items'] as $item) : ?>
          <?php if($order->supplierItemId ==$item->supplierItemId):?>
            <?php foreach($data['Users'] as $users) : ?>
            <?php if($order->customerEmail ==$users->email):?>

    <div class="listing">
        <form method="post">
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='<?php echo URLROOT; ?>/img/itemImage/<?php echo $item ->itemImage; ?>' alt='<?php echo URLROOT; ?>/img/itemImage/product_placeholder.png'> 
              </div>
              <div>
              <div class="clientDetails">
                <h3><?php echo $item ->item; ?></h3>
                <br>
                <br>
                <br>
                <h5>Client : </h5><?php echo $users ->fName; ?> <?php echo $users ->lName; ?>
                <br>
                <br>
                <h5>Cancellation by : </h5>Client
                <br>
                <br>
                <h5>Reason to cancel : </h5><?php echo $order ->reason; ?>
                <br>
                <br>
                <h5>Date of cancellation : </h5><?php echo $order ->endedDate; ?>
                <br>
                <br>
                <h5>Client review : </h5><?php echo $order ->review; ?>
              </div>
            </div>
          </table>
        </form>

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