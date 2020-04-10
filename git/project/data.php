<?php

   error_reporting();
   include("connect.php");
    $account=$_POST["ac"];
    $name=$_POST["name"];
    $email=$_POST["Email"];
    $phone=$_POST["Cellphone"];
    $street=$_POST["Street"];
    $city=$_POST["city"];
    $State=$_POST["State"];
    $adhar=$_POST["Adhar"];
    $password=$_POST["password"];
    $confirm=$_POST["confirm"];
   
    $file=$_FILES["upload"]["name"];
    $tempname=$_FILES["upload"]["tmp_name"];
    $folder="upload img/".$file;
    move_uploaded_file($tempname,$folder);
    
    $sql="INSERT INTO `form1`(`Account_no`,`uploadpic`, `Name`, `E-mail`, `cellphone`, `street`, `city`, `state`, `Adhar`, `password`, `confirm`) VALUES ('$account','$folder','$name','$email','$phone',' $street','$city','$State','$adhar','$password','$confirm')";

      $run=mysqli_query($conn,$sql);
             if ($run == TRUE) 
              {
                 
                   echo '<img  class="done1"src="imgs\bank48.png" height="200px" width="200px"><br>';
                 echo '<h1>SIGNUP </h1>';
                 echo '<h2>SUCCESSFUL</h2>';

  
 
              }
              
             else
              {

                
                echo '<img  class="done2"src="imgs\bank49.png" height="200px" width="200px"><br>';
                 echo '<h3>SIGNUP </h3>';
                 echo '<h4>UNSUCCESSFUL</h4>';



              } 

         ?>
         <!DOCTYPE html>
         <html>
         <head>
           <title></title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
           <meta name="viewport" content="width=device-width, initial-scale=1">

           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

           <style type="text/css">
             
             .marq
                {

                   background-color: #800020;
                   position:absolute;
                   margin-top:400px;
                   width: 1340px;
                   color: white;
                }

             a
                {

                   text-decoration: none;
                   font-weight:bolder; 
                   

                } 

          
            .done1
               {

                  position: absolute;
                  margin-left: 550px;
                  margin-top: 250px;
                  border:4px  solid green;
                  opacity: 0.8;

               } 

             .done2
               {

                  position: absolute;
                  margin-left: 550px;
                  margin-top: 250px;
                  border:4px  solid red;
                  opacity: 0.8;

               } 


          .logo
               {

                margin-top: 10px;
                margin-left: 1250px;

               } 

          h1
              {

                margin-top:450px;
                margin-left: 580px;
                color: green;
                opacity: 0.8; 
              }  
          h2
              {
                margin-top: 20px;
                margin-left: 590px;
                color: green;
                opacity: 0.8;
              }

           h3
              {

                margin-top:450px;
                margin-left: 600px;
                color:red; 
                opacity: 0.8;
              }  
          h4
              {
                margin-top: 20px;
                margin-left: 590px;
                color:red;
                opacity: 0.8;
              }

           nav
              {

                  position: absolute;
                  margin-top:-550px;
                  margin-left: 50px;
                  font-size: 60px;

              }

           </style>
         </head>
         <body>
        
              
               

         

         </div>

         <nav><i class="fa fa-shopping-cart fa-1x">        Smart <font color="blue">Pay</font></i></nav>
       

         <div class="logo">
           
           <a href="loginpage.php"><i class="fa fa-university fa-5x text-primary"></i></a>
         </div>
         </body>
         </html>
         