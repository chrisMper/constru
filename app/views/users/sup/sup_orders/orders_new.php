<html>

<head>

  <title>Orders</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/sup_orders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

<div class="main">

<a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>

 <div class="registerbox">
  <div class="topnav">
   <a class="active">New</a>
   <a href="<?php echo URLROOT; ?>/sup_orders/orders_completed/<?php echo $data['orders']->supplierOrderId;?>">Completed</a>
   <a href="<?php echo URLROOT; ?>/sup_orders/orders_cancelled/<?php echo $data['orders']->supplierOrderId;?>">Cancelled</a>
  </div>
    
        <?php foreach($data['orders'] as $order) : ?>
         <?php if($order->email ==$_SESSION['user_email']):?>
     <div class="listing">
        

          <table>

            <tbody>
            <div class='listing-card' style="background: #ddd">
              <div>
                <img src='<?php echo URLROOT; ?>/img/itemImage/<?php echo $data['items'] ->itemImage; ?>' alt='<?php echo URLROOT; ?>/img/itemImage/product_placeholder.png'> 
              </div>
              <div>
                <h3><?php echo $data['items'] ->item; ?></h3><?php echo $data['items'] ->code; ?>
              </div>
              <div>
                <button>Contact</button>
                <button onclick="document.getElementById('accept').style.display='block'; return false;" >Accept</button>
                <button onclick="document.getElementById('reject').style.display='block'; return false;">Reject</button>
              </div>
            </div>
          </table>
      
                   
        
              
        <div id="accept" class="popUp" >
         <span onclick="document.getElementById('accept').style.display='none'" class="close" title="Close Modal">&times;</span>
         <form class="acceptContent">
          <table class="acceptTable">
           <tr>
            <td><label for="completionDate">Enter an estimated completion date</label></td>
            <td><input type="date" name="dueDate" id="dueDate"></td>
           </tr>
          </table>
         </form>
         <p><h5>A message will be sent to the client that you have accepted the request on this date.</h5></p>
         <button><a href="orders_ongoing.php">Accept</a></button>
        </div>
 
        <script>
       
         var popUp = document.getElementById('accept');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
          if (event.target == popUp) {
          popUp.style.display = "none";
         }
        }
        </script>

       <div id="reject" class="popUp" >
        <span onclick="document.getElementById('reject').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="acceptContent">
         <table class="acceptTable">
          <tr>
            <td><label for="reason">Mention the reason to reject</label></td>
            <td><textarea id="reason" name="reason" rows="4" cols="50"></textarea></td> 
          </tr>
         </table>
        </form>
        <button><a href="orders_cancelled.php">Reject</a></button>
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

    </div>
   </div> 
 
</body>
</html>