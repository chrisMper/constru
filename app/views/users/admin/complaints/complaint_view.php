<!DOCTYPE html>
<!-- <?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/complaint.css">
</head>

<body>
<div class="middle">
     
   <?php 
        
        foreach ($data['users'] as $user): 
        if(($user->email) == ($data['email'])):
        ?>

   <table style="border-radius: 50px;">
 
    <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="<?php echo URLROOT; ?>/img/profileicon.png" height="80px" width="80px"></td>
        <td width="150px" height="40px"><?php echo $user->role; ?></td>
        <td width="550px" height="40px"><?php echo $user->type; ?></td>
        <td width="150px" height="40px"><button>View</button></td>
    </tr>
   
    </table></br>
    <?php else: ?>
        <p>No user details found.</p>
        <?php endif;
    endforeach; ?>
    
    
   
</div>
</body>
</html>
