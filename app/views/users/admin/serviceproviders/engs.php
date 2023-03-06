<!DOCTYPE html>
<!-- <?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comps.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<div class="middle">
    <div><h2></h2></div>
    <div search>
    <input type="text" placeholder="Search Customers here" name="reason" required>
</div>
 <div class="cus-tbl">
    <table>
         <tr>
            <td  class="name">Profile</td>
            <td   class="address">Engineer name</td>
            <td class="phone">Phone no</td>
            <td class="address">E-mail</td>
            <td class="active-stts">Active status</td>
        </tr>
        <tr class="empty"> </tr>
        <tr class="rows">
            <td class="space">img</td>
            <td class="space">W.S.De Silva</td>
            <td class="space">0771831005</td>
            <td class="space">madu@gmail.com</td>
            <td class="space">Active</td>
        </tr>
        <tr class="rows">
            <td class="space">img</td>
            <td class="space">P.R.Fernando</td>
            <td class="space">07728394595</td>
            <td class="space">crisperera@gmail.com</td>
            <td class="space">Deactive</td>
        </tr>
        <tr class="rows">
            <td class="space">img</td>
            <td class="space">K.S.Mendis</td>
            <td class="space">0912264541</td>
            <td class="space">tharindisilva@gmail.com</td>
            <td class="space">Active</td>
        </tr>


         
    </table>
</div>
       
</div>
</body>

