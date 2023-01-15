<?php include APPROOT . '/views/inc/ntnavtop.php'; ?>
<?php include APPROOT . '/views/inc/navbarlanding.php'; ?>

<main style="margin-inline: 0;">
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img class="sliderImg" src="<?php echo URLROOT; ?>/img/land1.png" style="width:100%">
      <!-- <div class="text">Caption Text</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img class="sliderImg" src="<?php echo URLROOT; ?>/img/land2.png" style="width:100%">
      <!-- <div class="text">Caption Two</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img class="sliderImg" src="<?php echo URLROOT; ?>/img/land3.png" style="width:100%">
      <!-- <div class="text">Caption Three</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img class="sliderImg" src="<?php echo URLROOT; ?>/img/land4.png" style="width:100%">
      <!-- <div class="text">Caption Three</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 5</div>
      <img class="sliderImg" src="<?php echo URLROOT; ?>/img/joinus.png" style="width:100%">
      <!-- <div class="text">Caption Three</div> -->
    </div>
    <div class="dots">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>

  <div class="servicegrid">
  <div class="grid-item">
    <div class="card">
      <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
      <div class="container">
        <h4><b>Engineers</b></h4>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="card">
      <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
      <div class="container">
        <h4><b>Construction Companies</b></h4>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="card">
      <img class="dashimg" src="<?php echo URLROOT; ?>/img/msg.png" alt="msg img" style="width:100%">
      <div class="container">
        <h4><b>Goods Suppliers</b></h4>
      </div>
    </div>
  </div>
  </div>
</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>