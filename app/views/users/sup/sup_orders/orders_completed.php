
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
              <div>
                <h3><?php echo $item ->item; ?></h3></br>
                <h4>Name of client</h4></br>
                <h5>Ordered quantity : </h5>
                <h5>Date of completion</h5>
              </div>
              <div>
                <button onclick="document.getElementById('view').style.display='block'; return false;" >View customer review</button>
                </br>
                <p><?php echo $users ->fName; ?><?php echo $users ->lName; ?></p>
                <p><?php echo $order ->quantity; ?></p>
                <p><?php echo $order ->endedDate; ?></p>
              </div>
            </div>
          </table>
       
        

        <div id="view" class="popUp_review" >
            <span onclick="document.getElementById('view').style.display='none'" class="close" title="Close Modal">&times;</span>
            
              <table class="acceptTable">
                <tr>
                  <td><h5>Client</h5></td>
                  <td><h2><?php echo $users ->fName; ?><?php echo $users ->lName; ?></h2></td>
                </tr>
                <tr>
                  <td><h5>Completion date</h5></td>
                  <td><?php echo $order ->endedDate; ?></td>
                </tr>
                <tr>
                  <td><h5>Due date</h5></td>
                  <td><?php echo $order ->dueDate; ?></td>
                </tr>
                <tr>
                  <td><h5>Client review</h5></td>
                  <td>nark gnqkgne rnbedreo kfjgorgj mlvnvv vkee ns sdvw dvwseve</td>
                </tr>
               

              </table>
          
           <button onclick="location.reload();">Back</button>
         </div>
 
       <script>
      
         var popUp_review = document.getElementById('view');
         

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