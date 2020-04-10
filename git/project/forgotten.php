<?php

  include("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title> profile</title>
	<style type="text/css">
		
	body
	   {

          background-image: url("imgs/bg2.jpg");
          background-position: center;

	   }
		
		h1
		{

			text-align: center;
			color: white;

		}

	.form1
	    {

	    	height: 300px;
	    	width: 300px;
	    	background-color:black;
	    	color:black;
	    	border-radius:25px;
	    	margin-left: 35%;
	    	margin-top: 80px;

	    }	

	 .value
	    {

          position: relative; 
          margin-top: -250px;
          margin-left: 500px;

	    }  

	 input
	    {

	    	 outline: 0;
             border-width: 0 0 2px;
             width: 200px;
             border-color:red;
             background-color: black;
             color: white;
                 		 
	    } 

   input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
 
}

  input[type=number] {
  -moz-appearance: textfield;
      }
    .value1
        {

        	position:absolute;
        	margin-top: 60px;
        	margin-left: 30px;


        }
      
      .fa-home
        {
        	margin-left:40px;
        	margin-bottom: 10px;
        	margin-top: 10px; 
        }

	</style>
</head>
<body class="bg-primary">
	<a href="loginpage.php"><i class="fa fa-home fa-2x text-white"></i></a>
	<div style="background-color:red;height: 1px;width: 100%;margin-bottom: 50px;"></div>
  <h1>Please Enter  Valid Account Number!</h1>
  <div class="form1">
  </div>     
  
  <div class="value">   
     <form action="forgotten1.php" method="POST">
  	   <label style="color: white;margin-left: 25px;"><i class="fa fa-user-circle-o fa-2x"> Account No.</label></i><br><br>
  	   <span style="margin-left: 30px;"><input type="number" name="no" required></span>
  	   <div class="value1"><input class="btn text-black bg-white" type="submit" value="view"></div>
  	
     </form>
  </div>   
</body>
</html>