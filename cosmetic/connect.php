<?php
$conn=mysqli_connect("localhost","root","","db");
if($conn){
  echo "connection successfull";
}
else{
  die(mysqli_error("Error"+$conn));
}



?>
