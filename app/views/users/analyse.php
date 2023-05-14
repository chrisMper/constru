<body>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navbar.php'; ?>
</div>
<main>


<!-- listing View starts -->
<?php foreach($data['listings'] as $listing) : ?>
    <?php if( ($listing->UserEmail)== $_SESSION['user_email']): ?>
<div class = "list-container">

    <div class="left-mid">
    
    <div class = "left-col">
    
    <img src="<?php echo URLROOT; ?>/img/msg.png">
    </div> 
    <div class = 'mid-col'>
        <table><thead><tr><th class="StatName"></th><th class="StatTh">Views</th><th class="StatTh">Booking</th></tr></thead>
    <tbody><tr><td class="StatName"><?php echo $listing->Title; ?></td><td class="StatTh"><?php echo $listing-> visiterCount; ?></td><td class="StatTh">Booking</td></tr></tbody>    
    </table>
    </div>
</div>


<div class = 'right-col'>

    <table><thead><tr><th>Convertion Rate</th></tr></thead>
    <tbody><tr><td>Convertion Rate</td></tr></tbody>

</table>
    
</div>
       
</div>
<?php endif; ?> 
<?php endforeach; ?>



</main>
    </body>
    <?php include APPROOT . '/views/inc/footer.php'; ?>
    </html>