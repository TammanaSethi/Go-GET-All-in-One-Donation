<?php 
session_start();
include "connection.php"; 
$id=mysqli_real_escape_string($con, $_GET['id']);
?>

<html>
    <head>
        <title>User Request</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="homestyle.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="body2">
        <div class="container-fluid">
            <div class="row text-center justify-content-center bg-light p-3">
                <div class="col-lg-6 column1">
                   
                    
                <a href="user_home.php">  <img src="images/logo-small.jpg" />&nbsp;&nbsp;</a><a href="user_home.php">Go Get</a>
                
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center p-3">
                    <div class="col-lg-6">
                        <h5>Send Request</h5>
                    </div>
                </div>

                <div class="row justify-content-center" id="form3">
                    <div class="col-lg-6 ">

                    <?php
if(isset($_POST['btnrequests'])) 
{
  $donation_id=mysqli_real_escape_string($con,$_POST['donation_id']);
  $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $query="insert into user_search_requests(donation_id,mobile,name,curdate,email) values('$donation_id','$mobile','$name',now(),'$email')";
  if(mysqli_query($con,$query))
  {
    echo "<script>alert('Your request is added');
     window.location.href='user_search_donation.php';
    </script>";
  }
  else{
    echo mysqli_error($con);
  }
}     
?>   


                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                            <label>Request for</label>
                            <br/>
                            <input type="text" class="form-control"  value="<?php echo $id; ?>" name="donation_id"/>
                            <br/>
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" readonly value="<?php echo $_SESSION['useremail']?>"/>
                            <br/>
                            <label>Mobile</label>
                            <br/>
                            <input type="text" class="form-control" name="mobile"/>
                            <br/>
                            <label>Name</label>
                            <br/>
                            <input type="text" class="form-control" name="name" />
                            <br/>
                            <button type="submit" class="btn btn-success" name="btnrequests" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row bg-white p-3 mt-5 " >
                <div class="col-lg-6 text-center">
                <a href="user_home.php">    <h2> <i class="fa-solid fa-house-chimney" id="i2"></i></h2></a>
                  <a href="user_home.php" id="tall2">home</a>
                </div>
    
                <div class="col-lg-6 text-center">
                <a href="index.php">     <h2><i class="fa-solid fa-power-off" id="i3"></i></h2></a>
                       <a href="index.php" id="tall3">Logout</a>
                </div>
            </div>
    

        </div>

    </body>
</html>