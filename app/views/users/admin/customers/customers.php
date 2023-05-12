<!DOCTYPE html>
<!-- <?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/customers.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<div class="middle">
    <div search>
    <input type="text" placeholder="Search Customers here" name="reason" required>
</div>
 <div class="cus-tbl"> 
    <table>
         <thead>
            <th  class="name">Customer name</th>
           
            <th class="phone">Phone no</th>
            <th class="address">E-mail</th>
            <th class="active-stts">Status</th>
            <th class="active-stts">name</th>
        </thead>
        <tbody>
        <?php 
        
        foreach ($data['users'] as $user): ?>
        <tr>
            <td><?php echo $user->customerid; ?></td>
            <td><?php echo $user->NIC; ?></td>
            <td><?php echo $user->contact; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->fName; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>


         
    </table>
</div>
       
</div>
</body>

