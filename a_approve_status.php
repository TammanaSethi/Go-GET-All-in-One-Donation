<?php include "connection.php"; 
$id=mysqli_real_escape_string($con, $_GET['id']);
?>
<html>
    <head>
        <title>Admin Approve donation status</title>
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
        <div class="container">
        <div class="row justify-content-center bg-white  mt-5" id="form1">
            <div class="col-lg-6">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <?php
if(isset($_POST['btnstatus'])) 
{
  $id=mysqli_real_escape_string($con,$_POST['id']);
  $status=mysqli_real_escape_string($con,$_POST['status']);
  
  $query="update donar_add_donation set status='$status' where id='$id'";
  if(mysqli_query($con,$query))
  {
    echo "<script>alert('Status updated');
    window.location.href='admin_approve_donation.php';
    </script>";
  }
  else{
    echo mysqli_error($con);
  }
}     
?>             


                    <label><i class="fa-solid fa-user" id="key"></i>&nbsp;&nbsp;Id</label>
                    <input type="text"  class="form-control" id="value1" value="<?php echo $id; ?>" name="id" />
                    <br/>
                    <select name="status">
                        <option >Reject</option>
                        <option>Approval</option>
                        <option>Pending</option>
                    </select>
                    <br/><br/><br/>
                    <button type="submit" class="btn btn-success" name="btnstatus">Save</button>
                </form>
            </div>
        </div>
        </div>

        <div class="row bg-white p-3" >
            <div class="col-lg-6 text-center">
            <a href="admin_home.php">   <h2> <i class="fa-solid fa-house-chimney" id="i2"></i></h2></a>
              <a href="admin_home.php" id="tall2">home</a>
            </div>

            <div class="col-lg-6 text-center">
            <a href="index.php">   <h2><i class="fa-solid fa-power-off" id="i3"></i></h2></a>
                <a href="index.php" id="tall3">Logout</a>
            </div>
        </div>

        

     </div>
    </body>
</html>