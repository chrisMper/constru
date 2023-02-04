<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/msg.css">
<body>
<!------------------------------ navbar ------------------------------------>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>

<!------------------------------------ msg ---------------------------------------------->
<main>
<!DOCTYPE html>
<html lang="en">
<!-- <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/bf10032598.js" crossorigin="anonymous"></script>
</head> -->
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <a href="<?php echo URLROOT; ?>/msg/msg" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <!-- <img src="php/images/<?php echo $user['img']; ?>" alt=""> -->
        <div class="details">
          <span><?php echo $user['FName']." ".$user['LName']; ?></span>
          <p><?php echo $user['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area" autocomplete="off">
        <input type="text" name="outgoing_id" value="<?php echo $_SESSION['user_email']; ?>" hidden>
        <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here...">
        <button><i class="fa-solid fa-paper-plane"></i></button>
      </form>
    </section>
  </div>
  <script src="javascript/chat.js"></script>
</body>
</html>

 



		
