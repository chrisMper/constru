<body>
    <div class='navbar'>
        <?php include APPROOT . '/views/inc/navbar.php'; ?>
    </div>

    <main style="height: 100%;">

        <div class="listingStat">
            <?php foreach ($data['listings'] as $listing) : ?>
                <?php if (($listing->UserEmail) == $_SESSION['user_email']) : ?>
                    
                        <div class="list-container">
                       
                            <div class="left-mid">

                                <div class="left-col">

                                <a href="<?php echo URLROOT; ?>/Analysis/StatMore/<?php echo $listing->PostId ?>"> 
                                <img src="<?php echo URLROOT; ?>/public/img/uploads/<?php echo $listing->Photos ?>">
                                </a>
                                </div>
                                <div class='mid-col'>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="StatName"></th>
                                                <th class="StatTh">Views</th>
                                                <th class="StatTh">Booking</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="StatName"><?php echo $listing->Title; ?></td>
                                                <td class="StatTh"><?php echo $listing->visiterCount; ?></td>
                                                <td class="StatTh"><?php echo $listing->noOfBookings; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                            <div class='right-col'>

                                <table>
                                    <thead>
                                        <tr>
                                            <th>Convertion Rate </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php if ($listing->visiterCount == 0) : ?>

                                                <td> waiting for views </td>

                                            <?php else : ?>
                                                <td><?php echo round(($listing->noOfBookings / $listing->visiterCount) * 100, 2) ?></td>

                                            <?php endif; ?>



                                        </tr>
                                    </tbody>

                                </table>

                            </div>

                        </div>
                    
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <!-- listing View starts -->


        <!-- listing View End -->

        <!-- listing Table starts -->


        <!-- listing Table End -->
        <a href="<?php echo URLROOT; ?>/listings/StatsChart"><button>veiw chart</buttton></a>


    </main>
</body>
<?php include APPROOT . '/views/inc/footer.php'; ?>

</html>