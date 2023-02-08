 <!--navigation bar-->
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css"> -->
     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/search.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <title><?php echo SITENAME; ?></title>
 </head>

 <body>
     <div class="sidebar active">
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
         <ul class="nav-links">
             <!-- <script>
                 let filterCheckboxes = document.querySelectorAll('input[name="filter"]');

                 for (let i = 0; i < filterCheckboxes.length; i++) {
                     filterCheckboxes[i].addEventListener('change', function() {
                         // code to process the selected checkboxes and update the page
                     });
                 }
             </script> -->
             <li>
                 <a href="#" class="active">
                     <i class='bx bx-home'></i>
                     <span class="links_name">Home</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <i class='bx bx-grid'></i>
                     <span class="links_name">Civil Engineering</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <i class='bx bx-message-detail'></i>
                     <span class="links_name">Construction</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <i class='bx bx-news'></i>
                     <span class="links_name">Hardware Products</span>
                 </a>
             </li>
             <li class="log_out">
                 <a href="<?php echo URLROOT; ?>/users/logout">
                     <i class='bx bx-log-out'></i>
                     <span class="links_name">Log out</span>
                 </a>
             </li>
         </ul>
     </div>
     <section class="home-section">
         <nav style="
    width: 100%;
    left: 0;
">
             <div class="sidebar-button">
                 <div class="logo-details">
                     <img id="logoimg" src="<?php echo URLROOT; ?>/img/logo.png">
                     <!-- <span class="logo_name">Constru Plus</span> -->
                 </div>

             </div>
             <div class="top">
                 <ul>
                     <li>Home</li>
                     <li>About</li>
                     <li>Our Services </li>

                 </ul>
             </div>
             <div class="profile-details">

                 <span class="admin_name"></span>
                 <i class='bx bx-bell'></i>
                 <span class="admin_name"></span>
                 <i class='bx bx-cart'></i>
                 <span class="admin_name"></span>
                 <i class='bx bx-user'></i>
             </div>
         </nav>
     