

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/kusSearchNavSide.css" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/search.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/cv.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/portfolio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="C:\xampp\htdocs\constru\fontawesome-free-6.3.0-web/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
</head>
<body>
<center><iframe src="<?php echo URLROOT; ?>/pages/downloadCCv" width="900" height="90%"  id="frame"></iframe><br /><br />


<button class="button-9" role="button" style="background-color: #00FF64; width:140px;" id='btn-print'>Download CV</button> </center>

<script>

document.querySelector('#btn-print').addEventListener('click', function () {
		// window.print();

		let wspFrame = document.getElementById('frame').contentWindow;
		wspFrame.focus();
		wspFrame.print();
	});
	
  </script>



</body>


