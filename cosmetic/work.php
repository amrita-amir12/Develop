<html>
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
 <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
   
</head>
<?php
include_once 'connect.php';


		if(isset($_POST['delete']))
{
 

    
$con=mysqli_connect("localhost","root","","db");
$check="SELECT * FROM user WHERE mobile = '$_POST[mobile]'";
$drs = mysqli_query($con,$check);
$ddata = mysqli_fetch_array($drs, MYSQLI_NUM);
if($ddata > 1) { 
    
     $mobile1 = $_POST['mobile'];
     $mobile2 = $_POST['mobile'];
        
     $dsql =  "DELETE FROM user where mobile=$mobile2" ;
     if (mysqli_query($conn, $dsql)) {
      echo "
      <script type='text/javascript'>
      setTimeout(function () { 
          swal('check that's was deleted ','','success');
      },1); 
      window.setTimeout(function(){ 
          window.location.replace('allcutomer.php');
      } ,1000); 
      </script>
      ";
         
         
     } else {
		 
      echo "
      <script type='text/javascript'>
      setTimeout(function () { 
          swal('not deleted','','success');
      },1); 
      window.setTimeout(function(){ 
          window.location.replace('adminpage.php');
      } ,1000); 
      </script>
      ";
		
     }
	
	
     mysqli_close($conn);
    
	
}
	}


if(isset($_POST['submit']))
{    
$con=mysqli_connect("localhost","root","","db");
$check="SELECT * FROM user WHERE mobile = '$_POST[mobile]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data > 1) { 
    
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
     $email = $_POST['email'];
     $mobile1 = $_POST['mobile'];
     $mobile2 = $_POST['mobile'];
	$password = $_POST['password'];
        
     $sql =  "UPDATE user SET fname='$fname',lname='$lname',email='$email',mobile='$mobile1',password='$password' WHERE mobile=$mobile2";
     if (mysqli_query($conn, $sql)) {
      echo "
      <script type='text/javascript'>
      setTimeout(function () { 
          swal('updated','','success');
      },1); 
      window.setTimeout(function(){ 
          window.location.replace('allcustomer.php');
      } ,1000); 
      </script>
      ";

         
         
     } else {
		
      echo "
      <script type='text/javascript'>
      setTimeout(function () { 
          swal('not deleted','','success');
      },1); 
      window.setTimeout(function(){ 
          window.location.replace('adminpage.php');
      } ,1000); 
      </script>
      ";
		
     }
	
	
     mysqli_close($conn);
    
	
}
	}
?>
</html>