<?php

  session_start();
  include("connect.php");

?>


  <!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&family=Orbitron:wght@800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
       body
          {
            font-family: 'Orbitron', sans-serif;
font-family: 'Jura', sans-serif;
font-family: 'Playfair Display', serif;
          }
      .margin{ 

               margin-top: 50px;

   
            }

       .card1
            {

              position:absolute;
              margin-top: 150px;
               border: 5px solid grey;
                transition: 2s;
               border: 3px solid blue;
               border-radius: 20px;
            }
      
      .card1:hover
            {
               
               
               
               transform: scale(1.2);


              
            }
            
      .card2
            {

              position: absolute;
              margin-top:150px;
              margin-left: 210px;
              border: 5px solid darkgrey;
              transition: 2s;
              border: 3px solid blue;
               border-radius: 20px;
            } 

      .card2:hover
            {
               
               /*height: 160px;*/
               /*width: 160px;*/
               
              
                transform: scale(1.2);
              
            }  
     
      .card3
            {

              position: absolute;
              margin-top:150px;
              margin-left: 410px;
              border: 5px solid grey;
              transition: 2s;
               border: 3px solid blue;
               border-radius: 20px;

            } 

      .card3:hover
            {
               
               transform: scale(1.2);
              
            }


      .card4
            {

              position: absolute;
              margin-top:150px;
              margin-left: 610px;
              border: 5px solid grey;
              transition: 2s;
               border: 3px solid blue;
               border-radius: 20px;

            } 

      .card4:hover
            {
               
               transform: scale(1.2);
            }

      .card5
            {

              position: absolute;
              margin-top:150px;
              margin-left: 810px;
              border: 5px solid grey;
             transition: 2s;
              border: 3px solid blue;
               border-radius: 20px;

            } 

      .card5:hover
            {
              transform: scale(1.2);
              
            }  

  

    </style>

</head>

<body>
  <br>

  

   <!-- php test -->
   <?php
  
   error_reporting(0);
    session_start();
     $acc=$_SESSION['USERNAME'];
     $query="SELECT * FROM form1 WHERE Name='$acc'";
     $run=mysqli_query($conn,$query);
     $result=mysqli_fetch_assoc($run);

  echo"<h1 style='color:red;margin-left:20px;'>";
  echo"<img style='border-radius:50px;padding-left:px;border:3px solid blue;' src='".$result['uploadpic']."' height=80px width=80px >";
     echo $_SESSION['USERNAME'];
     echo"</h1>";
    
    echo"<h2 style='color:red; margin-left:1000px;margin-top:-70px;'>";
    echo "Account no:'".$result['Account_no']."'"; 
    echo"</h2>";
    

   ?>

  <div class="d-flex margin" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading bg-primary "> <i class="fa fa-home fa-1x"><b>  Dashboard</b></a></i> </div>

      <div class="list-group list-group-flush">
        <a href="#"class="list-group-item list-group-item-action bg-dark text-white"> <i class="fa fa-user fa-1x text-success"></i>     ABOUT US </a>

        <a href="#" class="list-group-item list-group-item-action bg-dark text-white "><i class="fa fa-users fa-1x text-primary"></i>    OUR TEAM</a>

        <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-tasks fa-1x text-danger"></i>      REPORTS</a>

        <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-exchange fa-1x text-warning"></i>    SPECIAL OFFERS</a>
        <a href=" help.html " class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-question fa-1x"></i>        Help</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"> 
          <i class="fa fa-server"></i></button>
         
        
           
           <button style="margin-left: 900px; background-color:red; opacity: 0.7; color: white;
         height: 41px; width: 85px; border-radius: 7px;">   <a style="color:white;"href="logout1.php">logout </a> 
           </button>
          
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
     <!-- card 1 -->
    <div class="card1">

      <a href="profile1.php"><img src="imgs\bank29.jpg" height="150px" width="150px"></a>
       <br><div style="text-align: center;color: red; font-family:times new roman">PROFILE</div>

    </div>
   
    <!-- card 2 -->

    <div class="card2">

      <a href="transfer.php"><img src="imgs\bank30.jpg" height="150px" width="150px"></a>
      <br><div style="text-align: center;color: red; font-family:times new roman">TRANSFER FUNDS</div>
    </div>
   
    <!-- card 3 -->
    <div class="card3">

      <a href="frameset.php"><img src="imgs\bank31.jpg" height="150px" width="150px"></a>
      <br><div style="text-align: center;color: red; font-family:times new roman">RECHARGES</div>
    </div>

    <!-- card 4 -->
    <div class="card4">

      <a href="pay.php"><img src="imgs\bank32.jpg" height="150px" width="150px"></a>
      <br><div style="text-align: center;color: red; font-family:times new roman">PAY BILLS</div>    
    </div>

    <!-- card 5 -->
    <div class="card5">

      <a href="ledger.php"><img src="imgs\bank34.jpg" height="150px" width="150px"></a>
      <br><div style="text-align: center;color: red; font-family:times new roman">LEDGER</div>  
    </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
<!-- code for php -->
