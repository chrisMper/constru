<?php

include("connection.php");
	session_start();
    if(isset($_GET['deleteid'])){
        $username=$_GET['deleteid'];

        $sql="DELETE FROM listing WHERE id='$id'";
        $result=mysqli_query($con,$sql);
        if($result){
            //echo "Deleted successfully";
            header("location:listings.php");
        }else{
            die(mysqli_error($con));
        }
    }

?>