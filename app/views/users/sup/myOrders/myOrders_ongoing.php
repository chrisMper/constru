<html>

<head>

  <title>my orders-Constru+</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/myorders.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php include APPROOT . '/views/inc/navbar_sup.php'; ?>
 

    <div class="main">
     <div class="registerbox">
      <div class="topnav">
        <a href="myOrders_new.php">New</a>
        <a class="active" href="myOrders_ongoing.php">Ongoing</a>
        <a href="myOrders_completed.php">Completed</a>
        <a href="myOrders_cancelled.php">Cancelled</a>
      </div>
    
   
    
     <div class="listing">
        <form method="post">
          <table>

            <tbody>
            <?php foreach($data['listings'] as $listings) : ?>
            <div class='listing-card'>
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3><?php echo $listings->product; ?></h3>
                <h5>Completion Date : <?php echo $listings->completionDate; ?></h5>
            
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
              <script>


               const progress = document.querySelector("#progress");
               const circles = document.querySelectorAll(".circle");
               const popup = document.querySelector("#popup");
               const confirmButton = document.querySelector("#confirm");
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

              <div>
                <button onclick="document.getElementById('complete').style.display='block'; return false;" >Completed</button>
                <button onclick="document.getElementById('cancel').style.display='block'; return false;">Cancel</button>
              </div>
            </div>
          </table>
        </form>                
        
              
         <div id="complete" class="popUp" >
            <span onclick="document.getElementById('complete').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="acceptContent">
              <table class="acceptTable">
                <tr>
                  <td>Congratulations !!</td>
                </tr>
                <tr><td><h5>You have completed another stage</h5></td></tr>
              </table>
           </form>
           <button id="confirm" onclick="location.reload();">Confirm</button>
         </div>
 
       <script>
      
         var popUp = document.getElementById('complete');

       // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
          if (event.target == popUp) {
            popUp.style.display = "none";
         }
         }
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
         <button><a href="myOrders_cancelled.php">Confirm </a></button>
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