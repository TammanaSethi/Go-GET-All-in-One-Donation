<?php
session_start();
include "connection.php";
$query=mysqli_query($con,"select * from donar where email='".$_SESSION['donaremail']."'");
$row=mysqli_fetch_array($query);
?>
<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="homestyle.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="body2">
        <div class="container-fluid">
          
            <div class="row text-center justify-content-center bg-light p-3">
                <div class="col-lg-6 column1">
                   
                      
                <a href="donar_home.php">  <img src="images/logo-small.jpg" />&nbsp;&nbsp;</a><a href="donar_home.php">Go Get</a>
                
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6" >
                    <h4>View worker Details</h4>
                </div>
            </div>

            <div class="container">
                <div class="row mt-3 item5">
                    <div class="col-lg-4 bg-light item4  ">
                        <p>Name: <?php echo $row['name']?></p>
                        <p>Email: <?php echo $row['email']?></p>
                        <p>Address :   <?php echo $row['city']?>, <?php echo $row['address']?>, <?php echo $row['pincode']?></p>
                        <p>Mobile: <?php echo $row['mobile']?></p>

                    

                    </div>
                </div>
            </div>

            <div class="row bg-white p-3 mt-5 ">
                <div class="col-lg-6 text-center ">
                <a href="donar_home.php"> <h2> <i class="fa-solid fa-house-chimney" id="i2"></i></h2></a>
                  <a href="donar_home.php" id="tall2">home</a>
                </div>
    
                <div class="col-lg-6 text-center">
                <a href="index.php">    <h2><i class="fa-solid fa-power-off" id="i3"></i></h2></a>
                    <a href="index.php" id="tall3">Logout</a>
                </div>
            </div>
    

        </div>

    </body>
</html>