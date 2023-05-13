<html>

<head>

  <title>My orders</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/myorders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

<div class="main">
 
<a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>
  <div class="topnav">
     <a class="active">New</a>
     <a href="<?php echo URLROOT; ?>/sup_orders/myOrders_ongoing/">Ongoing</a>
     <a href="<?php echo URLROOT; ?>/sup_orders/myOrders_completed/">Completed</a>
     <a href="<?php echo URLROOT; ?>/sup_orders/myOrders_cancelled/">Cancelled</a>
  </div>
    
    <?php foreach($data['orders'] as $order) : ?>
      <?php if($order->email ==$_SESSION['user_email']):?>
        <?php foreach($data['items'] as $item) : ?>
          <?php if($order->supplierItemId ==$item->supplierItemId):?>
           <?php foreach($data['Users'] as $users) : ?>
            <?php if($order->email ==$users->email): ?>
    
     <div class="listing">
       
          <table>

            <tbody>
            
            <div class="listing-card">
              <div>
                <img src='<?php echo URLROOT; ?>/img/itemImage/<?php echo $item ->itemImage; ?>' alt='<?php echo URLROOT; ?>/img/itemImage/product_placeholder.png'> 
              </div>
              <div>
                <h3><?php echo $item->item; ?></h3><?php echo $item ->code; ?>
                <h5>Supplier : </h5><?php echo $users ->fName; ?><?php echo $users ->lName; ?>
              </div>
              <div>
                <button>Contact</button>
                <button onclick="document.getElementById('reject').style.display='block'; return false;">Cancel</button>
              </div>
            </div>
          </table>          
        
            

       <div id="reject" class="popUp" >
        <span onclick="document.getElementById('reject').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="acceptContent" method = "post" action="<?php echo URLROOT; ?>/sup_orders/addToOrders_cancelled/<?php echo $order->supplierOrderId;?>">
         <table class="acceptTable">
          <tr>
            <td><label for="reason">Mention the reason to reject</label></td>
            <td><textarea id="reason" name="reason" rows="4" cols="50"></textarea></td> 
          </tr>
         </table>
        <button type="submit">Cancel</button>
        </form>
      </div>
 
      <script>

        var popUp = document.getElementById('reject');

         // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
          if (event.target == popUp) {
          popUp.style.display = "none";
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