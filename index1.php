<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dimiya Tec</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/indexa.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="css/indexa.css"></script>
  
</head>
<body>

   <?php require_once 'nav.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/qqq.jpg?" alt="Image">

        <div class="carousel-caption">
          <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
           <h1 >Managed IT Services</h1>
        <h2 >"We strive to provide the best Digital and Technology advice for our clients and help them prosper" </h2>
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/aaa.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">   

  <h3>Our Services</h3><br>

  <div class="row">
    <div class="col-sm-4">
      <img src="img/Tech Strategy (1).png" class="img-responsive" style="width:100px height=100px " alt="Image">
      <h3 align="left">Tech Strategy</h3>
      <p align="left">We will work with you to understand your corporate goals and strategy to develop the best IT, Tech, Digital Strategy to achieve them</p>
    </div>

    <div class="col-sm-4"> 
      <img src="img/Digital Tech (1).png" class="img-responsive" style="width:100px height=100px" alt="Image">
      <h3 align="left">Digital Tech</h3>
      <p align="left">Based on the strategy on goal your company have we will work with you to enable the right Digital & Technology solutions

(ie. Microsoft Dynamics, Salesforce, Cloud Transformation, AI, Machine Learning, Data Science)</p>    
    </div>

    <div class="col-sm-4">
      <img src="img/Project Management (1).png" class="img-responsive" style="width:100px height=100px" alt="Image">
      <h3 align="left">Project Managementy</h3>
      <p align="left">We will help establish, govern and complete any your Digital, Technology or strategic projects</p>
    </div>
     <div class="col-sm-4">
      <img src="img/Outsourcing (1).png" class="img-responsive" style="width:100px height=100px" alt="Image">
      <h3 align="left">Outsourcing</h3>
      <p align="left">Our overseas outsourcing team could help assist you in any Digital or Technology support around the clock at low cost to give you peace of mind</p>
    </div>
    </div>
  </div>
</div>
<div>


<br>



<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

<?php

} else {
    header("location:login.php ");
}
?>
