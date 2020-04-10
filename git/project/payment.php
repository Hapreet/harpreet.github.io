<!DOCTYPE html>
<html>
<head>
   


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<title>payment </title>
	<style type="text/css">
		
		html
		   {

		   	scroll-behavior: smooth;
		   	overflow-x: hidden;
		   	overflow-y: hidden;
            transition: 2s;
		   }
		body
		   {
		   	margin:0px;
		   	padding:0px ;
           
		   }


        .move
           {
             
             height: 600px;
               width: 100%;
               background-image: url(imgs/bank125.jpg);
               background-attachment: fixed;
                background-size: 100% 120%;
                background-repeat: no-repeat;
               
           }
		 nav
		   {

		   	color:white;
		   	margin-top: -400px;
		   	margin-left:70px;



		   } 

		


	  a
	    {

	    	text-decoration: none;
	    	padding-left: 10px;
	    	color: black;

	    }

	 span
	    {


           
                 position:fixed;
                 top: 0;
                 color:#00FA9A;
             
	    }

	  .middle
	    {
            
            margin-top: -5px;
	    	 background-image: url(imgs/bank126.jpg);
               background-attachment: fixed;
                background-size: 100% 120%;
                background-repeat: no-repeat;
	    	height: 500px;
	    	width: 1350px;

	    }  

       .scroll
        {

        	scroll-behavior: smooth;
        }
	  .get
	    {
	    	position: absolute;
	    	margin-top:-700px;
	    	margin-left: 400px;
	    	color:white;
	    	font-size:50px;

	    }

	   .fd
	    {
	    	color:black;
	    	font-size: 30px;
	    	width:420px;
	    	height: 180px;
	    	/*border-radius: 18px;*/
	    	border:2px solid black;
	    }
	    

	    button{
	    	    height:45px;
	    	    width: 120px;
                background: none;
	    	   
              

	          }
	

	

    .form
         {

         	margin-top: -400px;
         	margin-left: 300px;
         }
    .font1
     {

     	font-size: 100px;
     	color: white;
     	border:3px solid  white;
     	transition: 2s;

     }
     
    .font1:hover
     {

     	transform:scale(1.5);
     }
     .font2
     {

     	font-size: 100px;
        color:  white;;
     	border:3px solid  white;
     	transition: 2s;
     	

     }

      .font2:hover
     {

     	transform:scale(1.5);
     }
     
     .font3
     {

     	font-size: 100px;
	    color:  white;;
     	border:3px solid  white;
     	transition: 2s;
     	
     }

      .font3:hover
     {

     	transform:scale(1.5);
     }
     
     .font4
     {

     	font-size: 100px;
        color:  white;;
     	border:3px solid  white;
     	transition: 2s;
     	
     }

     .font4:hover
     {

     	transform:scale(1.5);
     } 
    
     .font5
     {

     	font-size: 100px;
        color: white;
     	border:3px solid white;
     	transition: 2s;
     	
     }

 .font5:hover
     {

     	transform:scale(1.5);
     }

    .arrow
      {

      	margin-left:600px;
      	margin-top: 100px; 
      } 
     span
      {
        padding: 25px;
        color: white;
      }

      .btn
       {
        
        background-color: black;
        color:white;
        border-color: white;
        padding: 5px;
        margin-left: 50px;
        margin-top: 20px;
        transition: 1s;
        /*box-shadow: 1px 1px 1px 1px ;*/
       }

       .btn:hover
        {

        background-color:white;
        color:black;
       
        }
	</style>
</head>
<body>
<div class="move" id=upward>
<span><i class="fa fa-shopping-cart fa-2x">        Smart Pay</i></span>
     
</div>
     <div class="middle" id=scroll>
     	

     </div>
     
     <div class="form">
       <a href="mobile.php" target="frame"><i  style="margin-left:-150px;position: absolute; "class="fa fa-mobile     fa-fw  font1"></i></a>
       <a href="wifi.php" target="frame"><i style="margin-left:50px;position: absolute;" class="fa fa-wifi       fa-fw  font2"></i></a>
       <a href="metro.php" target="frame"><i  style="margin-left:250px;position: absolute;"class="fa fa-train      fa-fw  font3"></i></a>
       <a href="gas.php" target="frame"><i  style="margin-left:450px;position: absolute;"class="fa fa-flask      fa-fw  font4"></i></a>
       <a href="dth.php" target="frame"><i style="margin-left:650px;position: absolute;"class="fa fa-television fa-fw  font5"></i></a>
     </div>
       <!-- arrow for upward control; -->
       <div class="arrow">
         <a href="#upward"><i style=" color:white;margin-top:50px;position: absolute;"class="fa fa-arrow-up fa-2x"></i></a>
       </div>
     <div class="get">

     	<fieldset class="fd">
     		<legend style="margin-left: 290px;color: white;">
     			Recharges
     		</legend>
             
             <a href="mainchk.php" target="mainchk.php"> <button class="b2  btn btn-success">DASHBOARD</button></a>
	         <a href="#scroll">  <button class="b1 btn btn-success">RECHARGE</button></a>
     	</fieldset>
     </div>
</body>
</html>