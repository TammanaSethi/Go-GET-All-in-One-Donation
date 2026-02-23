<?php
session_start();
include "connection.php";
?>


<html>
    <head>
        <title>User login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="homestyle.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    </head>
    <body id="body1">
        <div class="background-shape"></div>
        <div class="container">
        <div class="row ">
            <div class="col-lg-12 p-5 text-center ">
            <a href="index.php">   <img src="images/logo-white (1).png"/></a>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-6 text-white link p-5">
 <?php
if(isset($_POST['btnuserlogin']))
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $q="select * from user where email='$email' and password='$password'";
    $result=mysqli_query($con,$q);
    if(mysqli_num_rows($result)>0){
        $_SESSION['useremail']=$email;
        echo "<script>window.location.href='user_home.php'</script>";
    }
    else{
        echo "<p class='text-danger'>Invalid Username or Password </p>";
    }
}
?>   

        
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Email</label>
            <input type="email" placeholder="info@example.com" class="form-control" id="box1" name="email"/>
            <br/>
            
            <label><i class="fa-solid fa-lock"></i>&nbsp;&nbsp;password</label>
            <input type="password" placeholder="password" class="form-control" id="box1" name="password"/>
            <br/>
            <br/>
            <button class="btn55 " type="submit" name="btnuserlogin">Log In</button>
            <br/>
            
</br>
        <p>Didn't have Account?<a href="user.php">Register Now.</a></p>
        <br/>
        <br/>
        </form>

        </div>
        </div>
        
        

      
        
        </div>
    </body>
</html>