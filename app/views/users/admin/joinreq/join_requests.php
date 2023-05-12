<!DOCTYPE html>
<!-- <?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/join_requests.css">
</head>

<body>
<body>

<div class="middle">
<?php 
        
        foreach ($data['users'] as $user): ?>
  
    <table style="border-radius: 50px;">
    
        <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="<?php echo URLROOT; ?>/img/profileicon.png" height="80px" width="80px"></td>
        <td width="450px" height="40px"><?php echo $user->role; ?></td>
        <td width="150px" height="40px"></td>
        <td width="200px" height="40px"><a href="<?php echo URLROOT; ?>/pages/join_req_view/<?php echo $user->email; ?>"><button>View</button></a></td>
    </tr>
   
    
   </table></br>
   <?php endforeach; ?>
</div>



</body>
</html>
<?php require APPROOT . '/views/inc/footer.php'; ?>