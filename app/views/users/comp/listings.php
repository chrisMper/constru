<body>
<!------------------------------ navbar ------------------------------------>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>

<!-- -----------------------------list-container------------------------------- -->
<main>

<div class="addbtn-container">
<a href="<?php echo URLROOT; ?>/pages/listingAdd">
<button type="button" class="addbtn">Add</button>
</a>
</div>


<?php foreach($data['listings'] as $listing) :  ?>
    <!-- <?php if( ($listing->comp_email)== $_SESSION['comp_email']): ?> -->
        
<div class = "list-container">

    <div class="left-mid">
    
    <div class = "left-col">
    
    <img src="<?php echo URLROOT; ?>/img/uploads/uploads<?php echo $listing->Photos; ?> ">
    </div> 
    <div class = 'mid-col'>
        <p class='topic'><?php echo $listing->Title; ?> <p>
        <p class='decription'><?php echo $listing->Description; ?><p>
        
        

    </div>
    
</div>


    <div class = 'right-col'>
    <button type="button" class="updatebtn">Update</button><br>



    <button type="button" class="deletebtn">Delete</button>
    


   

    </div>
       
</div>
<!-- <?php endif; ?>  -->
<?php endforeach; ?>



</main>

