<!-- php -->

 <?php

   
  include("connect.php");
   session_start();
  
   
 ?>





<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> login page</title>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
	 <style type="text/css"> 
   
   #loading
         {

               width: 100%;
               height: 100vh;
               background:#fff url("imgs/banka.gif") no-repeat center;


         }
   html
      {

        scroll-behavior: smooth;
      }
   body
      {
        scroll-behavior: smooth;
        background-image:url(imgs/bank38.jpg);
        background-attachment: fixed;
        
      }


    .smart
       {

                 /*position:fixed;*/
                 /*top: 0;*/
                 position: relative;
                 margin-top: -650px;
                 margin-left: 60px;
                 padding:5px; 
                 color: white;
                 font-weight: bolder;
                 font-size: 35px;
                 font-family: "Comic Sans MS", cursive, sans-serif;
        }
    .desc
        {
                 position: relative;
                 margin-top: 100px;
                 margin-left: 60px;
                 color: white;
                    
        }         
    
    button
        {

                position:relative;
                margin-top: 35px;
                margin-left: 70px;
                padding:10px;
                padding-top: 1px;
                border-radius: 4px;
                transition: 0.6s;
                overflow: hidden;
                background:none;
                width: 240px;
                height: 50px;
                border:2px solid white;
                border-bottom: 2px solid orange;
                font-size: 18px;
                color: white;
                font-weight: bold;
                padding-top: 5px;
        } 


    button:focus
      {
        outline: none;
      }


    button:before
      {

        content: '';
        display: block;
        position: absolute;
        background:rgba(255,255,255,.5);
        width:60px;
        height: 100%;
        left: 0;
        top: 0;
        opacity: .5s;
        filter:blur(30px);
        transform:translateX(-130px) skewX(-15deg);
      }  
   
    button:after
      {

          content: '';
          display: block;
          position: absolute;
          background:rgba(255,255,255,.2);
          width: 30px;
          height:100%;
          left: 30px;
          top: 0;
          opacity: 0;
          filter: blur(30px);
          transform: translate(-100px) scaleX(-15deg);
      }
    button:hover
      {
        background:black;
        color: orange;
        
        border:2px;
       
      }

      button:hover:before
      {

        transform:translateX(300px) skewX(-15deg);
        opacity: .6;
        transition: .7s;
      }


    button:hover:after  
      {

        transform:translateX(300px) skewX(-15deg);
        opacity: 1;
        transition: .7s;
      }

    .card
       {

        position: absolute;
        margin-top: 350px;
        position: center;
         transition: 1s;
         box-shadow: 1px 1px 5px 1px orange;

        /*padding-left: 100px;*/

       }  
    .mission
       {

         /*background-color: #adadad;*/
         width: 100%;
         height: 550px;
         /*color: white;*/
         position: absolute;
         margin-top: 340px;
         font-size:80px;
         text-align: center;
         font-family: arial header;
         background-color:white;
         /*background-image: url(imgs/bank120.jpg);*/
        /*background-size:100% 100%:*/
        /*background-position:cover;*/
        /*background-attachment:fixed;*/


       } 
       /*background image for services */
    .backimage
       {

        background-image: url(imgs\bank16.jpg);
       }

       /*table row content */
    .tr1
       {

         background-color: black;
         color:white;  
         width:750px;
         padding-top:-100px;

       }

    .tr2
       {

         background-color: red;
         color:white;  
         width:750px;

       }

    .tr3
       {

         background-color:#adadad;
         color:white;  
         width:750px;
        
       }

.card:hover
       {
         
         background-color:black;
         color: white;
         font-size: 20px;
       }

 /*icons for windows apple*/
 .fa-windows
       {
        
         
         position:absolute;
         margin-top: -1500px;
         margin-left: 95%;
          transition:1s;
       }
  .fa-windows:hover
       {
  
        font-size: 50px;
       
       }  

  .fa-android
       {
        
         
         position:absolute;
         margin-top: -1500px;
         margin-left: 95%;
          transition:1s;
       }

  .fa-android:hover
       {
  
        font-size: 50px;
       
        color:#44d43b;
       } 

 .fa-apple
       {
        
         
         position:absolute;
         margin-top: -1500px;
         margin-left: 95%;
          transition:1s;
       }
  .fa-apple:hover
       {
  
        font-size: 50px;
       
    
       }              
   /* footer*/
   .foot
       {

        padding-top: 70px;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
       }
  
  .marq
       {

        /*background-color:orange;*/
        position:absolute;
        margin-top:855px;
        width: 100%;
        color:black;
       }
       
     .modal-body input:focus,
     .modal-body input:active
     {

        outline:none;

     }  

     .toph
      {
        transition: 0.5s;
      }
    
     .toph:hover
      {
        position: absolute;
        margin-top:-10px; 
      }
	 </style>
