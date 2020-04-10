<!DOCTYPE html>
<html>
<head>
	<title>  bill payments</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
	<style type="text/css">
		body{padding: 0px; margin:0px;}

   html
      {
        scroll-behavior: smooth;
      }	
    .heading
     {
     
      background-color: black;
      height: 60px;
      color:yellow;
      font-size:35px;
     }

    h1
     {
      margin-left:110px;
      padding-bottom:10px;
      padding-top: 10px;
     }
   h2
    
     {

       margin-left: 40px;
       color: white;
      
     } 

   .carousel-caption
    {

      margin-top: 550px;
    } 

   .electricity
    {

      
      margin-top: 100px;
      height: 550px;
      width: 100%;
      background-color:#00FA9A;
    }
  h1
    {
      margin-left: 650px;
      color: white;
    }


  .f1:hover
    {
    color:black;
    } 

   .current
    {

      margin-top: 100px;
      height: 690px;
      width: 100%;

    }  

    .water
    {

     /*background-color:#66fcf1;*/
      margin-top: 100px;
     background-image: url(imgs/bank98.jpg);
      height: 690px;
      width: 100%;
      border-color: white;
      
      
    } 
    .telephone
    {

      margin-top: 100px;
     background-color:#afd275;
      height: 690px;
      width: 100%;
     
    } 

   input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
   
   input[type=PASSWORD], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 40%;
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 70px;
  transition: 0.5s;
  transition: width 2s;
}

input[type=submit]:hover {
  background-image: linear-gradient(to right,orange,white,yellow);
  
  width: 60%;
  color: black;
}

.cu1{
  border-radius: 5px;
  color: black;
  background-color: ;
  padding: 20px;
  width: 20%;
  position:relative;
  margin-top: -50px;
  margin-left: 500px;
  border:1px solid ;
  box-shadow: 1px 10px 10px 1px grey;
}  

 .fa-home
  {
    color: yellow;
  }
  

  button
   {

    position:absolute;margin-top:-50px;margin-left:700px;background:none; border:3px solid white;height: 40px;width: 100px;border-radius: 4px;
    transition: 1s;
    font-weight: bold;
    color: #afd275;
   }
   button:hover
    {
      background: white;
      
    }

	</style>	      
</head>
<body>
  <div class="heading">
     <h2 ><i class="fa fa-university  ">  Smart Pay</i></h2>
     <h5 style=" color:white;margin-top: -10px;margin-left: 1200px;"><a href="mainchk.php"><i class="fa fa-home fa-1x text-white"></a></i>/pay bills</h5>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
      <img src="imgs\bank96.jpg" width="100%" height="600px"alt="First slide">
      <div style="position:absolute;margin-right:100px;margin-bottom:400px;color:white;font-size: 25px; font-weight: bold"class="carousel-caption">
             "WITH GREAT POWER <br> 
             COMES GREAT ELECTRICITY BILL"<br>
             <span style="position:absolute;margin-top:150px;margin-left:-250px;box-shadow: 0px 1px 50px 1px red; ">
              Pay your <span style="color:red;">ELectricty bill</span> through Smart pay platform and get 10% discount.
             <a style="color:green" href="#current">-pay now-</a> 
           </span>
        

      </div>
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100" src="imgs\bank85.jpg" width="100%" height="600px" alt="Second slide">
      <div style="margin-right:100px;margin-bottom:400px; color:white;font-size: 25px; font-weight: bold"class="carousel-caption">
             "WATER IS BLOOD OF EARTH <br> 
             SO DON'T WASTE IT"<br>
              <span style="position:absolute;margin-top:150px;margin-left:-250px;box-shadow: 0px 1px 50px 1px yellow; ">
              Pay your <span style="color:green;">Water supply</span> bill through Smart pay platform and get 10% discount.
              <a  class="water12"style="color:yellow" href="#water">-pay now-</a> 
           </span>
            
        

      </div>
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100" src="imgs\bank87.jpg" width="100%" height="600px "alt="Third slide">
      <div style="margin-right:100px;margin-bottom:400px; color:white;font-size: 25px; font-weight: bold"class="carousel-caption">
             "WITH GREAT POWER <br> 
             COMES GREAT ELECTRICITY BILL"<br>
              <span style="position:absolute;margin-top:150px;margin-left:-250px;box-shadow: 0px 1px 50px 1px purple; ">
              Pay your <span style="color:red;">Landline bill</span> bill through Smart pay platform and get 10% discount.
              <a style="color:yellow" href="#telephone">-pay now-</a> 
           </span>
            
        

      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndic" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
 <div class="electricity">
