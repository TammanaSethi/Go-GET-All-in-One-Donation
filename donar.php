<?php
include "connection.php";
?>

<html>
    <head>
        <title>Registration form for Donar</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="homestyle.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="body1">
        <div class="background-shape"></div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 p-5 text-center ">
                    <img src="images/logo-white (1).png"/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6  text-white link">

<?php
if(isset($_POST['btndonar']))
{
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
  $city=mysqli_real_escape_string($con,$_POST['city']);
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $pincode=mysqli_real_escape_string($con,$_POST['pincode']);
  $query="insert into donar(name,email,password,mobile,city,address,pincode,curdate)  values('$name','$email','$password','$mobile','$city','$address','$pincode',now())";
  if(mysqli_query($con,$query))
  {
    echo "<script>alert('Your Message is submitted')</script>";
  }
  else{
    echo mysqli_error($con);
  }
}
?>                







                   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <label><i class="fa-solid fa-user"></i>&nbsp;&nbsp; Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" id="box1" name="name"/>
                    <br/>
                    <label><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;Email</label>
                    <input type="email" class="form-control" placeholder="Email id" id="box1" name="email" />
                    <br/>
                    <label><i class="fa-solid fa-lock"></i>&nbsp;&nbsp;Password</label>
                    <input type="Password" class="form-control" placeholder="Password" id="box1" name="password"/>
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;Mobile</label>
                    <input type="tel"  class="form-control" placeholder="Mobile no." id="box1" name="mobile" />
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;City</label>
                    <input type="text" class="form-control" placeholder="City" id="box1" name="city"/>
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;Address/Landmark</label>
                    <input type="text" class="form-control" placeholder="Address" id="box1" name="address"/>
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;Pincode</label>
                    <input type="text" class="form-control" placeholder="Pincode" id="box1" name="pincode" />
                    <br/>

                    <button class="btn55 " type="submit" name="btndonar">Sign Up</button>
                  <br/>
                  <p>Already have an Account?&nbsp;<a href="donar_login.php" >Sign In</a></p>
                   </form> 
                 </div>   
            </div>
            
           
    
     
        </div>
    </body>
    </html>
