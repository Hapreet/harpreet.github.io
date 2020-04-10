<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Parallax our team</title>
	<style type="text/css">
	 body
	    {
	    	margin: 0px;
	    	padding: 0px;
	    }

	.parallax1
	         {
               margin-top: -25px;
               height: 600px;
               width: 100%;
               background-image: url(imgs/bank101.jpg);
               background-size: 100% 100%;
               background-attachment: fixed;
	         }  

	 .parallax1 h1
	         {
	         	background:none;
	         	font-size: 35px;
	         	margin-left: 30px;
	         	color:orange;
	         	top: 10px;
                border-bottom: 4px solid white;
                width: 96%;
	         	position: relative;
	         }  
   
           a
            {
            	color:red;
              font-size: 25px;
            }

            
   .parallax1 h2
             {

             	position: relative;
             	top: 80px;
             	left:300px;
             	padding: 25px;
             	box-shadow: 10px 10px 100px 10px white;
             	color:white;
             	width: 400px;
             	font-size: 60px;
             	font-family:roboto; 
             }
        .content1
             {
             	 position: relative;
             	 margin-top: -25px;
             	 font-size: 40px;
             	 background-image: url(imgs/bg2.jpg);
                 background-size: 100% 100%;
                 background-attachment: fixed;
             	 color:white;
             	 height: 700px;
             } 
         
        img {
             
              border-radius: 20%;
            }

         #img1
            {
            	transition: 1s;
            	padding: 25px; 
            	


            }
         #img1:hover
            {
            	margin-top:-30px; 
                opacity: 0.4; 

            }
           
          td {
               
               padding-top:30px;
               padding-bottom:30px;
               padding-right:30px;   
              }

             
	.parallax2
	         {
               margin-top: 20px;
               height: 2500px;
               width: 100%;
               /*background-color:grey;*/
               background-image: url(imgs/bank120.jpg);
               background-size: 100% 100%;
               background-attachment: fixed;
	         } 
 
    .content2
             {
             	 position:relative;
             	 font-size: 40px;
                 background-size: 100% 100%;
                 background-attachment: fixed;
             	 color:white;
             	 height: 100px;

             }
        

         .c2
            {
              transition: 1s;
              color:white;
              background:none;
            }
        .c2:hover
            {
              background-color: white;
              box-shadow: 1px 2px 15px 1px white;
              color: black;
              display:block;
            }      
	</style>
</head>
<body bgcolor="orange">
  <div class="parallax1">
  	<h1>Smart Pay <span style="font-size:20px;margin-left: 75%;color: black;"><a href="mainchk.php"><i class="fa fa-home"></i></a>/Our Team</span></h1>

  	<h2><span style="color:orange; font-size:80px;">O</span>ur  <span style="color:orange; font-size:80px;">T</span>eam</h2>
  </div>
  
  <div class="content1">
  	 <h1 align="center">Members</h1>
  	 <table style="margin-left: 120px;">
  	 	<tr><td><img id="img1" src="imgs/happy3.jpg" height="200px"width="200px">
  	
  	 <span style="margin-top: 290px;margin-left:-210px;color:white;font-weight:bold;font-size:20px;position:absolute;">
  	 	
  	 		Co-Founder<br>Mr. Harpreet singh<br>[Bsc IT] 
  	 </span>
        <td><img id="img1" src="imgs/jatin.jpg" height="200px"width="200px">
  	
  	 <span style="margin-top: 290px;margin-left:-210px;color:white;font-weight:bold;font-size:20px;position:absolute;">
  	 	
  	 		 Manager<br>Mr. Jatin Bhardwaj<br>[Bsc IT] 
  	 </span>
     <td><img id="img1" src="imgs/amitform.jpg" height="200px"width="200px">
  	
  	 <span style="margin-top: 290px;margin-left:-210px;color:white;font-weight:bold;font-size:20px;position:absolute;">
  	 	
  	 		Asst. manager<br>Mr. Amit Kajla<br>[Bcom honours] 
  	 </span>
     
     <td><img id="img1" src="imgs/happy3.jpg" height="200px"width="200px">
  	
  	 <span style="margin-top: 290px;margin-left:-210px;color:white;font-weight:bold;font-size:20px;position:absolute;">
  	 	
  	 		Co-Founder<br>Mr. Harpreet singh 
  	 </span>


  	 </tr>
  	  </table>
  	</div>
  
  <div class="parallax2"> 
  	<h1 style="font-size:50px;color:orange;border:3px solid white;padding:25px;margin-top:8%;margin-left:40%;position:absolute;">Gallery</h1>

  	<div class="content2">
  
     <img style="border-radius: 15px;margin-top: 450px;margin-left: 5px;"src="imgs/bank106.png" height="250px"width="750px">
     <span class="c1" style=" border:2px solid white;padding:25px;margin-top:500px;margin-left:50px;position: absolute;color:white;">Main Page:<br>
     	            All Login Credantials
     </span>
  		
  	</div>
  	<div class="content2">
  
     <img  style="border:4px solid white;border-radius: 15px;margin-top: 55%;margin-left: 5px;"src="imgs/bank110.png" height="250px"width="750px">
     <span class="c2"style=" border:2px solid white;padding:25px;margin-top:57%;margin-left:50px;position: absolute;border-radius: 10px;width:450px;height: 150px; ">Dashboard:<br>
     	             All Services.
     </span>
  		
  	</div>
  	<div class="content2">
  
     <img style="border-radius: 15px;margin-top: 75%;margin-left: 5px;"src="imgs/bank112.png" height="250px"width="750px">
     <span style=" border:2px solid white;padding:25px;margin-top:77%;margin-left:50px;position: absolute;color: white;">Transfer Money:<br>
     	            From  one Account to Another Account.
     </span>
  		
  	</div>
  	<div class="content2">
  
     <img style="border-radius: 15px;margin-top: 95%;margin-left: 5px;"src="imgs/bank113.png" height="250px"width="750px">
     <span style=" border:2px solid white;padding:25px;margin-top: 100%;margin-left:50px;position: absolute;color: white;">Recharges.<br>
     	          Phone,Dish,Wifiand cylinder.  
     </span>
  		
  	</div>
  	<div class="content2">
  
     <img style="border-radius: 15px;margin-top:115%;margin-left: 5px;"src="imgs/bank114.png" height="250px"width="750px">
     <span style=" border:2px solid white;padding:25px;margin-top:117%;margin-left:50px;position: absolute;color: white;"> Pay online Bill:<br>
     	           Electricity, Water supply and landline.
     </span>
  		
  	</div>

    <div class="content2">
  
     <img style="border-radius: 15px;margin-top:140%;margin-left: 250px;"src="imgs/bank122.jpg" height="350px"width="850px">
      		
  	</div>
  </div>
  
<div style="margin-top: 400px;text-align: center;font-size: 25px;">
  copyrights 2020 Happy softech.

</div>

</body>
</html>