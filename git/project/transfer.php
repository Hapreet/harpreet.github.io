<?php

  include("connect.php");
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>transfer money </title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style type="text/css">
    


     html
        {

          scroll-behavior: smooth;
        }
   
   body
        {
          padding:0px;
          margin: 0px;
        }
    

     .content
             {

                border:1px solid black;
                height: 550px;
                width: 1100px;
                margin-left: 120px;
                text-align: center;
                font-size: 20px;
                border-radius: 10px;
                box-shadow: 1px 1px 2px 1px;



             }
    }

       
    .h1
       {

        margin-left:  297px;
        margin-top: -220px;
        font-size: 25px;
       } 

   
    .h2
       {

        margin-left:  635px;
        font-size: 25px;
        margin-top:-60px; 

       }


    .h3
       {

        position: relative;
        margin-left:  960px;
        margin-top: -61px;
        font-size: 25px;
       }   

    span
       {

        font-size: 30px;
        color: red;
       }   

   .fa-mobile
       {
        margin-left: 60px;
       }

     
   ul
   {
    border:1px solid black;
    padding-top:10px;
    padding-bottom: 10px;
    list-style-type: none;

   }

.offer
   {

    background-color:orange;
    color: white;
    height: 40px;
    padding-top: 25px;
    padding-left: 10px;
    font-size: 35px;
    margin-top: 350px;
   }
     
 input
   {

     padding:15px;
     color: white;
     position: relative;
     height: 11px;
     font-size: 20px;
     background:none;
     border:none;
     border-bottom: 1px solid white;
   }

   input[type="text"], input[type="number"],input[type="submit"], textarea, select { 
    outline: none;
}
 label
   {
     font-size: 25px;
   }    

 

  
