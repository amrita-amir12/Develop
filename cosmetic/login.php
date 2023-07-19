
<html>
<head>
 <style>
  @import url('https://rsms.me/inter/inter-ui.css');
::selection {
  background:  #9b59b6;
}
::-webkit-selection {
  background: #2D2F36;
}
::-moz-selection {
  background:  #9b59b6;
}
body {
  background:  #9b59b6;
  font-family: 'Inter UI', sans-serif;
  margin: 0;
  padding: 20px;
}
.page {
  background: #e2e2e5;
  display: flex;
  flex-direction: column;
  height: calc(100% - 40px);
  position: absolute;
  place-content: center;
  width: calc(100% - 40px);
}
@media (max-width: 767px) {
  .page {
    height: auto;
    margin-bottom: 20px;
    padding-bottom: 20px;
   color: #9b59b6;
  }
}
.container {
  display: flex;
  height: 320px;
  margin: 0 auto;
  width: 640px;
  
}
@media (max-width: 767px) {
  .container {
    flex-direction: column;
    height: 630px;
    width: 320px;
  }
}
.left {
  background: white;
  height: calc(100% - 40px);
  top: 20px;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .left {
    height: 100%;
    left: 20px;
    width: calc(100% - 40px);
    max-height: 270px;
  }
}
.login {
  font-size: 50px;
  font-weight: 900;
  margin: 50px 40px 40px;
  color: #9b59b6;
}
.eula {
  color: #9b59b6;
  font-size: 14px;
  line-height: 1.5;
 
  
}
.right {
  background: #474A59;
  box-shadow: 0px 0px 40px 16px #9b59b6;;
  color: #F1F1F2;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .right {
    flex-shrink: 0;
    height: 100%;
    width: 100%;
    max-height: 350px;
  }
}
svg {
  position: absolute;
  width: 320px;
}
path {
  fill: none;
  stroke: url(#linearGradient);
  stroke-width: 4;
  stroke-dasharray: 240 1386;
}
.form {
   
  margin: 40px;
  position: absolute;
}
label {
  color:  #c2c2c5;
  display: block;
  font-size: 14px;
  height: 16px;
  margin-top: 20px;
  margin-bottom: 5px;
}
input {
  background: transparent;
  border: 0;
  color: #f2f2f2;
  font-size: 20px;
  height: 30px;
  line-height: 30px;
  outline: none !important;
  width: 100%;
}
input::-moz-focus-inner { 
  border: 0; 
}
#submit {
  color: #707075;
  margin-top: 40px;
  transition: color 300ms;
}
#submit:focus {
  color: #f2f2f2;
}
#submit:active {
  color: #d0d0d2;
}
section{
   
}

    </style>
</head>
<body>
<?php
include_once 'connect.php';
if(isset($_POST['Login']))
{

  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE mobile='$mobile' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if ($row = mysqli_fetch_assoc($result)) {
      
  
      
                   
     
    header('location:product.html');
    
    

  }
    else {

      
       echo "
        wrong
        ";
      
      
      
  }
	
}
?>


<div class="page">
    <section>
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula"><img src="./images/aum.jpg" style="color:#9b59b6;"></div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <form method="post">
        <label for="email">Mobile</label>
        <input type="mobile" name="mobile" id="mobile" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <button class="button" style="background-color: #9b59b6; padding: 10px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
         name="Login">  Login</button>
         <button class="button" style="background-color: #9b59b6; padding: 10px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
         name="adLog" >Ad Login</button><br>
         <br>
         <a href="http://localhost/cosmetic/register.php" style="background-color: #9b59b6; padding: 5px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
         >Register</a>
</form>
      </div>
    
    </div>
  
  </div>

</section>
<section class="back">
<a href="http://localhost/cosmetic/index.html" style="background-color: #ffff; padding: 5px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >Back</a>

</section>

</div>




<script>
    var current = null;
document.querySelector('#mobile').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#password').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#Login').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
</script>



</body>
</html>
<?php
include_once 'connect.php';
if(isset($_POST['adLog']))
{

  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE mobile='$mobile' AND password='$password'";
  $result = mysqli_query($conn, $sql);
//$sql1 = "SELECT * FROM users WHERE mobile='$mobile'";
	//  $q=mysqli_query($conn,$sql1);
	//  $res=mysqli_fetch_assoc($q);
  if ($row = mysqli_fetch_assoc($result)) {
    echo "
    <script type='text/javascript'>
    setTimeout(function () { 
        swal('Welcome to Admin Dashboard ','','success');
    },1); 
    window.setTimeout(function(){ 
        window.location.replace('adminpage.php');
    } ,1000); 
    </script>
    ";
  }
    else {

      
       echo "
        wrong
        ";
      
      
      
  }
	
}




?>
