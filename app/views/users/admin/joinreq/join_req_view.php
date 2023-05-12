<!DOCTYPE html>
 <?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> 

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/req_view.css">
</head>

<body>

<div class="details">
    
<?php 
// print_r($data); 
foreach ($data['users'] as $user): 
    if(($user->email) == ($data['spEmail'])): ?>
    <table>
        <tr>
            <td>
                <div class="pic"><img src="<?php echo URLROOT; ?>/img/profileicon.png" height="80px" width="80px"></div>
            </td>
            <td>
            <table class="table">
        <tr>
        <td class="type">User Role</td>
        <td><?php echo $user->role; ?></td>
    </tr>
        <tr>
        <td  class="type">city</td>
        <td><?php echo $user->city; ?></td>
    </tr>
            </td>
        </tr>
    </table>
   
   </table></br>
   <?php else: ?>
    <p>No user details found.</p>

<?php endif;
endforeach; ?>


</div>

</body>
</html>
<?php require APPROOT . '/views/inc/footer.php'; ?>