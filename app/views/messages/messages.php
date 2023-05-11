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

    <div class="search">
      <input type="text" placeholder="enter name to search">
      <button><i class="fas fa-search"></i></button>  
    </div>
    <div class="users-list">
    <?php foreach($data['users'] as $user): ?>
    <a href="<?php echo URLROOT; ?>/Messages/chat"> 
        <div class="content users-list"> 
          <img src="#" alt="human2">   <!--must add the image here -->
          <div class="details">
            <div>
            <span><?php echo $user->fName; ?> <?php echo $user->lName; ?> </span>
            <p>this is test message</p>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
          </div>
        </div>  
      </a>
       <?php endforeach; ?> 
      
    </div>
   </section>
 </div>
</main>
<script src="<?php echo URLROOT; ?>/js/message.js"></script>
</body>