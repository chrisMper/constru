
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Listing', 'Total Bookings', 'Visiter Count'],

<?php foreach($data['listings'] as $listings):
    if($listings->UserEmail == $_SESSION['user_email']): ?>
          ['<?php echo $listings->Title ?>', <?php echo $listings->noOfBookings ?>, <?php echo $listings->visiterCount ?>],
<?php endif;
endforeach; ?>          
        ]);

        var options = {
          chart: {
            title: 'Listing Statistics ',
            subtitle: 'Booking and Visiter Count',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


<body>
    <div class='navbar'>
        <?php include APPROOT . '/views/inc/navbar.php'; ?>
    </div>
    
    <main style="height: 100%;">

    <div  class="listingStat">


    <div id="barchart_material" style="width: 900px; height: 500px;"></div>



    </div>
        
        <a href="<?php echo URLROOT; ?>/listings/Stats"><button>Back</buttton></a>
            

    </main>
</body>
<?php include APPROOT . '/views/inc/footer.php'; ?>

</html>