.card
   {

    
    /*background-color: #FFbb33;*/
      background-color #20bf55;
background-image :linear-gradient(315deg, #20bf55 0%, #01baef 74%);
    height:200px; 
    width:1349px;
    margin-top: -25px;

   }
     
h5
  {
    margin-top: 30px;
    position: absolute;
    margin-left: 600px;
    color:black;
    font-size: 35px;
  }
.card2
  {
    position: absolute;
    background-color:white;
    height:250px; 
    width:1000px;
    margin-left: 200px;
    margin-top: 70px;
    box-shadow: 0 0 10px 1px rgba(0,0,0,.25);
    border-radius: 5px;

  } 


 .text1
   {
     
      position: absolute;
      padding-top: 10px;
      margin-top: 95px;
       height: 146px;
       padding-left: 20px;

   }
 
 .text2
  {
    
     padding-left:10px;
     position: absolute;
     height: 146px;
     margin-left: 240px;
     margin-top: 4px;
     padding-top:100px; 
     border-left:3px solid  #C0C0C0;
  } 
  
  .text3
  {
    padding-left:10px;
    position: absolute;
     height: 146px;
    margin-left: 490px;
   margin-top: 5px;
    padding-top:100px; 
    border-left:3px solid   #C0C0C0;
  } 
  
  .text4
  {
   
    padding-left: 10px;
    height: 146px;
    position: absolute;
    margin-left: 940px;
    margin-top: -128px;
    padding-top:100px; 
    border-left:3px solid   #C0C0C0 ;
  }
  
  .fa-shield
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   } 

  .fa-user-secret
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   } 

  .fa-money
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   } 
  
  .fa-american-sign-language-interpreting
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   

   
  .fa-adjust
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   
   

  .fa-university
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   
   

  .fa-check-square
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   
   

  .fa-clone
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   
  

  .fa-credit-card
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   
   

  .fa-cogs
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   
   

  .fa-money
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   
   

  .fa-life-ring
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }   

   .fa-registered
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   } 

  .fa-gavel
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
   }  

    .fa-share-square-o
   {
     background: -webkit-linear-gradient(top, orange 0%,black 100%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
     transition: 1s;
   }      

   .fa-share-square-o:hover
   {

    transform: scale(1.20);
   }

   .transfer
    {
       
       background:none;
    }

h1
  {
    color: #20bf5;
    background: -webkit-linear-gradient(top,black 10%,red 90%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
  } 

.butt
  {
    position: absolute;
    margin-top: -250px;
    color: white;
    font-size: 100px;
    margin-left: 600px;
  }
 
 h2
  {
   
    
    color: orange;
    background: -webkit-linear-gradient(top,black 10%,white 90%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
  }
  
  a
   {
    text-decoration: none; 
   }

.tex
   {
    margin-top:-400px;
    margin-left: 250px;
    position: absolute; 
    font-size: 40px;
     background: -webkit-linear-gradient(top,black 10%,white 90%); 
     -webkit-background-clip: text;
     -moz-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color:transparent;
     box-shadow: 0px 1px 50px 1px #20bf55;
     padding-left:10px; 
    
   }

.cash
  {
    margin-top: 450px;
    width:1000px;
    margin-left: 150px; 
    box-shadow: 0px 1px 50px 1px black;
    border-radius: 20px;
  }
  
  img
    {
      transition: 1s;

    }
  img:hover
   {
    transform: scale(1.12);
   }

  span
   {
    font-weight: bold;
    font-family: AComic Sans, Comic Sans MS, cursive;
   }

   button
   {

    position:absolute;margin-top:90px;margin-left:1240px;background:none; border:1px solid  #FFbb33;height: 40px;width: 100px;border-radius: 4px;
    transition: 1s;
    font-weight: bold;
   }
   button:hover
    {
      background: orange;
      
    }

 </style>

</head>
<body bgcolor="">
<h1 id="top"style="border-bottom: 2px solid orange; color: orange;padding-left: 40px;">
  Smart Pay<span style="margin-left: 940px;font-size: 20px;"> <a href="mainchk.php"><i class="fa fa-university"></i></a>/Payment transfer</span></h1>
<img  style="transform: none;"src="imgs/bank450.jpg"height="400px" width="1349px;"> 
 <div class="tex">
    <p>It's fast,easy, and convenient to send money online.</p>
    
  </div>
<div class="butt">
 
  <a href="#trans"><i class="fa fa-share-square-o""></i><br>
  <h2 style="font-size: 40px;margin-left: -40px;margin-top:-10px; ">Send Money</h2>
  </a>
</div>

<div class="card">
  <h5 style="color:white;margin-left: 420px;"> Why should you choose Smary Pay?</h5>
   <div class="card2">
     
    <div class="text1"><i style="font-size: 80px;position: absolute;margin-top: -50px;margin-left: 80px;" class="fa fa-shield"></i><br>
     <h1 style="font-size: 30px;">Fully Encripted</h1>
     
    </div>

      <div class="text2"><i style="font-size: 80px;position: absolute;margin-top: -50px;margin-left: 80px;" class="fa fa-money"></i><br>
     <h1 style="font-size: 30px;">Instant Cashout</h1>
     
    </div>

 <div class="text3"><i style="font-size: 80px;position: absolute;margin-top: -50px;margin-left: 80px;" class="fa fa-user-secret"></i><br>
     <h1 style="font-size: 30px;">Safe and Secure</h1>
     
    </div>
   </div>
</div>
<div class="text4"><i style="font-size: 80px;position: absolute;margin-top: -50px;margin-left: 80px;" class="fa fa-american-sign-language-interpreting"></i><br>
     <h1 style="font-size: 30px;">Transparent Pricing</h1>
     
    </div>
   </div>
</div>
<h1 style="position: absolute;margin-top: 250px;margin-left: 600px;font-size:100px;">Blog</h1>
<div class="cash">

  <table align="center" >
    <tr>
      <td><img  style="border-radius: 20px;"src="imgs/bank80.jfif" height="250px" width="350px"></td><span style="position: absolute;margin-top: 110px;margin-left:220px;color: white;font-size: 30px;">"Free to use"</span>
      <td><img  style="border-radius: 20px;"src="imgs/bank81.jfif" height="250px" width="350px"></td><span style="position: absolute;margin-top: 110px;margin-left:550px;color: white;font-size: 30px;">"Transfer 24x7"</span>
    </tr>
    <tr>
      <td><img  style="border-radius:20px;"src="imgs/bank82.jfif" height=250px" width="350px"></td><span style="position: absolute;margin-top: 350px;margin-left:250px;color: white;font-size: 30px;">"Fully Encripted"</span>
      <td><img  style="border-radius: 20px;"src="imgs/bank84.jfif" height="250px" width="350px"></td><span style="position: absolute;margin-top: 350px;margin-left:550px;color: white;font-size:30px;">"Increase your <br>business productivity"</span>
    </tr>
  </table>
</div>

<div style="margin-top:150px;margin-left:23px;border:25px solid  black;border-radius:20px;width: 1250px;height: 500px;">
  <img style="padding:30px;transform: none;"src="imgs/bank81.jpg" height="450px"width="1200px">
  <div style="margin-top:-250px;margin-left:750px;color:white; font-weight: bold;font-size:35px; ">
    -Many user's satisfy by services provided by smart pay-
  </div>
</div>
<div class="offer">
  Offer Details
</div>
<div class="offers">

  <ul>

    <li><i class=" fa fa-adjust fa-2x "></i>  Get upto Rs.50 cashback into your bank account on your first 15 transfers.</li><br>
    <li><i class="fa fa-university fa-2x"></i>  Offer is valid on money transfer of Rs.5 or more.</li><br>
    <li><i class="fa fa-check-square fa-2x"></i>  Get upto Rs.10 per transfer</li><br>
    <li><i class="fa fa-clone fa-2x"></i>  Transfer money to unique Smart pay UPI IDs every time to be eligible for the offer</li><br>
    <li><i class="fa fa-credit-card fa-2x"></i>  Link your bank account & create your Account on Smart pay app.</li><br>
    <li><i class="fa fa-cogs fa-2x"></i>  Offer is valid for all users on their first 15 money transfers to unique smartpay IDs</li><br>
    <li><i class="fa fa-money fa-2x"></i>  Cashback will credited in your bank account within 24 hours</li><br>
    <li><i class="fa fa-life-ring fa-2x"></i>  Limited period offer.</li><br>
    <li><i class="fa fa-registered fa-2x"></i>  UPI creation and transfer option is currently live on samrtpay  app only</li><br>
    <li><i class="fa fa-gavel fa-2x"></i>  Smartpay has the right to end or call back any or all of its offer without prior notice</li><br>

  </ul>

  
</div>
 <div class="transfer" id="trans">
   
 <img style="position:absolute;margin-top: 100px;margin-left:80px;transform: none;border-radius: 15px; " src="imgs/bank82.jpg"height="400px"width="1200px">
 <fieldset style="border:none;">
   <legend style="font-size: 35px;color:black;">Send money</legend>
  <form style="position:relative;margin-top: 250px; margin-left: 370px;color:white;"action=""method="POST">
    <label>Add Benificiary:</label>
    <input  style="margin-left: 70px;margin-top: -20px;position: absolute;color:white;"type="text" maxlength="4" name="send" required><br><br>
     <label>Amount to be send:</label>
    <input style="margin-left: 30px; position:absolute;margin-top: -25px;color:white;" type="number" maxlength="5" name="amount16" required><br><br>
     <input style="padding-top:5px;height: 35px; margin-left: 250px; margin-top:10px;border-bottom: none;"type="submit" name="transfer" value="Proceed">
   </form>
    
 </fieldset>
 </div>
 <div style="background-color: black; height: 250px; width: 1349px;margin-top:80px;">
  <div class="btn">
     <a href="#top"><i style="position:absolute;margin-top:90px;margin-left:1300px;padding:5px;color: orange;" class="fa fa-level-up fa-2x"></i>
    <button>
      Top
    </button>
  </a>
     <span style="position:absolute;margin-top:90px;margin-left:500px;color: white;">© 2020 Happy Media Studios</span>
  </div>   

 </div>
</body>
</html>

<?php


if(isset($_POST['transfer']))
    {

      $send=$_POST['send'];
      $amount=$_POST['amount16'];

      $sql="SELECT * FROM form1 WHERE Account_no='$send'";
      $query=mysqli_query($conn,$sql);
      $row=mysqli_num_rows($query);
      
          if($row==1)
             
            { 
                
                
                $_SESSION['rupee']=$amount;
                $_SESSION['ACC']=$send;
                echo"<script>window.location.href='ltransfer.php';</script>";
                exit;
            }
             
             else
                {

                  echo"<script>alert('INVALID BENIFICIARY ACCOUNT NO')</script>";
                   
                }

      
    } 
    

?>