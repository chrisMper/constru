<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../public/css/new_comp.css">
    <link rel="stylesheet" href="../../../public/css/new_navbar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>My Orders</title>
</head>

<body>
    <div class="top">

        <nav>

            <div class="toptop">



                <button class="button1">Home</button>
                <button class="button1">About</button>
                <button class="button1">Our Services </button>


            </div>
            <div class="profile-details">

                <span class="admin_name"></span>
                <i class='bx bx-bell'></i>
                <span class="admin_name"></span>
                <i class='bx bx-cart'></i>
                <span class="admin_name"></span>
                <i class='bx bx-user'></i>
            </div>
            <br />
            <hr>
        </nav>

    </div>
    <div class="middle">
        <button class="mid-but">
            <font color="white">New</font>
        </button>


    </div>

    <div class="second">
        <button class="mid-but">
            <font color="white">Ongoing</font>
        </button>


    </div>

    <div class="third">
        <button class="mid-but">
            <font color="white">Completed</font>
        </button>


    </div>

    <div class="fourth">
        <button class="mid-but">
            <font color="white">Cancelled</font>
        </button>


    </div>



    <div class="table2">
        <table>
            <tr height="40px">
                <td rowspan="4" width="200px">
                    <center><img src="../../../public/img/cons.jpg" height="130px" width="150px"></center>
                </td>
                <td width="450px">3D modeling</td>
                <td rowspan="3" width="200px">
                    <div class="tbtn">
                        <center>
                            <div class="date">Date of completion : 2023.04.12</div>
                            <div></div>

                            <div class="complete-rate">
                                <div class="percentage">
                                    78%
                                </div>
                            </div>
                        </center>
                </td>
            </tr>
            <tr height="30px">
                <td width="450px"></td>

            </tr>
            <tr height="40px">
                <td width="450px"><img src="../../../public/img/stage.png" height="80px"></td>

            </tr>
            <tr height="20px">
                <td width="450px">.......</td>
                <td rowspan="2" width="200px">
                    <center><button class="reason-btn">
                            <font color="#9d03cc" onclick="openForm()">View Reason</font>
                        </button></center>
                    <div class="form-popup" id="myForm">
                        <form action="/action_page.php" class="form-container">


                            <label for="email">
                                <center>client10 </center>
                            </label>
                            <label for="email"> client10 </label><br>
                            <label for="email"> client10 </label>
                            <input type="text" placeholder="Type here" name="reason" required>
                            <br>
                            <center>
                                <p>A message will be sent to the customer on the cancellation. Until the acceptance of
                                    the customer the cancellation will not be valid.</p>
                                <div>
                                    <button type="button" class="btn cancel" onclick="closeForm()">Confirm</button>
                                </div>
                            </center>
                        </form>
                    </div>

                    <script>
                        function openForm() {
                            document.getElementById("myForm").style.display = "block";
                        }

                        function closeForm() {
                            document.getElementById("myForm").style.display = "none";
                        }
                    </script>
                </td>td>


            </tr>
            <tr>
                <td></td>
                <td width="450px">
                    <font color="red">Cancelled by you </font>
                </td>

                </td>
            </tr>
        </table>



    </div>



    <div class="sidebar active">

        <ul class="nav-links">

            <li>
                <a href="#">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/users/dashboard">
                    <i class='bx bx-grid'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message-detail'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-news'></i>
                    <span class="links_name">Projects</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/listings/listings">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">My listings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book'></i>
                    <span class="links_name">My Cart</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-detail'></i>
                    <span class="links_name">My Orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-repost'></i>
                    <span class="links_name">My bookings</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/users/stats">
                    <i class='bx bx-bar-chart'></i>
                    <span class="links_name">My Statistics</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
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