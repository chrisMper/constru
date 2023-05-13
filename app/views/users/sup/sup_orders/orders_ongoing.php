
<html>

<head>

  <title>Orders</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/sup_orders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 

    <div class="main">

    <a href="<?php echo URLROOT; ?>/sup_orders/sup_orders" ><i class='bx bx-arrow-back'></i>Back </a>

      <div class="topnav">
        <a href="<?php echo URLROOT; ?>/sup_orders/sup_orders/">New</a>
        <a class="active">Ongoing</a>
        <a href="<?php echo URLROOT; ?>/sup_orders/orders_completed/">Completed</a>
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
                  <br>
                  <br>
                  <h5>Completion Date : </h5><?php echo $order ->dueDate; ?>
                  <br>
                  <br>
                  <h5>Client : </h5><?php echo $users ->fName; ?><?php echo $users ->lName; ?>
                  <br>
                  <br>
                  <h5>Ordered quantity : </h5><?php echo $order ->quantity; ?>
                  <br>
                  <br>
                  <h5>Delivary Address : </h5><?php echo $order ->delivaryAddress; ?>
                </div>
                <div class="listButton">
                  <button><a href="<?php echo URLROOT; ?>/sup_orders/addOrders_ongoing/<?php echo $order->supplierOrderId;?>">Completed</a></button>
                  <button onclick="document.getElementById('cancel').style.display='block'; return false;">Cancel</button>
                </div>
              </div>
            </tbody>
          </table>
      
                   

      <div id="cancel" class="popUp" >
        <span onclick="document.getElementById('cancel').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="acceptContent"  method = "post" action="<?php echo URLROOT; ?>/sup_orders/addToOrders_cancelled/<?php echo $data['orders']->supplierOrderId;?>" enctype="multipart/form-data">
          <table class="acceptTable">
            <tr>
              <td><label for="reason">Mention the reasons to cancel</label></td>
              <td><textarea id="reason" name="reason" rows="4" cols="50" required></textarea></td> 
            </tr>
          </table>
        </form>
          <p><h5>A message will be sent to the client on the cancellation.</h5></p>
         <button type="submit">Confirm </button>
      </div>
 
     <script>
   
       var popUp = document.getElementById('cancel');

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