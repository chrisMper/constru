<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/maducomp.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/madunavbar.css">
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

    <div class="table1">
        <table>
            <tr>
                <td></td>
                <td colspan="2">
                    <font color="red">This order has been cancelled by you</font>
                </td>
            </tr>
        </table>
        <table>
            <tr height="40px">
                <td rowspan="4" width="200px">
                    <center><img src="../../../public/img/cons.jpg" height="130px" width="150px"></center>
                </td>
                <td width="450px">3D modeling</td>
                <td width="200px"></td>
            </tr>
            <tr height="20px">
                <td width="450px"></td>
                <td rowspan="2" width="200px">
                    <div>
                        <center><button onclick="openForm()">Completed</button></center>
                    </div>
                    <div>
                        <center><button>Cancel</button></center>
                    </div>




                    <div class="form-popup" id="myForm">
                        <form action="#" class="form-container">


                            <label for="email"><b>Reasons for the Cancellation</b></label>
                            <input type="text" placeholder="Type here" name="reason" required>
                            <br>
                            <center>
                                <p>A message will be sent to the customer on the cancellation. Until the acceptance of the customer the cancellation will not be valid.</p>
                                <div>
                                    <a href="cancelled_order.html">
                                        <button type="button" class="btn cancel" onclick="closeForm()">Confirm </button></a>
                                        <button type="button" class="btn cancel" onclick="closeForm()">Close </button></a>
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

                </td>
            </tr>
            <tr height="100px">
                <td width="450px">

                    <div class="progress__container">
                        <div class="progress__bar js-bar"></div>
                        <div class="progress__circle js-circle active">
                            <span class="progress__span"><b>1</b></span>
                        </div>&#10230;
                        <div class="progress__circle js-circle">
                            <span class="progress__span"><b>2</b></span>
                        </div>&#10230;
                        <div class="progress__circle js-circle">
                            <span class="progress__span"><b>3</b></span>
                        </div>&#10230;
                        <div class="progress__circle js-circle">
                            <span class="progress__span"><b>4</b></span>
                        </div>
                    </div>


                </td>

            </tr>
            <tr height="20px">
                <td width="450px"> </td>
                <td width="200px"></td>
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="<#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>