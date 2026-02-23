<?php 
include "connection.php";
?>


<html>
    <head>
        <title>Approve Donation</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="homestyle.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="body2">
        <div class="container-fluid">

            <div class="row text-center justify-content-center bg-light p-3">
                <div class="col-lg-6 column1">
                   
                <a href="admin_home.php">  <img src="images/logo-small.jpg" />&nbsp;&nbsp;</a><a href="admin_home.php">Go Get</a>
                    
                
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6" >
                    <h4>Search Donation Details</h4>
                </div>
            </div>

            <div class="row justify-content-center" >
                <div class="col-lg-6 item1"  >
                    
                    <form class="d-flex" action="" method="post">
                        <i class="fa-sharp fa-solid fa-magnifying-glass p-2"></i>
                        <input type="text" name="searchtxt"  placeholder="search" class="form-control" />
                        <button class="btn btn-primary" name="searchbtn" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="container">

            <div class="row justify-content-center" >
            <?php
            if(isset($_POST['searchbtn']))
            {
                $st=$_POST['searchtxt'];
                $query="select * from donar_add_donation where  itemname like '%$st%'";
            }
            else{
$query="select * from donar_add_donation ";
            }
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
?>


<div class="col-lg-6 bg-light item6 mb-5 ">
    
                    <img src="uploads/<?php echo $row['picture']?>" width="80%" height="300px;" class="ms-5" />

                    <p>Name: <?php echo $row['itemname'] ?></p>
                    <p>Description: <?php echo $row['description'] ?> </p>
                    <p>Quantity: <?php echo $row['quantity'] ?></p>
                    <p>Landmark: <?php echo $row['landmark'] ?></p>
                    <p>City: <?php echo $row['city'] ?></p>
                    <p>Address: <?php echo $row['address'] ?></p>
                    <p>Pincode: <?php echo $row['pincode'] ?></p>
                    <p>Mobile: <?php echo $row['mobile'] ?></p>
                    <p id="para">Status: <?php echo $row['status'] ?></p>
                    
       
        <a href="a_approve_status.php?id=<?php echo $row['id']?>">   <button type="submit" id="btntype">Update Status</button>
        </a>

<br/>
<br/>
</div>


<?php } ?>
</div>
</div>
<br/>
<br/>

        <div class="row bg-white p-3 mt-5 ">
            <div class="col-lg-6 text-center">
          <a href="admin_home.php"> <h2> <i class="fa-solid fa-house-chimney" id="i2"></i></h2></a>
              <a href="admin_home.php" id="tall2">home</a>
            </div>

            <div class="col-lg-6 text-center">
              <a href="index.php">  <h2><i class="fa-solid fa-power-off" id="i3"></i></h2></a>
                <a href="index.php" id="tall3">Logout</a>
            </div>
        </div>

        </div>
    </body>
</html>