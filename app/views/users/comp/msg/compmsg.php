<!-- sessions set karanna orne -->

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
   <section class = "users">
    <header>
      <div class="content">
        <img src="#" alt="human">
        <div class="details">
          <span>Chris Perera</span>
          <p>Active Now</p>
        </div>
      </div>

    </header>
    <div class="search">
      <span class="text">Select an user to start chat</span>
      <input type="text" placeholder="enter name to search">
      <button><i class="fas fa-search"></i></button>  
    </div>
    <div class="users-list">
    <a href="<?php echo URLROOT; ?>/pages/compchat">
        <div class="content">
          <img src="#" alt="human2">
          <div class="details">
            <span>Human1</span>
            <p>this is test message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>

      <a href="#">
        <div class="content">
          <img src="#" alt="human2">
          <div class="details">
            <span>Human</span>
            <p>this is test message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>
      <a href="#">
        <div class="content">
          <img src="#" alt="human2">
          <div class="details">
            <span>Human</span>
            <p>this is test message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>
      <a href="#">
        <div class="content">
          <img src="#" alt="human2">
          <div class="details">
            <span>Human</span>
            <p>this is test message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>
      <a href="#">
        <div class="content">
          <img src="#" alt="human2">
          <div class="details">
            <span>Human</span>
            <p>this is test message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>
      <a href="#">
        <div class="content">
          <img src="#" alt="human2">
          <div class="details">
            <span>Human</span>
            <p>this is test message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>
      <a href="#">
        <div class="content">
          <img src="#" alt="human2">
          <div class="details">
            <span>Human</span>
            <p>this is test message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>

    </div>
   </section>
 </div>
 <script src="<?php echo URLROOT; ?>/js/msg.js"></script>
</body>