<?php

  session_start();
 // $amount1=$_SESSION['USERNAME'];
 // echo $amount1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>payment sucessful logo</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	 	
        body
		   {

		   	padding:0px;
		   	margin: 0px;
		   
		   }


		.box
		    {

		    	height: 550px;
		    	width: 750px;
		    	margin-top: 40px;
		    	margin-left: 300px;
		    	border-radius: 8px;
		    	opacity: 0.9;
		    	/*border:2px solid black;*/
		    	box-shadow:1px 2px 10px 1px;
		    }
 
      	.img
		    {
 
                position: absolute;
		    	margin-top: -430px;
		    	margin-left: 380px;
		    }   
		 
		.text
		    {
		    	margin-top: -85px;
		    	margin-left: 120px;
		    	font-size: 40px;
		    }
		    

		.footer
		    {

		    	background-color: black;
		    	height: 100px;
		    	margin-top: 100px;

		    }   

		 .header
		    {

		    	background-color: black;
		    	height: 80px;
		    	width: 100%;
		    	color: 	white;
		    	font-size: 35px;
		    	padding-left: 50px;
		    	padding-top: 30px;
		    }   

         a
          {

             text-decoration:none;
             color: white;

          }

       .butn
         {
     
            margin-top:-30px;
            margin-left: 1150px; 
           

         }  

        
	</style>
<!-- funtction for print reciept -->
	<script>

           function myFunction() {
           window.print();
         }

       </script> 
		    <!--  -->
</head>
<body>
	<div class="header">
		<i class="fa fa-university"></i>   Smart Pay
    </div>		
    <div class="butn">
		<a  href="loginpage.php"><i class="fa fa-home fa-2x"></i></a> 
		<a    onclick="myFunction()"style="margin-left: 35px;"href="#"><i class="fa fa-print fa-2x"></i></a>
	</div>
 <div class="box">
 	<h5 align="center" style="padding: 10px;font-size: 28px;">The Smart Pay pvt. ltd<br>  
 		<span style="font-size: 22px;">Payment reciept.</span></h5>
 </div>
 <div class="img">
		<img src="imgs/bank73.png" height="100px"
		width="100px" > <div class="text">Payment sucessful</div>
		<h1 style="margin-top: 50px; color: green;">Payment against: </h1>
		<h1 style="margin-top: 50px; color: green;"> Total  Payment(Rs): </h1>
		<h1 style="margin-top: -105px; color: green;">Debit from: </h1>
		<h1 style="margin-top: 100px; color: green;">Time: </h1>
		<h1 style="margin-top: -105px; color: green;">Date: </h1>
     
  </div>
   
<i style="font-size: 25px;margin-left: 600px; margin-top: 10px; " class="fa fa-smile-o"> Your Payment Was Sucessful </i>
<div class="footer">
	
</div>

</body>
</html>

<?php

  include("connect.php");
  $query="SELECT * FROM balance ORDER BY Account_no  DESC LIMIT 1";
  $run=mysqli_query($conn,$query);
  $result=mysqli_fetch_assoc($run);

   // $query1="SELECT * FROM balance WHERE Account_no";
  // $run1=mysqli_query($conn,$query1);
  // $result1=mysqli_fetch_assoc($run1);
   echo "<h1 style='margin-top:-550px;margin-left:700px;font-size:25px;'>".$result['Against']."</h1>";
   echo "<h1 style='margin-top:8px;margin-left:700px;font-size:25px;'>".$result['Account_no']."</h1>";
   echo "<h1 style='margin-top:-5px;margin-left:700px;font-size:25px;'>".$result['debit']." &#x20b9</h1>";
    echo "<h1 style='margin-top:8px;margin-left:700px;font-size:25px;'>".$result['date']."</h1>";
     echo "<h1 style='margin-top:8px;margin-left:700px;font-size:25px;'>".$result['Time']."</h1>";
?>

