<?php
include "header.php";
?>
<div class="row " id="back1">
                <div class="col-lg-6 ps-5 ms-5">
                    <h1 style="color:white">News</h1>
                </div>
              </div>

 <div class="container ">
     <div class="row mt-5 p-5" >
       <div class="col-lg-6">
       <div data-aos="flip-up">
        <img src="images/boy.jpg" width="100%" height="90%" />
</div>
      </div>
      
          <div class="col-lg-2">
          <div data-aos="flip-right">
            <img src="images/u-3.jpg.webp" width="100%" height="190px">
</div>
            <h5>New Cause to help.</h5>
            <br/>
          </div>

            <div class="col-lg-2">
            <div data-aos="flip-down">
            <img src="images/cause-2.jpg.webp" width="100%" height="180px">
</div>
            <h5>We Love to help People</h5>
            <br/>
           </div>
           <div class="col-lg-2">
           <div data-aos="zoom-in">
            <img src="images/cause-1.jpg.webp" width="100%" height="180px">
          </div>
            <h5>New ideas for helping.</h5>
            <br/>
          </div>
       
     </div> 
  <div class="row " id="tail1">
    <div class="col-lg-6">
    <div data-aos="fade-down">
        <h1 id="m1">Being a volunteer
        </h1>
        <p id="m2">Volunteering involves giving your time and skills to help others without financial gain. It can be done in various settings, such as non-profit organizations, community centers, schools, hospitals, and environmental projects. Volunteering for donation efforts is a powerful way to contribute to the well-being of others and make a positive impact in your community. Whether it's lending a hand.
</p>
       
</div>
    </div>
    <div class="col-lg-6 ps-5 ">
    <div data-aos="zoom-out-down">
      <img src="images/donate.jpg"  height="350px" width="90%">
</div>
</div >
   </div>
 <div class="row p-3">
  <div class="col-lg-8">
  <div data-aos="zoom-in-down">
    <img src="images/newscontent.jpg" width="100%" height="100%" />
</div>
</div>

<div class="col-lg-4">
              <div class="card">
                <div class="card-body" id="box8">
                <div data-aos="flip-right">
              <img src="images/cause-3.jpg.webp"/>
</div>
              <h1 class="card-title"  style="color:black"> Food for All</h1>
              <p class="card-text" id="main8">Providing food for all involves a multifaceted approach that includes sustainable agricultural practices, equitable distribution systems, and innovative technologies to increase crop yields and reduce waste. It requires collaboration between governments, organizations, and local communities to ensure that resources are allocated . </p>
              </div>
              </div>
            </div>

</div>

<div class="row p-5" id="tail1">
<div class="col-lg-6 ">
<div data-aos="fade-up-right">
              <img src="images/welcome.jpg.webp" width="90%" height="400px;"/>
</div>
            </div>
            <div class="col-lg-6">
            <div data-aos="flip-up">
        <h1 id="m1">Toys for children</h1>
        <p id="m2">Donating toys for children is a wonderful way to bring joy and happiness to those in need, fostering a sense of community and compassion. Your contributions can make a significant difference in a child's life, providing them with not only entertainment but also a sense of normalcy and comfort. Whether it's through local charities.</p>
        
</div>
    </div>


</div>
</div>  




<div class="container">

<div class="row justify-content-center" id="tail1" >
<?php
$query="select * from admin_news ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
?>

    <div class="col-lg-6 bg-light item6 mb-3"  >
    <div data-aos="zoom-in-down">
    <h1 style=" text-align:center;" id="m1"> <?php echo $row['title'] ?></h1>
</div>
    <br/><br/>
    <div data-aos="flip-left">
        <img src="uploads/<?php echo $row['pic']?>" width="80%" height="300px;" />
</div>
       <br/></br>
       <div data-aos="zoom-out-up">
        <p id="m2" > <?php echo $row['description'] ?> </p>
</div>
        
        <br/>
        <br/>
        
     
     
    </div>

<?php } ?>





   
   
</div>



</div>
<br/>
<br/>








<?php
include "footer.php";
?>