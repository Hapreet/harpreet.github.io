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

	  	background-color: orange;
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
	    	border-radius:25px;
	    	margin-left: 35%;
	    	margin-top: 150px;

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
             border-color: blue;
             background-color: black;
             color: white;
	    		 
	    } 

    .value1
        {

        	position:absolute;
        	margin-top: 60px;
        	margin-left: 30px;


        }
	</style>
</head>
<body>
	<a href="main.php"><i class="fa fa-home fa-5x"></i></a>
  <h1>PLEASE ENTER VALID USERNAME !</h1>
  <div class="form1">
  </div>     
  
  <div class="value">   
     <form action="profile1.php" method="POST">
  	   <label style="color: white;margin-left: 35px;"><i class="fa fa-user-circle-o fa-2x"> USERNAME</label></i><br><br>
  	   <span style="margin-left: 30px;"><input type="text" name="name" required=""></span>
  	   <div class="value1"><input class="btn btn-primary" type="submit" value="view"></div>
  	
     </form>
  </div>   
</body>
</html>