<h1>Online Payment mobile app on<br> your smartphone!</h1>
   <h4 style="margin-left: 650px; font-size: 20px;">SIMPLE AND FAST PAYMENTS</h4><br>

   <h4 style="margin-left: 650px; font-size: 30px;" >Recharge</h4>
  <h4 style="margin-left: 650px; font-size: 20px; color: white;">Recharge your Mobile, DTH, Datacard etc...</h4><br>

   <h4 style="margin-left: 650px; font-size: 30px;">Paybills</h4>
   <h4 style="margin-left: 650px; font-size: 20px; color: white;">Pay your Bills(Electricity, Water, Gas, Broadband, Landline etc...)</h4>

   <h4 style="margin-left: 650px; font-size: 30px;">Book Online</h4>
   <h4 style="margin-left: 650px; font-size: 20px; color: white;">Transfer funds.</h4><br><br>
   
  <h4 style="margin-left: 650px; font-size: 35px;"">Download The App :  <i style="color: white;"class=" fa fa-windows f1"></i>   <i style="color:white;" class=" fa fa-android"></i>  <i style="color: white;"class=" fa fa-apple"></i></h4>  
  <img style="margin-left: 100px; margin-top:-450px; border-radius:25px;" src="imgs\bank65.png" height="200px"width="250px"> 
 </div>    

<!-- caoursel ids -->
<div class="current" id="current">
  
        <h5 style="margin-left: 400px;padding-top: 50px; margin-bottom: 50px; font-size: 50px;color: green;opacity: 0.7;"> <i class="fa fa-cc-paypal"></i> PAY ELECTRICITY BILL </h5>

   <div class="cu1">
  <form  action="last.php" method="POST">
     <label for="OPERATOR">ELECTRICITY PROVIDER </label>
    <select>
      <option >pspcl</option>
      <option >hspcl</option>
      <option >mhspcl</option>
      <option >rjspcl</option>
      <option >hmspcl</option>
      <option >rpcl</option>

    </select>
  
    <label for="fname">How much to Pay?</label>
    <input type="text" id="fname" name="amount" placeholder="Enter amount.." required>
    <input type="submit" value="Proceed" name="electric">
  </form>
  <div class="btn">
     <a href="#top"><i style="position:absolute;margin-top:-50px;margin-left:710px;padding:5px;color:black;" class="fa fa-level-up fa-2x"></i>
    <button style="border:1px solid black;">
      Top
    </button>
  </a>
</div>
</div>
  
</div>

<div class="water" id=water>
<h5 style="margin-left: 480px;padding-top: 50px; margin-bottom: 50px; font-size: 50px;color:white;"><i class="fa fa-tint"></i>  PAY WATER BILL</h5>

    <div class="cu1">
  <form   style="color: white;"action="last.php" method="POST">
     <label for="OPERATOR">water PROVIDER </label>
    <select>
      <option >pspcl</option>
      <option >hspcl</option>
      <option >mhspcl</option>
      <option >rjspcl</option>
      <option >hmspcl</option>
      <option >rpcl</option>

    </select>
    <label for="fname">CONSUMER NO</label>
    <input type="text" id="fname" name="firstname" placeholder="Your ACCOUNT no.." required>
    <label for="fname">How much to Pay?</label>
    <input type="text" id="fname" name="amount1" placeholder="Enter amount.." required>
    <input type="submit" value="PROCEED" name="water">
  </form>
  <div class="btn">
     <a href="#top"><i style="position:absolute;margin-top:-50px;margin-left:710px;padding:5px;color:white;" class="fa fa-level-up fa-2x"></i>
    <button>
      Top
    </button>
  </a>
</div>
</div>
  
  
</div>
<div class="telephone" id=telephone>
<h5 style="margin-left: 400px;padding-top: 50px; margin-bottom: 90px; font-size: 50px;color:white;"><i class="fa fa-cc-paypal"> </i> PAY YOUR LANDLINE BILL</h5>

     <div class="cu1">
  <form  action="last.php" method="POST">
     <label for="OPERATOR">SELECT OPERATOR </label>
    <select>
      <option >pspcl</option>
      <option >hspcl</option>
      <option >mhspcl</option>
      <option >rjspcl</option>
      <option >hmspcl</option>
      <option >rpcl</option>

    </select>
    <label for="fname">TELEPHOPNE NUMBER( with STD code)</label>
    <input type="text" id="fname" name="firstname" placeholder="Your ACCOUNT no.." required>
    <label for="fname">How much to Pay?</label>
    <input type="text" id="fname" name="amount2" placeholder="Enter amount.." required>
    <input type="submit" value="proceed" name="telephone">
  </form>
  <div class="btn">
     <a href="#top"><i style="position:absolute;margin-top:-50px;margin-left:710px;padding:5px;color:white;" class="fa fa-level-up fa-2x"></i>
    <button>
      Top
    </button>
  </a>
</div>
  
</div>
<div style="background-color:black; height: 150px;width: 1350px;color: white;position: absolute;
margin-top: 60px;">

  © 2020 Happy Media Studios
</div>

<!-- java script   -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

  
</body>
</html>
<!-- code for php -->
