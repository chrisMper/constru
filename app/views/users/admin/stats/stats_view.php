
<!DOCTYPE html>
<!-- <?php 
include APPROOT. '/views/inc/admin_navbar.php';
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style_dashboard.css" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>


    <div class="main-container">
        <div class="chart">
            <div class="chart1">
            <canvas id="myChart"></canvas>
            <canvas id="myLine"></canvas>
            </div>
            <div class="chart2">
            <canvas id="myPie"></canvas>
            </div>
        </div>
    </div>
</section>
<!--home section end-->


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    const ctp = document.getElementById('myPie');
    const ctr = document.getElementById('myLine');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'No. of Donations',
                data: [12, 19, 3, 5, 2, 3, 5, 8, 10, 13, 2, 6],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    new Chart(ctp, {
        type: 'pie',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'No. of Donations',
                data: [12, 19, 3, 5, 2, 3, 5, 8, 10, 13, 2, 6],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    new Chart(ctr, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'No. of Donations',
                data: [12, 19, 3, 5, 2, 3, 5, 8, 10, 13, 2, 6],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>



</body>

</html>