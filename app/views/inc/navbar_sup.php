<html>
<head>
  <title>messages</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/navbar_sup.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class= "left-top-navbar">
  <div class="navbar">
      <div class="navlogo">
        <img src="<?php echo URLROOT; ?>/img/itemImage/logo.png" >
      </div>
      <div class="navright">
        
        <a href="<?php echo URLROOT; ?>/sup_profile/sup_profile"> <i class='bx bxs-user-circle'  ></i></a>
    
      </div>
      <div class="navcenter">

        <ul>
          <li><a href="landingpage.html">Home</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          <li>Our Services
          
            <div class="servicemenu">
              <ul>
                <li><a href="engineer.html">Civil Engineering</a></li>
                <li><a href="construction.html">Construction</a></li>
                <li><a href="hardware.html">Hardware Products & Supplies</a></li>
                <li><a href="tender.html">Tendering</a></li>
              </ul>
            </div>
          </li> 
        </ul>
      </div>
      
    </div>  


    <div class="table-container">
      <div class="menu">
        <i class='bx bx-menu' id="btn" ></i>
      </div>
       
      <div class="sidebar">
        <ul>
          <li><a href="<?php echo URLROOT; ?>/pages/landingpage"><i class='bx bxs-home'></i><span class="name">Home</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/pages/supplier"><i class='bx bxs-dashboard'></i><span class="name">Dashboard</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/pages/messages"><i class='bx bxs-message'></i><span class="name">Messages</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/pages/orders"><i class='bx bxs-notepad'></i><span class="name">Orders</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/items/items"><i class='bx bx-list-ul'></i><span class="name">Items</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/pages/cart"><i class='bx bxs-cart'></i><span class="name">My cart</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/pages/myOrders"><i class='bx bx-detail'></i><span class="name">My orders</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/pages/bookings"><i class='bx bx-receipt'></i><span class="name">My bookings</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/pages/statistics"><i class='bx bxs-chart'></i><span class="name">My statistics</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/users/logout"><i class='bx bx-log-out'></i><span class="name">Log out</span></a></li>
        </ul>
      </div>
    </div>
    <script>
       let table_container = document.querySelector(".table-container");
       let closeBtn = document.querySelector("#btn");

       closeBtn.addEventListener("click", ()=>{
         table_container.classList.toggle("open");
         menuBtnChange();//calling the function(optional)
       });

       // following are the code to change sidebar button(optional)
       function menuBtnChange() {
        if(table_container.classList.contains("open")){
          closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
          closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
       }
    </script>

   </div>
  </body>
</html>
