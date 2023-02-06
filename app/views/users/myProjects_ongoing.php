
<html>

<head>

  <title>navigation1</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/myProjects.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <div class="navbar">
    <div class="navlogo">
      <img src="logo.png">
    </div>
    <div class="navright">

      <a href="profile.html" target="supplierDashboard"> <img src="profileicon.png"></a>
      <a href="cart.html" target="supplierDashboard"> <img src="cart.png"></a>

    </div>
    <div class="navbar">
      <div class="navlogo">
        <img src="../../../public/img/product_img/logo.png" >
      </div>
      <div class="navright">
        
        <a href="profile.html" target="supplierDashboard"> <img src="../../../public/img/product_img/profileicon.png" ></a>
        <a href="cart.html" target="supplierDashboard"> <img src="../../../public/img/product_img/cart.png"></a>
    
      </div>
      <div class="navcenter">

        <ul>
          <li><h2><a href="landingpage.html">Home</a></h2></li>
          <li><h2><a href="aboutus.html">About Us</a></h2></li>
          <li><h2>Our Services</h2>
          
            <div class="servicemenu">
              <ul>
                <li><b><a href="engineer.html">Civil Engineering</a></b></li>
                <li><b><a href="construction.html">Construction</a></b></li>
                <li><b><a href="hardware.html">Hardware Products & Supplies</a></b></li>
                <li><b><a href="tender.html">Tendering</a></b></li>
              </ul>
            </div>
          </li> 
        </ul>
      </div>
      
    </div>  


    <div class="table-container">
      <div class="sidebar">
        <ul>
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/home2.png" >Home</a></li>
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/dashboard.png" >Dashboard</a></li>
          <li><a href="landingpage.html"><img src="../../../public/img/product_img/message.png" >Messages</a>
          <li><a href="engineer.html"><img src="../../../public/img/product_img/order.png" >Orders</a></li>
          <li><a href="construction.html"><img src="../../../public/img/product_img/listings.png" >Listings</a></li>
          <li><a href="hardware.html"><img src="../../../public/img/product_img/cart.png" >My cart</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/myorder.jpg" >My orders</a></li>
          <li><a href="myBookings_ongoing.php"><img src="../../../public/img/product_img/booking-icon.jpg" >My bookings</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/statistics.jpg" >My statistics</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/tender .png" >Tender listings</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/profileicon.png" >Profile</a></li>
          <li><a href="tender.html"><img src="../../../public/img/product_img/calender.png" >Calender</a></li> 
        </ul>
      </div>
 

    <div class="main">

      <div class="topnav">
        <a href="myProjects_new.php">New</a>
        <a class="active" href="myProjects_ongoing.php">Ongoing</a>
        <a href="myProjects_completed.php">Completed</a>
        <a href="myProjects_cancelled.php">Cancelled</a>
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
                <h3>Structured Analysis and Design</h3>
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
        <form method="post">
          <table>

            <tbody>
            <div class='listing-card'>
              <div>
                <img src='../../../public/img/product_img/product_placeholder.png'> 
              </div>
              <div>
                <h3>Structured Analysis and Design</h3>
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
         <button><a href="myProjects_cancelled.php">Confirm </a></button>
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