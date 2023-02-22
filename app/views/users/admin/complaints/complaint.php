<!DOCTYPE html>
<!-- <?php 
include APPROOT. '/views/inc/navbar.php';
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/complaint.css">
</head>

<body>
<div class="middle">
    
    <table class="carttbl">
        <tr class="detail-border" >
            <td c  width="100px" height="40px"> </td>
            <td width="850px" height="40px"><center></center><input type="text" placeholder="Search Complaints" name="reason" required></center></td>
            
        </tr>
        </table>
    
    <br>
   <table style="border-radius: 50px;">
    
    <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="<?php echo URLROOT; ?>/img/profileicon.png" height="80px" width="80px"></td>
        <td width="150px" height="40px">Person 1</td>
        <td width="550px" height="40px">This is a text message</td>
        <td width="150px" height="40px"><font color="red">2</font></td>
    </tr>
   </table>
   <br>
    <table style="border-radius: 50px;">
    <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="<?php echo URLROOT; ?>/img/profileicon.png" height="80px" width="80px"></td>
        <td width="150px" height="40px">Person 2</td>
        <td width="550px" height="40px">This is a text message</td>
        <td width="150px" height="40px"> </td>
    </tr>
    </table>
    <br>
    <table style="border-radius: 50px;">
    <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="<?php echo URLROOT; ?>/img/profileicon.png" height="80px" width="80px"></td>
        <td width="150px" height="40px">Person 3</td>
        <td width="550px" height="40px">This is a text message</td>
        <td width="150px" height="40px"><font color="red">1</font></td>
    </tr>
    </table>
    <br>
   <table style="border-radius: 50px;">
    <tr class="detail-border" >
        <td class="item-border" width="100px" height="40px"><img src="<?php echo URLROOT; ?>/img/profileicon.png" height="80px" width="80px"></td>
        <td width="150px" height="40px">Person 4</td>
        <td width="550px" height="40px">This is a text message</td>
        <td width="150px" height="40px"> </td>
        
    </tr>
   </table>

</div>
</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>