</head>
<body onload="myfunction()">
  <div id="loading">
    
  </div>
        
        <!-- white strip for header -->
        
        <img src="imgs\bank16.jpg" width="100%" height="668px"> 
        <div class="smart" id="arrow">
         <nav ><i class="fa fa-shopping-cart fa-1x text-warning"> </i>       Smart Pay <span style="margin-left: 790px;font-family: none; font-size:20px; "> <a  style="color:orange;border:1px solid white;padding:10px;"href="fback.php">Feedback</a>    &nbsp&nbsp&nbsp    <a  style="color:white;border:1px solid orange;padding:10px;"href="contact.php">contact us</a> </span></nav>
        </div>
        <div class="desc">
          <b style="font-size: 80px;">A bank for good</b><br>
          <span style="font-size: 30px">Join an ethical bank that uses its savers'<br> money to lend to charities and social enterprises.</span>
        </div>
        
        <a href="#mision" style="text-decoration: none;">
          <button type="button">
           MISSION
          </button>
        </a>  
         <button type="button"data-target="#mymodal" data-toggle="modal">
          LOGIN
        </button>


        <!-- modal for login  -->
        <div class="modal bg-black fade" id="mymodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> 
                <h3 class="text-center text-warning">
                  Login
                </h3> 
                <button style="height:50px; width: 30px;" type="button"class="close" data-dismiss="modal">&times;
                  
                </button>               
              </div>
              <div class="modal-body">
                 <form action="" method="post">
                    <div class="form-group">
                      <label><i class="fa fa-user fa-2x text-success"></i>     Username</label>
                      <input type="text" name="user" class="form-control "required>
                    </div>
                     <div class="form-group">
                      <label><i class="fa fa-id-card-o fa-2x text-danger"></i>    Account no</label>
                      <input  type="text" name="acct" class="form-control "required>
                    </div>
                     <div class="form-group">
                      <label><i class="fa fa-lock fa-2x text-info"></i>      Password</label>
                      <input  type="password" name="pass" class="form-control" required>
                    </div>
                 
                 
                
              </div>
              <div class="modal-footer justify-content-center" >
                <input class="btn btn-warning text-white" type="submit" name="submit">
                 <a class="text-success" href="register.php">New around here? Sign up</a><br><br>
                <a  class="text-danger"href="forgotten.php">Forgot password?</a>
              </div>
            </div>
          </div>
        </div> 
                  
                </form>
<!-- php code for login  -->
<?php

  

  if(isset($_POST['submit']))
    {

      $user=$_POST['user'];
      $pass=$_POST['pass'];
      $acct=$_POST['acct'];
      $_SESSION['no']= $acct;
      $sql="SELECT * FROM form1 WHERE Name='$user' && Account_no='$acct' && password='$pass'";

      $query=mysqli_query($conn,$sql);

      $row=mysqli_num_rows($query);
      
          if($row==1)
             
            { 
                

                $_SESSION['USERNAME']=$user;
                $query="SELECT * FROM form1 WHERE Name='$user'";
                $run=mysqli_query($conn,$query);
                $acc=$result['Account no'];
                $_SESSION['account']=$acc;
                 echo"<script>window.location.href='mainchk.php';</script>";
                   exit;
            }
             
             else
                {

                  echo"<script>window.location.href='fail.php';</script>";
                   
                }

      
    } 
    

?>

                

       <div class="mission text-white">
        <h1 id="mision" style="font-size: 55px;margin-top: -110px;"> <i class="fa fa-paper-plane-o"></i> Our  Mission To Provide</h1>
       </div>

<!-- cards 1 -->
     <div class="c1"style="margin-top: 60px;">  
 <div class="card" style="width: 18rem;height: 22rem;  position: absolute;margin-top: 25%; margin-bottom: 10%;margin-left: 5%;">
   <img  style="border:2px solid orange;"src="imgs\bank129.jpg" height="150px" width="287px">
  <div class="card-body">
    <h1  style="border-bottom: 2px solid orange;"class="card-title">TRANSFER
    </h1>
    <p class="card-text">
      BEST SERVICE PROVIDED BY SMART PAY IS THAT U CAN TRANSFER FUND BY SINGLE CLICK 
    </p>
    
  </div>
   
 </div>     
</div>
<!-- cards 2 -->
<div class="card" style="width: 18rem;height: 22rem;  position: absolute;margin-top: 25%; margin-bottom: 10%;margin-left:28%;">
   <img  style="border:2px solid orange;"src="imgs\bank19.1.jpg" height="150px" width="289px">
  <div class="card-body">
    <h1  style="border-bottom: 2px solid orange;"class="card-title">SECURITY 
    </h1>
    <p class="card-text">
      FULL TIME SECURITY AVILABLE NO CHANCE OF HACKING
    </p>
    
  </div>
   
 </div>    
  <!-- cards 3 -->
   <div class="card" style="width: 18rem;height: 22rem;  position: absolute;margin-top: 25%; margin-bottom: 10%; margin-left: 51%;">
   <img style="border:2px solid orange;" src="imgs\bank98.jpg" height="150px" width="289px">
  <div class="card-body">
    <h1 style="border-bottom: 2px solid orange;" class="card-title">PAYBILL
    </h1>
    <p class="card-text">
    PAY YOUR ALL DOMESTIC BILL SMARTLY WITHOUT ANY INTERVENTION OF OFFICIALS
    </p>
    
  </div>
   
 </div>     
