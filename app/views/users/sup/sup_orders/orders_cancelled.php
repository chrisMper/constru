
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
                <h3><?php echo $item ->item; ?></h3></br>
                <h5>Name of client</h5></br>
                <h5>Cancellation by</h5></br>
                <h5>Reason to cancel</h5></br>
                <h5>Date of cancellation</h5></br>

              </div>
              <div>
                <button onclick="document.getElementById('review').style.display='block'; return false;" >Customer review</button>
                </br>
                <p><?php echo $users ->fName; ?><?php echo $users ->lName; ?></p>
                <p>Client</p>
                <p><?php echo $order ->reason; ?></p>
                <p><?php echo $order ->endedDate; ?></p>
              </div>
            </div>
          </table>
        </form>
        
        <div id="review" class="popUp" >
            <span onclick="document.getElementById('review').style.display='none'" class="close" title="Close Modal">&times;</span>
            
              <table class="acceptTable">
                <tr>
                  <td><h2><?php echo $users ->fName; ?><?php echo $users ->lName; ?></h2></td>
                </tr>
                <tr>
                  <td><h5>Cancelled date</h5></td>
                  <td><?php echo $order ->endedDate; ?></td>
                </tr>
                <tr>
                  <td><h5>Reason to cancel</h5></td>
                  <td><?php echo $order ->reason; ?></td>
                </tr>
                <tr>
                  <td><h5>Client review</h5></td>
                  <td>nark gnqkgne rnbedreo kfjgorgj mlvnvv vkee ns sdvw dvwseve</td>
                </tr>
               

              </table>
          
           <button onclick="location.reload();">Back</button>
         </div>
 
       <script>
      
         var popUp = document.getElementById('review');

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