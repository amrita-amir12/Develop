<?php
include 'connect.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background-color:rgba(179, 97, 218, 0.483);">
    <h1>display
        !</h1>
        <h2 style="text-align:right;background-color: #ffff; padding: 5px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">    <a href="http://localhost/cosmetic/adminpage.php " style="color:rgba(0, 0, 0, 0.2);" >back to admin panel</a>

</h2>
    <div class="cantainer my-5" style="background-color:rgba(200, 100, 230, 0.483);">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operator</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

<?php


$sql="SELECT `id`, `fname`, `lname`, `email`, `mobile` FROM `user` WHERE 1";




$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  

 $id=$row['id'];
 $fname= $row['fname'];
 $lname=$row['lname'];
 $email=$row['email'];
 $mobile=$row['mobile'];


echo '<tr>
<th scope="row">'.$id.'</th>
   <td>'.$fname.'</td>
<td>' .$lname.'</td>
<td>'.$email.'</td>
<td>' .$mobile.'</td>
<td>

</td>


</tr>';

  }
}




 else {
  echo "0 results";
}
$conn->close();
?>






<td>
    
         
    <td>
    
  </tbody>
</table>
</div>
 </body>
</html>