<!-- card 4 -->
<div class="card" style="width: 18rem;height: 22rem;  position: absolute;margin-top: 25%; margin-bottom: 10%;margin-left: 74%;">
   <img style="border:2px solid orange;" src="imgs\bank20.1.jpg" height="150px" width="289x">
  <div class="card-body">
    <h1  style="border-bottom: 2px solid orange;"class="card-title">24X7
    </h1>
    <p class="card-text">
      FULL GARANTY OF 24X7 SERVICES 
    </p>
    
  </div>
   
 </div>   

   <!--  marque-->
   <div class="marq">
    
<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><a href="" style="color: white;text-decoration: none;">Financial Results December 2019 | Press Release December 2019| Analyst Presentation December 2019 | Beware of fictitious offers/ lottery winnings/ cheap funds offers |</marquee></a>

     

   </div>
<!-- footer -->

  <div class="footer " style="margin-top:70% ;opacity:0.9;  border-bottom:2px solid white;width: 100%; height: 150px;">
    <!-- about us footer information  -->
    <div class="foot"> 
       <a style="padding-left: 50px; color: white;font-weight: bolder; " href="about.php"> <i class="fa fa-id-badge text-warning" aria-hidden="true"> </i> 
         ABOUT US
       </a>
       
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#"><i class="fa fa-globe text-danger" aria-hidden="true"> </i>
         Partner With Us
       </a>
       
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">
        <i class="fa fa-question-circle text-primary" aria-hidden="true"> </i>
         TERMS & CONDITIONS
       </a>
       
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">
        <i class="fa fa-camera text-dark" aria-hidden="true"> </i>
        BLOG
        </a> 
       
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">
       <i class="fa fa-flag-o text-white"> </i>
       MEDIA
       </a>
       
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">
       <i class="fa fa-users text-success" aria-hidden="true"></i> RECHARGE PARTNERS
       </a>
   
    </div>
    <br>
    <br>
    <p style="color:white; padding-left: 20px;margin-top: 40px;"><b>Corporate Office: Plot No 4, Sector -10 Dwarka New Delhi -110075    <a href="https://www.google.com/maps/search/paytm+office+in+jalandhar/@31.3629567,75.5538486,14z/data=!3m1!4b1" style="color:white; "><i class="fa fa-map-marker fa-2x"></i></b></a><br>   
   .</p>


     <!-- information regarding header -->
    <p style="margin-left: 680px; margin-top:-80px; font-size: 13px; color: white;">
     <b> Screen Reader Accessibility| Disclaimer| Privacy Policy| Contact Us| Sitemap| Terms of use</b><br>
Site best viewed at 1366x768 resolution in Chrome 30+, IE 11+, Firefox 27+, Android 5+ & latest version of others<br>

<b>Last Updated: 17-02-2020 | Application Development and Maintenance by Cyfuture</b>

   </p>

   <!-- button for up arrow -->
    <div class="toph"><a href="#arrow"><i class="fa fa-paper-plane fa-3x text-warning"style="margin-left: 1270px;border:1px solid white;border-radius:7px;padding: 10px;"></i></a>
    </a>
    </div>
    <div class="icon">
      
       <a class="win"  href="https://www.microsoft.com/en-in/p/paytm/9wzdncrfj4gm?activetab=pivot:overviewtab">  <!-- link for winows,apple,android icons   -->
        <i class="  fa fa-windows fa-2x text-warning  " aria-hidden="true"></i><br><br>
      </a>
    
      <a href="https://apps.apple.com/in/app/paytm-payments-bank-account/id473941634">
        <i class="fa fa-apple fa-2x text-white" aria-hidden="true"></i><br><br>
      </a>  
       
      <a href="https://play.google.com/store/apps/category/SHOPPING">  
        <i class="fa fa-android fa-2x text-warning" aria-hidden="true"></i>
      </a>     
    </div>
  </div>
 </div>
<script type="text/javascript">
  var    preloader=document.getElementById('loading');
   function myfunction()
   {

    preloader.style.display='none';
   }

</script>
<div style="font-size: 20px; text-align:center;margin-top: 200px;background-color:white;color:orange;font-weight:bold;height:70px;width: 100%; ">Copyright © Smart Pay. All rights reserved<br>From smart pay ltd.</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</html>

