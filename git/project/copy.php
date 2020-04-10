<!-- php -->

 <?php
   
   include("connect.php");


 ?>





<!DOCTYPE html>
<html>
<head>
	<title> login page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
	 <style type="text/css"> 

   
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
    
    .button
        {

                position:relative;
                margin-top: 35px;
                margin-left: 70px;
                padding:10px;
                padding-top: 1px;
                border-radius: 20px;

        } 

    .button:hover
       {

              background-color:rgb(60,60,60);
              color: white;
              border-color: rgb(60,60,60);


       }
    .button1
       {
        background-color: transparent;
        color: white;
        position:relative;
        margin-top: 35px;
        margin-left: 70px;
        padding:10px;
        padding-top: 1px;
        padding-left: 30px;
        padding-right: 30px;
        border-radius: 20px;
        font-family:sans-serif;
       

       }
    .button1:hover
       {

        background-color: white;
        color: black;
       } 
    .card
       {

        position: absolute;
        margin-top: 350px;
        position: center;
        /*padding-left: 100px;*/

       }  
    .serv
       {

         /*background-color: #adadad;*/
         width: 100%;
         /*color: white;*/
         position: absolute;
         margin-top: 240px;
         font-size:80px;
         text-align: center;
         font-family: arial header;


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
         color: red;
         font-size: 20px;
       }

 /*icons for windows apple*/
 .icon
       {
        
         
         position:absolute;
         margin-top: -1500px;
         margin-left: 97%;

       }
  .icon1:hover
       {
  
        font-size: 30px;
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

        background-color: #800020;
        position:absolute;
        margin-top:800px;
        width: 1340px;
        color: white;
       }

	 </style>
</head>
<body>
        
        <!-- white strip for header -->
        <div style="background-color:white;width: 800px;">
        <i  style="margin-left: 1270px;"class="fa fa-headphones fa-1x">+A </i>
        </div>  
        <img src="imgs\bank38.jpg" width="100%" height="668px"> 
        <div class="smart" id="arrow">
         <nav><i class="fa fa-shopping-cart fa-1x">        Smart Pay</i></nav>
        </div>
        <div class="desc">
          <b style="font-size: 80px;">A bank for good</b><br>
          <span style="font-size: 30px">Join an ethical bank that uses its savers'<br> money to lend to charities and social enterprises.</span>
        </div>
        <button  class="button  bg-danger "style="font-size: 25px; height: 62.5px; width: 140px;" type="button">
          <a href="#" style="text-decoration: none; color:white;"> MISSION</a>
        </button>
         <button  class="button1 bg-success"style="font-size: 25px; padding-top:10px;" type="button"data-target="#mymodal" data-toggle="modal">
          LOGIN
        </button>


        <!-- modal for login  -->
        <div class="modal bg-black fade" id="mymodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> 
                <h3 class="text-center text-primary">
                  signup
                </h3> 
                <button type="button"class="close" data-dismiss="modal">&times;
                  
                </button>               
              </div>
              <div class="modal-body">
                 <form>
                    <div class="form-group">
                      <label><i class="fa fa-user fa-2x"></i>     USERNAME</label>
                      <input type="" name="" class="form-control">
                    </div>
                     <div class="form-group">
                      <label><i class="fa fa-lock fa-2x"></i>      PASSWORD</label>
                      <input type="password" name="" class="form-control">
                    </div>
                 
                 </form>
                
              </div>
              <div class="modal-footer justify-content-center" >
                <button action="main.html" type="button" class="btn btn-success">
                  LOGIN
                  
                </button>
                <a href="register.html">New around here? Sign up</a><br><br>
                <a href=".html">Forgot password?</a>
              </div>
            </div>
          </div>
        </div>

       <div class="serv">
        OUR  MISSION TO PROVIDE
       </div>

<!-- cards 1 -->
     <div class="c1"style="margin-top: 60px;">  
 <div class="card" style="width: 18rem;  position: absolute;margin-top: 25%; margin-bottom: 10%;margin-left: 3%;">
   <img src="imgs\bank18.1.jpg" height="150px" width="280px">
  <div class="card-body">
    <h1 class="card-title">FUND TRANSFER
    </h1>
    <p class="card-text">
      BEST SERVICE PROVIDED BY SMART PAY IS THAT U CAN TRANSFER FUND BY SINGLE CLICK 
    </p>
    
  </div>
   
 </div>     
