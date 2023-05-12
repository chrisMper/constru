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

    <div divtable>
   <form action ="<?php echo URLROOT; ?>/admin_list/addAdmin" method= "POST" >
        <table>
            <tr>
                <td>First name </td>
                <td><input type="text" name = "fname" placeholder="admin's first name">
              
            </td>
            </tr>

            <tr>
                <td>Last name</td>
                <td><div><input type="text" name = "lname" placeholder="admin's last name"></div></td>
            </tr>

            <tr>
                <td>Contact</td>
                <td><input type="text" name = "contact_number" placeholder="admin's contact number"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name = "email" placeholder="admin's email">
            </td>
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
                <td>Password</td>
                <td><input type="password" name="password" required="required">
            </td>
            </tr>

            


            <tr>
                <td>Profile image</td>
                <td><div><input type="file" accept="image/*" placeholder="Inssert  image" name="pimage" autocomplete="off"></div></td>
            </tr>
            <tr><td>  </td></tr>

            
      </table>

      <div class="div4"><a href="<?php echo URLROOT; ?>/admins/admins.php"><button type="submit" name="submit" class="btn">Save</button></a></div>
      
    </form>
</div>
</center>
      

</div>


</body>

