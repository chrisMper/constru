<!DOCTYPE html>
<!-- <?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/add_admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>


<div class="div3">

<div style="width:90%;">
    <h1>Register Admin</h1><br>
</div>

<!-- table -->
<center>
    <div divtable>
    <form method="POST" action="signup_admin.php">
        <table>
            <tr>
                <td>First name </td>
                <td><div><input type="text" name = "fname" placeholder="admin's first name"></div></td>
            </tr>

            <tr>
                <td>Last name</td>
                <td><div><input type="text" name = "lname" placeholder="admin's last name"></div></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><div><input type="email" name = "email" placeholder="admin's email"></div></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><div><input type="text" name = "password" placeholder="admin's password"></div></td>
            </tr>

            <tr>
                <td>NIC number</td>
                <td><div><input type="text" name = "nic" placeholder="admin's NIC number"></div></td>
            </tr>

            <tr>
                <td>   Age</td>
                <td><div><input type="text" name = "age" placeholder="admin's age"></div></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><div><input type="text" name = "address" placeholder="admin's address"></div></td>
            </tr>

            <tr>
                <td>Contact</td>
                <td><div><input type="text" name = "contact" placeholder="admin's contact number"></div></td>
            </tr>


            <tr>
                <td>Profile image</td>
                <td><div><input type="file" accept="image/*" placeholder="Inssert  image" name="pimage" autocomplete="off"></div></td>
            </tr>
            <tr><td>  </td></tr>

            
      </table>
      
   
      <div class="div4"><button type="submit" name="submit" class="btn"><a href="adminlist.php"><b>Save</b></a></button></div>
      
    </form>
</div>
</center>
      

</div>


</body>