</div>
<!-- cards 2 -->
<div class="card" style="width: 18rem;  position: absolute;margin-top: 25%; margin-bottom: 10%;margin-left: 25%;">
   <img src="imgs\bank19.1.jpg" height="150px" width="280px">
  <div class="card-body">
    <h1 class="card-title">FULL SECURITY 
    </h1>
    <p class="card-text">
      FULL TIME SECURITY AVILABLE NO CHANCE OF HACKING
    </p>
    
  </div>
   
 </div>    
  <!-- cards 3 -->
   <div class="card" style="width: 18rem;  position: absolute;margin-top: 25%; margin-bottom: 10%; margin-left: 47%;">
   <img src="imgs\bank15.jpg" height="150px" width="280px">
  <div class="card-body">
    <h1 class="card-title">PAYBILL
    </h1>
    <p class="card-text">
    PAY YOUR ALL DOMESTIC BILL SMARTLY WITHOUT ANY INTERVENTION OF OFFICIALS
    </p>
    
  </div>
   
 </div>     
<!-- card 4 -->
<div class="card" style="width: 18rem;  position: absolute;margin-top: 25%; margin-bottom: 10%;margin-left: 69%;">
   <img src="imgs\bank20.1.jpg" height="150px" width="280px">
  <div class="card-body">
    <h1 class="card-title">24X7 SERVICES
    </h1>
    <p class="card-text">
      FULL GARANTY OF 24X7 SERVICES 
    </p>
    
  </div>
   
 </div>   

   <!--  marque-->
   <div class="marq">
    <!-- Codes by HTMLcodes.ws -->
<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><a href="" style="color: white;text-decoration: none;">Financial Results December 2019 | Press Release December 2019| Analyst Presentation December 2019 | Beware of fictitious offers/ lottery winnings/ cheap funds offers |</marquee></a>

     

   </div>
<!-- footer -->

  <div class="footer " style="margin-top:70% ;opacity:0.9;  background-color:black;width: 100%; height: 150px;">
    <!-- about us footer information  -->
    <div class="foot"> 
       <a style="padding-left: 50px; color: white;font-weight: bolder; " href="about.html">ABOUT US</a>
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">PARTNER WITH US</a>
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">TERMS & CONDITIONS</a>
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">BLOG</a> 
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">MEDIA</a>
       <a style="padding-left: 50px; color: white;font-weight: bolder;" href="#">RECHARGE PARTNERS</a>
    </div>
    <br>
    <br>
    <p style="color:#800020; padding-left: 20px;margin-top: 40px;"><b>Corporate Office: Plot No 4, Sector -10 Dwarka New Delhi -110075    <a href="#" style="color:#800020; "><i class="fa fa-map-marker fa-2x"></i></b></a><br>   
    Reach Us Copyright © SMART PAY. All rights reserved.</p>


     <!-- information regarding header -->
    <p style="margin-left: 680px; margin-top:-80px; font-size: 13px; color: #800020;">
     <b> Screen Reader Accessibility| Disclaimer| Privacy Policy| Contact Us| Sitemap| Terms of use</b><br>
Site best viewed at 1366x768 resolution in Chrome 30+, IE 11+, Firefox 27+, Android 5+ & latest version of others<br>

<b>Last Updated: 17-02-2020 | Application Development and Maintenance by Cyfuture</b>

   </p>

   <!-- button for up arrow -->
    <a href="#arrow"><img src="imgs\bank35.jpg"width="70px" height="70px" style="margin-left: 1270px;opacity: 0.9;">
    </a>

    <div class="icon">
      
       <a href="#">  <!-- link for winows,apple,android icons   -->
        <i class=" icon1 fa fa-windows fa-2x text-white " aria-hidden="true"></i><br><br>
      </a>
    
      <a href="#">
        <i class="fa fa-apple fa-2x text-white" aria-hidden="true"></i><br><br>
      </a>  
       
      <a href="#">  
        <i class="fa fa-android fa-2x text-white" aria-hidden="true"></i>
      </a>     
    </div>
  </div>
 </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</html>