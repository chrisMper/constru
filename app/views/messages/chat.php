<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/msg.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<body>
<!------------------------------ navbar ------------------------------------>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>

<!-- -----------------------------list-container------------------------------- -->
<main>

<div class="wrapper">
   <section class = "chat-area">
    <header>
      <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="#" alt="human">
        <div class="details">
          <span>Chris Perera</span>
          <p>Active Now</p>
        </div>
    </header>
      <div class="chat-box">
        <div class="chat outgoing">
          <div class="details">
            <p><?php echo $chats->incoming_msg_id; ?></p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="#" alt="h">
          <div class="details">
            <p>This is an incoming message This is an incoming message This is an incoming message</p>
          </div>
        </div>

        <div class="chat outgoing">
          <div class="details">
            <p>This is an outgoing message This is an outgoing messageThis is an outgoing message</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="#" alt="h">
          <div class="details">
            <p>This is an incoming message This is an incoming message This is an incoming message</p>
          </div>
        </div>
        <div class="chat outgoing">
          <div class="details">
            <p>This is an outgoing message This is an outgoing messageThis is an outgoing message</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="#" alt="h">
          <div class="details">
            <p>This is an incoming message This is an incoming message This is an incoming message</p>
          </div>
        </div>
        <div class="chat outgoing">
          <div class="details">
            <p>This is an outgoing message This is an outgoing messageThis is an outgoing message</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="#" alt="h">
          <div class="details">
            <p>This is an incoming message This is an incoming message This is an incoming message</p>
          </div>
        </div>

      </div>
      <form action="#" class="typing-area">
        <input type="text" placeholder="type a message here...">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
   </section>
 </div>
</body>