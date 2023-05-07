
<html>

<head>

  <title>statistics</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/statistics.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>

<div class="main">
  <h3>Performance of your listings</h3>

  <table class="theader">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Views</th>
            <th>Sales</th>
            <th>Convertion rate</th>
            <th>Revenue</th>
        </tr>
    </thead>
  
            <?php foreach($data['statistics'] as $statistics) : ?>
            <tr>
              <td>
                <img src='<?php echo URLROOT; ?>/img/product_img/product_placeholder.png'> 
              </td>
              <td>
                <h3><?php echo $statistics->product; ?></h3>
              </td>
              <td>
                <input type='text' value='<?php echo $statistics->views; ?>' readonly>
              </td>
              <td>
                <input type='text' value='<?php echo $statistics->sales; ?>' readonly>
              </td>
              <td>
                <input type='text' value='<?php echo $statistics->conv_rate; ?>'>
              </td>
              <td>
                <input type='text' value='<?php echo $statistics->revenue; ?>'>
              </td>
            </tr>
            <?php endforeach; ?>
  </table>
 </div>
</div>
<?php include APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>