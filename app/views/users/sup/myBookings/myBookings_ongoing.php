<html>

<head>

  <title>My Bookings</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/mybookings.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 
<div class="main">
 <a href="<?php echo URLROOT; ?>/pages/supplier" ><i class='bx bx-arrow-back'></i>Back </a>
 <div class="registerbox">
  <div class="topnav">
   <a href="myBookings_new.php">New</a>
   <a class="active" href="myBookings_ongoing.php">Ongoing</a>
   <a href="myBookings_completed.php">Completed</a>
   <a href="myBookings_cancelled.php">Cancelled</a>
  </div>
    
   
    
     <div class="listing">
        <form method="post">
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3>3D modeling</h3>
                <h5>Completion Date : 04.10.2023</h5>
               
                <div class="content">
                  <div class="progress-container">
                    <div class="progress" id="progress"></div>
                    <div class="circle active">1</div>
                    <div class="circle">2</div>
                    <div class="circle">3</div>
                    <div class="circle">4</div>
                  </div>
                 
                </div>
              </div>
              <div class="completion">
                <h5>Total completion</h5>
                <div class="completion_amount"><h4>33%</h4></div>
              </div>
              
              <div>
                <button onclick="document.getElementById('cancel').style.display='block'; return false;" >Cancel</button>
                <button onclick="document.getElementById('confirm_stage').style.display='block'; return false;" >Confirm stage completion</button>
                <button><a href="myBookings_completed.php">Confirm completion</a></button>
              </div>
            </div>
          </table>
        </form>
        <form method="post">
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3>3D modeling</h3>
                <h5>Completion Date : 04.13.2023</h5>
                
                <div class="content">
                  <div class="progress-container">
                    <div class="progress" id="progress"></div>
                    <div class="circle active">1</div>
                    <div class="circle">2</div>
                    <div class="circle">3</div>
                    <div class="circle">4</div>
                  </div>
                 
                </div>
              </div>
              <div class="completion">
                <h5>Total completion</h5>
                <div class="completion_amount"><h4>33%</h4></div>
              </div>
              
              <div>
                <button onclick="document.getElementById('cancel').style.display='block'; return false;" >Cancel</button>
                <button onclick="document.getElementById('confirm_stage').style.display='block'; return false;" >Confirm stage completion</button>
                <button><a href="myBookings_completed.php">Confirm completion</a></button>
              </div>
            </div>
          </table>
        </form>
        
        <script>
            const progress = document.querySelector("#progress");
            const circles = document.querySelectorAll(".circle");
            const popup = document.querySelector("#popup");
            const confirmButton = document.querySelector("#confirm_stage");
            let currActive = 1;

            const update = () => {
            circles.forEach((circle, i) => {
            if (i === currActive - 1) {
             circle.classList.add("active");
           } else {
             circle.classList.remove("active");
           }
           });

           const width = ((currActive - 1) / (circles.length - 1)) * 100;
           progress.style.width = `${width}%`;

          };


         confirmButton.addEventListener("click", () => {
          currActive < circles.length && currActive++;
          update();
         });
     
           </script>  

         

       <div id="cancel" class="popUp" >
         <span onclick="document.getElementById('cancel').style.display='none'" class="close" title="Close Modal">&times;</span>
         <form class="acceptContent">
         <table class="acceptTable">
          <tr>
           <td><label for="reason">Mention the reasons to cancel</label></td>
           <td><textarea id="reason" name="reason" rows="4" cols="50"></textarea></td> 
          </tr>
         </table>
         </form>
         <p><h5>A message will be sent to the client on the cancellation. Until the acceptence of the client, the cancellation will not be valid.</h5></p>
        <button><a href="myBookings_cancelled.php">Confirm</a></button>
       </div>

       <script>

        var popUp = document.getElementById('cancel');

       // When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
        if (event.target == popUp) {
         popUp.style.display = "none";
        }
       }
     </script>

    </div>   
    </div>
  </div> 

</body>
</html>