<!------------------------------ navbar ------------------------------------>
<?php include APPROOT . '/views/inc/SearchNavSide.php'; ?>
<!-- -----------------------------list-container------------------------------- -->
<div class="searchbody">
  <div class="searchContainer">
    <form class="searchBar1" action="#">
      <input type="text" placeholder="   Search products, suppliers and more...">
      <button class=searchbutton type="submit">Search</button>
    </form>
  </div>
  <?php foreach ($data['listings'] as $listing) : ?>
    <div class="list-container">
      <div class="left-mid">
        <div class="left-col">
          <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $listing->Photos; ?>">
          <div class="level">
            <span>Level 1</span>
          </div>
        </div>
        <div class='mid-col'>
          <p class='topic'><?php echo $listing->Title; ?></p>
          <p class='decription'></p>

          <div class="serviceProvider">
            <img src="<?php echo URLROOT; ?>/img/mycart.png">
            <?php foreach ($data['serviceProvider'] as $serviceProvider) :
              if ($serviceProvider->email == $listing->UserEmail) : ?>
                <span><?php echo $serviceProvider->fName;
                      echo " "; ?><?php echo $serviceProvider->lName; ?></span>
            <?php endif;
            endforeach; ?>
          </div>


          <div class="discount">
            <span>10% offers are mentioned here</span>
          </div>
        </div>
      </div>
      <div class='right-col'>
        <div class="rating">
          <span><?php echo $listing->visiterCount; ?> views</span>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <div class="row">
          <div class="column">Service Completion</div>
          <div class="column">4.7</div>
        </div>
        <div class="row">
          <div class="column">Friendliness</div>
          <div class="column">4.7</div>
        </div>
        <div class="row">
          <div class="column">Punctuality</div>
          <div class="column">4.7</div>
        </div>
        <div class="row">
          <div class="column">Response Time</div>
          <div class="column">24 hrs</div>
        </div>
        <div class="row">
          <div class="column">No. of Orders Completed</div>
          <div class="column">100</div>
        </div>
        <div class="row">
          <div class="column">No. of Active Days</div>
          <div class="column">180</div>
        </div>
        <div class="row">
          <div class="column">Cancellations</div>
          <div class="column">3</div>
        </div>

        <a href="<?php echo URLROOT; ?>/analysis/displayAdd/<?php echo $listing->PostId; ?>"><button type="submit" class="viewDetailsBtn">View Service Details</a>
      </div>
    </div>



  <?php endforeach; ?>


  </section>
  </body>
