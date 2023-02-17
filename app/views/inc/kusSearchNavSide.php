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
            <!-- <li>
                <a href="#">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Add Orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Ongoin Orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Completed orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Employee</span>
                </a>
            </li> -->
            <!--<li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Favrorites</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>-->
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
            <!-- <div class="profile-details">
            <img src="<?php echo URLROOT; ?>/img/profile.png">
                <span class="admin_name">Profile</span>
            </div> -->
        </nav>

    </section>

    <script src="<?php echo URLROOT; ?>/js/kusNavSide.js"></script>