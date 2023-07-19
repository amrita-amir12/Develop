<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="regis.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      
    
        <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your username" name="lname"  required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email"  name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number"  name="mobile"  required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password"  name="password" required>
          </div>
        
        </div>
        
       
        <button class="button" style="background-color: #9b59b6; padding: 15px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
         name="submit" >  submit</buttton>
     
 

      </form>
  
    </div>
    <br>
     <br>
     <br>
<a href="http://localhost/cosmetic/index.html" style="background-color: #ffff; padding: 5px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >Back</a>

  </div>




</body>
</html>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "INSERT INTO user (id,fname,lname,email,mobile,password)
    VALUES (null,'$fname','$lname','$email','$mobile','$password')";
$result=mysqli_query($conn,$sql);
if($result){
  header('location:login.php');;
}
else{
   die(mysqli_error($conn));
}





}



?>