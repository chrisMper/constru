<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="../../../public/css/new_comp.css">
 <link rel="stylesheet" href="../../../public/css/new_navbar.css">
 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 <title>My Cart</title>
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
            <br/>
            <hr>
        </nav> 
    
</div>
<div class="middle">
   <table class="carttbl">
    <tr class="carthed">
        <td colspan="2" class="tborder" width="250px" height="40px"><font color="white">Product Name</font></td>
        <td width="150px" height="40px"><font color="white">Price</font></td>
        <td width="150px" height="40px"><font color="white">Quantity</font></td>
        <td width="150px" height="40px"><font color="white">Discount</font></td>
        <td class="tborder1" width="150px" height="40px"><font color="white">Total</font></td>
         
    </tr>
    <tr height="30px"></tr>
    <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="../../../public/img/paint.jpg" height="80px" width="90px"></td>
        <td width="150px" height="40px">Paint bucket 1l</td>
        <td width="150px" height="40px">$20</td>
        <td width="150px" height="40px">- 2 +</td>
        <td width="150px" height="40px">0%</td>
        <td width="150px" height="40px">$20</td>
        <td class="item-border1" width="100px" height="40px"> 
            <button>Remove</button>
        </td>
    </tr>
    <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="../../../public/img/cement.jpg" height="80px" width="90px"></td>
        <td width="150px" height="40px">Cement bag 25kg</td>
        <td width="150px" height="40px">$100</td>
        <td width="150px" height="40px">- 4 +</td>
        <td width="150px" height="40px">2%</td>
        <td width="150px" height="40px">$98</td>
        <td class="item-border1" width="100px" height="40px"> 
            <button>Remove</button>
        </td>
    </tr>
   </table>

</div>


<div class="sidebar active">
       
       <ul class="nav-links">
        
           <li>
               <a href="#" >
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
            <a href="#" class="active">
                <i class='bx bx-book'></i>
                <span class="links_name">My Cart</span>
            </a>
        </li>
           <li>
               <a href="#" >
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
   
   
  