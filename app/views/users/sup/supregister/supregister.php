<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/supplierRegister.css">
</head>
<body>
   <div class="container">
      <div class="logo">
        <img src="regservices.gif" align="left">
      </div>

    <div class="registerbox">

      <form align="right" method = "post" action="<?php echo URLROOT; ?>/users/register">

        <table  border="0">
         
          <tr>
             <td style="width:25%">Please select your role</td>
             <td style="width:25%"></td>
             <td style="width:25%"></td>
             <td style="width:25%"></td>
          </tr>
          <tr>
             <td><input type="radio" id="individual" name="role" value="Individual">Individual</td>
             <td><input type="radio" id="company" name="role" value="Company">Company</td>
             <td></td>
             <td></td>
          </tr>
          <tr>
             <td>Working address</td>
             <td colspan="3"></td>
          </tr>
          <tr>
            <td colspan="4"><input type="text" id="wAddress" name="wAddress" required></td>
          </tr>
          <tr>
           <td>Country</td>
           <td>District</td>
           <td>Address</td>
           <td></td>
          </tr>
          <tr>
           <td><input type="text" id="country" name="country" required></td>
           <td><input type="text" id="district" name="district" required></td>
           <td colspan="2"><input type="text" id="address" name="address" required></td>
          </tr>
          <tr>
           <td>Full name</td>
           <td colspan="3"></td>
          </tr>
          <tr>
           <td colspan="2"><input type="text" id="fname" name="fname" placeholder="First name" required></td>
           <td colspan="2"><input type="text" id="lname" name="lname" placeholder="Last name" required></td>
          </tr>
          <tr>
           <td colspan="2">Email</td>
           <td colspan="2">Username</td>
          </tr>
          <tr>
           <td colspan="2"><input type="text" id="email" name="email" required></td>
           <td colspan="2"><input type="text" id="username" name="username" required></td>
          </tr>
          <tr>
            <td>Login password</td>
            <td></td>
            <td>Confirm password</td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2"><input type="password" id="password" name="password" required>
              <input type ="checkbox" onchange="SHPassword(this)";><span id="showhidepwd">Show</span>
            <script>
              function SHPassword(x){
                var chkbox=x.checked;
                if (chkbox){
                  document.getElementById("password").type="text";
                  document.getElementById("showhidepwd").textContent="Hide";
                }
                else{
                  document.getElementById("password").type="password";
                  document.getElementById("showhidepwd").textContent="Show";
                }
              }
            </script></td>
            <td colspan="2"><input type="password" id="confirmPassword" name="confirmPassword" required>
            <input type ="checkbox" onchange="SHPassword(this)";><span id="showhidepwd">Show</span>
            <script>
              function SHPassword(x){
                var chkbox=x.checked;
                if (chkbox){
                  document.getElementById("password").type="text";
                  document.getElementById("showhidepwd").textContent="Hide";
                }
                else{
                  document.getElementById("password").type="password";
                  document.getElementById("showhidepwd").textContent="Show";
                }
              }
            </script></td></td>
          </tr>
          <tr>
            <td colspan="2">Tele No</td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="4"><input type="text" id="tele" name="tele" required></td>
          </tr>
          <tr>
            <td colspan="4">NIC</td>
          </tr>
          <tr>
            <td colspan="4"><input type="text" id="nic" name="nic" required></td>
          </tr>
          <tr>    
            <td colspan="2"><h3><input type="checkbox" id="agreement" name="agreement" required>I agree to the Construplus.com Membership Agreement & Privacy Policy</h3></td>
            <td rowspan="2"><input type="reset" value="Discard"></td>
            <td rowspan="2"><input type="submit" value="Submit"></td>
          </tr>
          <tr>
            <td colspan="2"></td>
          </tr>
        </table>
      </form>
    </div>
   </div>
</body>
</html>