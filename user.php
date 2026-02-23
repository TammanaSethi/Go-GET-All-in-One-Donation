<?php
include "connection.php";
?>

<html>
    <head>
        <title>Registration form for user</title>
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
if(isset($_POST['btnuser']))
{
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $city=mysqli_real_escape_string($con,$_POST['city']);
  $petname=mysqli_real_escape_string($con,$_POST['petname']);
  $bestfriendname=mysqli_real_escape_string($con,$_POST['bestfriendname']);
  $query="insert into user(username,email,password,mobile,address,city,petname,bestfriendname,curdate)  values('$username','$email','$password','$mobile','$address','$city','$petname','$bestfriendname',now())";
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
                   <label><i class="fa-solid fa-user"></i>&nbsp;&nbsp;User name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" id="box1" name="username"/>
                    <br/>
                    <label><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;Email</label>
                    <input type="email" class="form-control" placeholder="Email id" id="box1" name="email"/>
                    <br/>
                    <label><i class="fa-solid fa-lock"></i>&nbsp;&nbsp;Password</label>
                    <input type="Password" class="form-control" placeholder="Password" id="box1" name="password"/>
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;Mobile</label>
                    <input type="tel"  class="form-control" placeholder="Mobile no." id="box1" name="mobile"/>
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;Address</label>
                    <input type="text" class="form-control" placeholder="Address" id="box1" name="address" />
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;City</label>
                    <input type="text" class="form-control" placeholder="City" id="box1" name="city"/>
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;&nbsp;What is your pet animal name?</label>
                    <input type="text" class="form-control" placeholder="Enter the answer" id="box1" name="petname"/>
                    <br/>
                    <br/>
                    <label><i class="fa-solid fa-arrow-right"></i>&nbsp;&nbsp;What is your school best friend name?</label>
                    <input type="text" class="form-control" placeholder="Enter the answer" id="box1" name="bestfriendname" />
                    <br/>
                    
              <button class="btn55" type="submit" name="btnuser">Sign Up</button>
              <br/>
              <p>Already have an Account?&nbsp;<a href="user_login.php">Sign In</a></p>
            

       


                </form>
             </div>
        </div>
        
        </div>
    </body>
</html>