<?php 
include "connection.php";
?>

<html>
    <head>
        <title>update donation status</title>
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
                <div class="col-lg-6">
                    <h4>Add service </h4>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center bg-white rounded pt-4">
                    <div class="col-lg-5 pen ">
 <?php
if(isset($_POST['btnadddonation']))
{
  $itemname=mysqli_real_escape_string($con,$_POST['itemname']);
  $description=mysqli_real_escape_string($con,$_POST['description']);
  $quantity=mysqli_real_escape_string($con,$_POST['quantity']);
  $landmark=mysqli_real_escape_string($con,$_POST['landmark']);
  $city=mysqli_real_escape_string($con,$_POST['city']);
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $pincode=mysqli_real_escape_string($con,$_POST['pincode']);
  $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
  $query="insert into donar_add_donation(itemname,description,quantity,landmark,city,address,pincode,mobile,curdate)  values('$itemname','$description','$quantity','$landmark','$city','$address','$pincode','$mobile',now())";
  if(mysqli_query($con,$query))
  {
    echo "<script>alert('Added donation')</script>";
  }
  else{
    echo mysqli_error($con);
  }
}
?>                          





                        
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <label>Item Name</label>
                        <br/>
                        <input type="text" class="form-control" name="itemname"/>
                        <br/>
                        <label>Description</label>
                        <br/>
                        <input type="text" class="form-control" name="description"/>
                        <br/>
                        <label>Quantity</label>
                        <br/>
                        <input type="number" class="form-control" name="quantity"/>
                        <br/>
                        <label>Landmark</label>
                        <br/>
                        <input type="text" class="form-control" name="landmark"/>
                        <br/>
                        <label>City</label>
                        <br/>
                        <input type="text" class="form-control" name="city"/>
                        <br/>
                        <label>Address</label>
                        <br/>
                        <input type="text" class="form-control" name="address"/>
                        <br/>
                        <label>Pincode</label>
                        <br/>
                        <input type="text" class="form-control" name="pincode"/>
                        <br/>
                        <label>Mobile</label>
                        <br/>
                        <input type="text" class="form-control" name="mobile"/>
                        <br/>
                        <button type="submit" class="btn btn-success" name="btnadddonation" >Submit</button>
                       </form>
                    </div>
                </div>
            </div>

            <div class="row bg-white p-3 mt-5 ">
                <div class="col-lg-6 text-center">
               <a href="donar_home.php">   <h2> <i class="fa-solid fa-house-chimney" id="i2"></i></h2></a>
                  <a href="donar_home.php" id="tall2">home</a>
                </div>
    
                <div class="col-lg-6 text-center">
                  <a href="index.php">  <h2><i class="fa-solid fa-power-off" id="i3"></i></h2></a>
                    <a href="index.php" id="tall3">Logout</a>
                </div>
            </div>
       

        </div>
    </body>
</html>