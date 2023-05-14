<!DOCTYPE html>
 <html lang="en">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/kusSearchNavSide.css" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/search.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/cv.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/portfolio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="C:\xampp\htdocs\constru\fontawesome-free-6.3.0-web/css/font-awesome.min.css">
<body>
    <!--navigation bar left-->
    <div class="sidebar">
        <div class="logo-details">
            <img class="navlogo" src="<?php echo URLROOT; ?>/img/logo.png">
            <!-- <span class="logo_name">Constru+</span> -->
        </div>
        <ul class="nav-links">
            <li class="filter_section">
            <form class="filter">
             <p>Sort by,</p>
             <div class="filterItem">
             <input type="checkbox" id="filter_awardLevel" name="filter" value="awardlevel">
             <label for="filter_awardLevel">Award Level</label>
             </div>
             <br>
             <div class="filterItem">
             <input type="checkbox" id="filter_overallRating" name="filter" value="overallRating">
             <label for="filter_overallRating">Overall Rating</label>
             </div>
             <div class="filterItem">
             <input type="checkbox" id="filter_serviceCompletion" name="filter" value="serviceCompletion">
             <label for="filter_serviceCompletion">Service Completion</label>
             </div>
             <br>
             <div class="filterItem">
             <input type="checkbox" id="filter_friendliness" name="filter" value="friendliness">
             <label for="filter_friendliness">Friendliness</label>
             </div>
             <br>
             <div class="filterItem">
             <input type="checkbox" id="filter_responseTime" name="filter" value="responseTime">
             <label for="filter_responseTime">Response Time</label>
             </div>
             <br>
             <div class="filterItem">
             <input type="checkbox" id="filter_punctuality" name="filter" value="punctuality">
             <label for="filter_punctuality">Punctuality</label>
             </div>
             <br>
             <div class="filterItem">
             <input type="checkbox" id="filter_projectsCompleted" name="filter" value="projectsCompleted">
             <label for="filter_projectsCompleted">No. of Projects Completed</label>
             </div>
             <br>
             <div class="filterItem">
             <input type="checkbox" id="filter_activeDays" name="filter" value="activeDays">
             <label for="filter_activeDays">No of Active Days</label>
             </div>
             <br>
             <div class="filterItem">
             <input type="checkbox" id="filter_cancellations" name="filter" value="cancellations">
             <label for="filter_cancellations">No. of cancellations</label>
             </div>
             <br>


         </form>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="links_name">Civil Engineering</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="links_name">Construction</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-truck" aria-hidden="true"></i>
                    <span class="links_name">Hardware Supplies</span>
                </a>
            </li>

            <li>
                <a href="<?php echo URLROOT; ?>/Pages/cusDashboard/">
                <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>


            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
            </div>
            <div >
                <ul>
                    <li>
                        <a  href="#">Home</a>
                    </li>
                    <li>
                        <a  href="#">Join Us</a>
                    </li>
                    <li>
                        <a style="color:black" href="<?php echo URLROOT; ?>/users/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

    </section>

  
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

  <script src="<?php echo URLROOT; ?>/js/kusNavSide.js"></script>
  </body>
