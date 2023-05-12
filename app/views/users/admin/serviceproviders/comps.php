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
    <thead>
            <th  class="name">Profile</th>
            <th   class="address">Supplier name</th>
            <th class="phone">Phone no</th>
            <th class="address">E-mail</th>
            <th class="active-stts">NIC</th>
        </thead>
        <tbody>
        <?php 
        
        foreach ($data['users'] as $user): ?>
        <tr>
            <td><?php echo $user->profile; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->contact_number; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->nic; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
         
    </table>
</div>
       
</div>
</body>

