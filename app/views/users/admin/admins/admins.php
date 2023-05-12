<!DOCTYPE html>
<?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> 

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/adminlist.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
 <main>   

<div class="div3">

            <div style="width:90%;">
                <h1>Constru+</h1>
                <h2 style="color:rgb(92, 90, 90)">Admins</h2>         
                <div class="div4"><a href="<?php echo URLROOT; ?>/pages/add_admin"><button class="btn"><b>Add an Admin</b></button></a></div>
            </div></br>


<!-- table -->
<div class="middle">
<table>
    <thead>
        <th>First Name</th>
        <th>last Name</th>
        <th>Contact Number</th>
        <th>Email</th>
        <th>NIC</th>
        <th>Address</th>
        <th>age</th>
    </thead>

    <tbody>
        <?php 
        
        foreach ($data['users'] as $user): ?>
        <tr >
            <td><?php echo $user->fname; ?></td>
            <td><?php echo $user->lname; ?></td>
            <td><?php echo $user->contact_number; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->nic; ?></td>
            <td><?php echo $user->address; ?></td>
            <td><?php echo $user->age; ?></td>     
            <td ><a href="<?php echo URLROOT; ?>/admins/update_admin/<?php echo $user->id; ?>"><button>Update</button></a></br> <a href="<?php echo URLROOT; ?>/admin_list/deleteAdmin/<?php echo $user->email; ?>"><button>Delete</button></td>
            <!-- <td ><button>Delete</button></td> -->
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
        </div>
</div>
 </main>        