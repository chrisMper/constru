<html>

<head>

  <title>My Orders</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/sup_orders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 

    <div class="main">
    <a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>
    
      <div class="topnav">
        <a href="<?php echo URLROOT; ?>/sup_myOrders/sup_myOrders/">New</a>
        <a href="<?php echo URLROOT; ?>/sup_myOrders/myOrders_ongoing/">Ongoing</a>
        <a href="<?php echo URLROOT; ?>/sup_myOrders/myOrders_completed/">Completed</a>
        <a class="active">Cancelled</a>
      </div>

    <?php foreach($data['orders'] as $order) : ?>
         <?php if($order->customerEmail ==$_SESSION['user_email']):?>
          <?php foreach($data['items'] as $item) : ?>
          <?php if($order->supplierItemId ==$item->supplierItemId):?>
            <?php foreach($data['Users'] as $users) : ?>
            <?php if($order->email ==$users->email):?>

    <div class="listing">
        
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
                <h5>Supplier : </h5><?php echo $users ->fName; ?> <?php echo $users ->lName; ?>
                <br>
                <br>
                <h5>Cancellation by : </h5><p>Client</p>
                <br>
                <br>
                <h5>Reason to cancel : </h5><?php echo $order ->reason; ?>
                <br>
                <br>
                <h5>Date of cancellation : </h5><?php echo $order ->endedDate; ?>

              </div>
              <div class="listButton">
                <button onclick="document.getElementById('review').style.display='block'; return false;" >Review supplier</button>
              </div>
            </div>
          </table>
       
        
      <div id="review" class="popUp" >
        <span onclick="document.getElementById('review').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="acceptContent" method = "post" action="<?php echo URLROOT; ?>/sup_myOrders/addReview/<?php echo $order->supplierOrderId;?>">
         <table class="acceptTable">
          <tr>
            <td><label for="review">Review supplier</label></td>
            <td><textarea id="review" name="review" rows="4" cols="50"></textarea></td> 
          </tr>
         </table>
        <button type="submit">Review</button>
        </form>
      </div>
      
 
       <script>
      
         var popUp_review = document.getElementById('review');
         
       // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
          if (event.target == popUp_review) {
            popUp_review.style.display = "none";
         }
         }
        </script>
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