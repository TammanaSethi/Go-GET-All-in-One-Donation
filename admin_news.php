<?php 
session_start();
include "connection.php";
?>

<html>
    <head>
        <title>Admin News</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="homestyle.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="body2">
        <div class="container">
            <div class="row justify-content-center  pt-4">
                <div class="col-lg-6">
                    <h6>News</h6>
                    </div>
                    </div>
                    <div class="row justify-content-center bg-white rounded pt-4">
                        <div class="col-lg-6">


                        <?php
if(isset($_POST['btnnews']))
{
  $title=mysqli_real_escape_string($con,$_POST['title']);
  
 
  $pic=$_FILES['pic']['name'];
  $tpic=$_FILES['pic']['tmp_name'];
  move_uploaded_file($tpic,'uploads/'.$pic);
  
  $description=mysqli_real_escape_string($con,$_POST['description']);

  $query="insert into admin_news(title,pic,description,curdate)  values('$title','$pic','$description',now())";
  if(mysqli_query($con,$query))
  {
    echo "<script>alert('News  added')</script>";
  }
  else{
    echo mysqli_error($con);
  }
}
?>                          




                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                        <lable><i class="fa-sharp fa-solid fa-key" id="key"></i>&nbsp;&nbsp;Title</lable>
                        <br/>
                        <input type="text" class="form-control" name="title"/>
                        <br/>
                        <lable><i class="fa-sharp fa-solid fa-key" id="key"></i>&nbsp;&nbsp;Pic</lable>
                        <br/>
                        <input type="file" class="form-control" name="pic"/>
                        <br/>
                        <lable><i class="fa-sharp fa-solid fa-key" id="key"></i>&nbsp;&nbsp;Description</lable>
                        <br/>
                        <textarea class="form-control" row="5" name="description" ></textarea>
                        <br/>
                        
                        <button type="submit" class="btn btn-success" name="btnnews" >Submit</button>
                     </form>

                   
                </div>

                
            </div>
           <div class="row p-3 justify-content-center">
            <div class="col-lg-6">
            <a href="view_news.php"><button type="submit" id="btntype">View News</button>
            </a>
</div>
</div>
        </div>

    </body>
</html>