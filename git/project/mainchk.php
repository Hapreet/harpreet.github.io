<?php

  session_start();
  include("connect.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>new dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <style type="text/css">
    
    body
    {
      margin:0px;
      padding: 0px;
    }
    .dashboard
     {

      position:fixed;
   background-color #20bf55;
background-image :linear-gradient(315deg, #20bf55 0%, #01baef 74%);

      height: 670px;
      width: 300px;
      font-size: 25px;
     }
     
    a
     {
      text-decoration: none;
     }
  
    a:hover
     {
      text-decoration: none;
     }
  h5
    {
      color:black;
    }

   li
    {
      list-style: none;
      width:300px;
      margin-left:-40px; 
      background-color:black;
      color: white;
      font-size: 15px;
      padding-left: 10px;
      padding-top: 20px;
      transition: 1s; 
      text-align: left;
     border-left: 1px solid #01baef;

    } 

  li:hover
   {
    
    background-color:white;
      
      width:295px;
      margin-left:-30px; 
      color: black;
      

   }

  
  
 .infor
   {
    width:77.5%;
    position: absolute;
    height:87px;
    margin-left:300px;
    margin-top:px;  
   background-color:#f2f2f2;
   }



       .card1
            {

              position:absolute;
              margin-top: 150px;
              margin-left: 500px;
               /*border: 2px solid black;*/
                transition: 2s;
              box-shadow: 1px 2px 4px 1px #20bf55; 
               border-radius: 10px;
            }
      
      .card1:hover
            {
               
               
               
               transform: scale(1.2);


              
            }
            
      .card2
            {

              position: absolute;
              margin-top:150px;
              margin-left: 650px;
              /*border: 2px solid black;*/
              transition: 2s;
              box-shadow: 1px 2px 4px 1px #01baef; 
               border-radius: 10px;
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
              margin-left: 800px;
              box-shadow: 1px 2px 4px 1px #20bf55; 
              transition: 2s;
              
               border-radius: 10px;

            } 

      .card3:hover
            {
               
               transform: scale(1.2);
              
            }


      .card4
            {

              position: absolute;
              margin-top:150px;
              margin-left: 950px;
             box-shadow: 1px 2px 4px 1px #01baef; 
              transition: 2s;
               
               border-radius: 10px;

            } 

      .card4:hover
            {
               
               transform: scale(1.2);
            }

      .card5
            {

              position: absolute;
              margin-top:150px;
              margin-left: 1100px;
             box-shadow: 1px 2px 4px 1px #20bf55; 
             transition: 2s;
              
               border-radius: 10px;

            } 

      .card5:hover
            {
              transform: scale(1.2);
              
            }  

      .rights
           {
            background: -webkit-linear-gradient(top,#20bf55 10%,#01baef 90%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
     font-weight: bold;
           }
  </style>
</head>
<body>

 <div class="dashboard">
  <span style="padding-left: 30px;color: white;"><i class="fa fa-university">Smart pay</i></span>
  <h5 style=" background-color:black;margin-top: 50px;color: white;font-size:30px;padding: 20px;padding-left: 40px;">  Dashboard</i></h5>
  
  <ul>
    <a href="about.php"><li><i class="fa fa-user fa-2x text-success"></i>  About us</li></a>
    <a href="ourteam.php"><li><i class="fa fa-users fa-2x text-primary"></i> Our Team</li></a>
    <a data-target="#mymodal" data-toggle="modal"><li><i class="fa fa-tasks fa-2x text-danger"></i> Reports</li></a>
    <a href="about.html"><li><i class="fa fa-exchange fa-2x text-warning""></i> Special Offers
    </li></a>
    <span><a href="logout1.php"><li><i class="fa fa-sign-out fa-2x text-info"></i> Logout</li></a></span>
    <a href="about.html"><li><i class="fa fa-question fa-2x"></i> Help</li></a>
  </ul>
   
  </div>
 <div class="infor">
 </div>

    <div class="card1">

      <a href="profile1.php"><img src="imgs\bank29.jpg" height="100px" width="100px"></a>
       <br><div style="text-align: center;color: black; font-family:times new roman">Profile</div>

    </div>
   
    <!-- card 2 -->

    <div class="card2">

      <a href="transfer.php"><img src="imgs\bank30.jpg" height="100px" width="100px"></a>
      <br><div style="text-align: center;color:  black; font-family:times new roman">Funds</div>
    </div>
   
    <!-- card 3 -->
    <div class="card3">

      <a href="frameset.php"><img src="imgs\bank31.jpg" height="100px" width="100px"></a>
      <br><div style="text-align: center;color:  black; font-family:times new roman">Recharges</div>
    </div>

    <!-- card 4 -->
    <div class="card4">

      <a href="pay.php"><img src="imgs\bank32.jpg" height="100px" width="100px"></a>
      <br><div style="text-align: center;color:  black; font-family:times new roman">Pay Bills</div>    
    </div>

    <!-- card 5 -->
    <div class="card5">

      <a href="ledger.php"><img src="imgs\bank34.jpg" height="100px" width="100px"></a>
      <br><div style="text-align: center;color: black; font-family:times new roman">Ledger</div>  
    </div>

    <div style=" position:absolute;width: 1066px;height:1px;background-color:black;margin-top: 300px;margin-left: 300px;">
      
    </div>
  <span  class="rights"style="position:absolute;margin-top:610px;margin-left:750px;color: black;">© 2020 Happy Media Studios.<br>From smart pay co-operative ltd.</span>


  <!-- code for modal to view reports  -->
   <!-- modal for login  -->
        <div class="modal bg-black fade" id="mymodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> 
                <h3 class="text-center text-warning">
                  Reports
                   </h3> 
               
                <button style="height:50px; width: 30px;" type="button"class="close" data-dismiss="modal">&times;
                  
                </button>               
              </div>
              <div class="modal-body">
                
                    <div class="form-group">
                      <h5> Recharges</h5>
                      <a href="ledger1.php">1. Wifi Network.  </a><br>
                      <a href="ledger2.php">2. Mobile Phone.  </a><br>
                      <a href="ledger3.php">3. Dish Network.  </a><br>
                      <a href="ledger4.php">4. Gas Cylinder.  </a><br>
                    </div>
                     <div class="form-group">
                      <h5>  Online payments</h5>
                      <a href="ledger5.php"> 1. Electricity Bill. </a><br>
                      <a href="ledger7.php"> 2. WaterSupply Bill. </a><br>
                      <a href="ledger6.php"> 3. Landline Bill. </a>
                    </div>
              </div>
              
            </div>
          </div>
        </div>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
 <?php
  
   
    session_start();
     $acc=$_SESSION['USERNAME'];
     $query="SELECT * FROM form1 WHERE Name='$acc'";
     $run=mysqli_query($conn,$query);
     $result=mysqli_fetch_assoc($run);
     $_SESSION['Total']=$result['Total'];
  echo"<h1 style='position:absolute;color:black;margin-left:350px;font-size:20px;font-family:arial-black'>";
   echo "Welcome"." ".$_SESSION['USERNAME']."!";
     echo"</h1>";
  echo"<img style='position:absolute;border-radius:50px;margin-left:1260px;margin-top:-40px;;border:3px solid #01baef;' src='".$result['uploadpic']."' height=70px width=70px >";
    
    
    echo"<h2 style='position:absolute;color:black; margin-left:1000px;margin-top:2px;font-size:20px;'>";
    echo "<i class='fa fa-money '></i> Currrent balance: ".$result['Total']." &#x20b9"; 
    echo"</h2>";
    

   ?>