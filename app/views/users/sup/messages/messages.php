<html>
<head>
  <title>messages</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/messages.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

  <div class="main">
   <div class="messagebox">
    <div class="searchbar">
      <input type="text" id="search-input" placeholder="Enter name to search...">
      <button id="search-btn">Search</button>
    </div>
      <div class="message">
      
          <?php foreach($data['messages'] as $message) : ?>
            <div class="message_div"><a href="<?php echo URLROOT; ?>/pages/chatbox">
              <div>
                <img src='<?php echo URLROOT; ?>/img/product_img/product_placeholder.png'> 
              </div>
              <div class="details">
                <h3><?php echo $message->name; ?></h3>
                <p><?php echo $message->message; ?></p>
              </div>
             </a>
            </div>
          <?php endforeach; ?>
      </div>
      </div>  
  </div>
  <?php include APPROOT . '/views/inc/footer.php'; ?>


</body>
</html>