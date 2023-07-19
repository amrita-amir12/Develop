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
    echo "data inserted successfully";
}
else{
   die(mysqli_error($conn));
}





}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="cantainer my-5">
        <form method="post">
       <div class="mb-3">
           <label for="firstname" class="form-label">first name</label>
           <input type="text" class="form-control" name="fname" placeholder="enter the firstname">
</div>
<div class="mb-3">
           <label for="lastname" class="form-label">last name</label>
           <input type="text" class="form-control" name="lname" placeholder="enter the lastname">
</div>
<div class="mb-3">
           <label for="email" class="form-label">Email</label>
           <input type="email" class="form-control" name="email" placeholder="enter the email">
</div>
<div class="mb-3">
           <label for="mobile" class="form-label">Mobile</label>
           <input type="text" class="form-control" name="mobile" placeholder="enter the mobile number">
           </div>

           <div class="mb-3">
           <label for="mobile" class="form-label">password</label>
           <input type="text" class="form-control" name="password" placeholder="enter the password">
    

       <button class="btn btn-dark btn-lg" name="submit">submit</button>    
       </div>

</form>
</div>
 </body>
</html>

