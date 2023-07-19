<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 
	    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
</head>

<body style="background-color:rgba(176, 128, 199, 0.483);">
	

    
    <div class="container2">
    

        
        <div class="main">
            <div class="topbar">
            
    <div class="user">
                   
                </div>
            </div>

            
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h1>Admin Panel</h1>
                        <h2>Update Data </h2>
                        
                    </div>

                 
	
	  <section class="data" style="background-color: rgba(176, 128, 199, 0.483);">
	
		<div class="update">
			 <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                    <uh>Enter mobile number...</uh>
                                <div class="text-input">
			<i class="user-fill"></i>
			<input type="text"   name="mobile"  placeholder="Mobile No." value="<?php if(isset($_GET['mobile'])){
                echo $_GET['mobile'];}
                 ?>" class="form-control" required >
			</div>
                                <div class="col-md-8">

                                     
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="sbtn" >Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","db");

                                    if(isset($_GET['mobile']))
                                    {
                                        $mobile = $_GET['mobile'];

                                        $query = "SELECT * FROM user WHERE mobile='$mobile' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                
					
                                
                    <form action="work.php" method="post">             	
			
			<div class="text-input1">
			<i class="user-fill"></i>
			<input type="text" 
				   name="fname" placeholder="firstname" value="<?= $row['fname']; ?>" >
			</div>
            <div class="text-input1">
			<i class="user-fill"></i>
			<input type="text" 
				   name="lname" placeholder="lastame" value="<?= $row['lname']; ?>" >
			</div>
			
			<div class="text-input">
			<i class="user-fill"></i>
			<input type="text"   name="email"  placeholder="E-mail" value="<?= $row['email']; ?>" >
			</div>
			
			<div class="text-input">
			<i class="user-fill"></i>
			<input type="text"   name="mobile"  placeholder="Mobile No." value="<?= $row['mobile']; ?>" >
			</div>
            <div class="text-input">
			<i class="user-fill"></i>
			<input type="text"   name="password"  placeholder="password" value="<?= $row['password']; ?>" >
			</div>
		
			 <input type="submit" class="cusbtn" name="submit" value="Change"> 
                        
                 <input type="submit" class="cusbtn" name="delete" value="Delete"> 
                        
                        <div class="text-input2">
			<input type="text-input2"   name="mobile"  placeholder="Mobile No." value="<?= $row['mobile']; ?>" >
			</div>
				             </form>
                   
                                                <?php
                             
                                            }
                                        }
                                        else
                                        {
                                             
                                            
                                              echo "not found  ";
                                            
                                        }
                                    }
                                   
                                ?>
                                

                            </div>
                        </div>

                    </div> 
			
			
	
		
		</div>
	

                </div>

                
               
                        <h2>cutomer data</h2>
                
                        <a href="http://localhost/cosmetic/index.html" style="background-color: #ffff; padding: 5px 32px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >Back</a>

                    
                </div>
            </div>
			
            <br>
            <br>
  

        </div>
		
		
		
    </div>
                                </section>
                                <section name="" style="background-color: rgba(218, 194, 230, 0.483);padding:10px 32px;">
    
                                <a href="http://localhost/cosmetic/allcustomer.php" style="background-color: #ffff; padding: 5px 32px;font-size;34px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >show all customer </a>
                                </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>




<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
 <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
   
</head>


