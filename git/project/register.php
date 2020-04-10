<?php

 include("connect.php");


?>


<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&family=Orbitron:wght@800;900&display=swap" rel="stylesheet">
	<title>new user</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- validation for password and confirm password  -->

      <script type="text/javascript">
      	function chkpass()
      	 {

      	 	var p=f.password.value;
      	 	var cp=f.confirm.value;

      	 	  if(p==cp)
      	 	  	 {
      	 	  	 	// alert("passwor and confirm same ");
      	 	  	 	return true;
      	 	  	 }

      	 	  else
      	 	    {
      	 	    	alert("password and confirm password is mismatch");
      	 	    	 return false;
      	 	    }	 


      	 }
      </script>
  
	<style type="text/css">
   
   
   body
      {

       background-image: url(imgs/bg2.jpg);
       background-position:auto;
       background-size:  100% 100%;
       font-family: 'Orbitron', sans-serif;
font-family: 'Jura', sans-serif;
      }

  .form
      {
        width: 1100px;
        height:1000px;
        text-align: center;
        /*background-color:primary*/
       background: -webkit-linear-gradient(top, green 0%,black 100%);
        box-shadow: 1px 1px 15px 1px white;
        opacity: 0.9;
        border-radius: 10px;
        margin-left: 150px;
        margin-top: 100px;
        color: white;


      }  
   
   .formc
      {

        margin-left:-50px;
        margin-top: 40px;
        font-size: 19px;
        font-weight: bold;
         padding: 35px;

      } 

    label {
    width:180px;
    clear:left;
    text-align:right;
    padding-right:10px;
    }    

    input, label 
    {
       float:left;
       color: white;
       background: none;
    }  

  .image
    {

      position: absolute;
      margin-top: -789px;
      margin-left:660px;
    }

  
      
       input[type="text"], input[type="number"],input[type="password"], input[type="email"],textarea, select
        { 
          
          outline: none;
          border:none;
          border-bottom: 1px solid white;
          

       } 

  </style>
 <body>
   <h1 class="text-white"><i class=" fa fa-university fa-1x"></i>  Smart Pay<a style="margin-left: 950px;font-size: 18px;" class="text-white" href="loginpage.php"><i class="fa fa-home"></i></a><span style="font-size: 18px;">/ Sign up</span></h1>
 
   <div style="height: 2px;width:100%;background-color:red;">
     
   </div>
  <div class="form">
    <b><h1>Registration  Form</h1></b>
     Please ensure you make your choices correctly, we will evaluate them and contact you soon.<br>
     An asterisk ( * ) indicates a mandatory field.


   <div class="formc">
   <form onsubmit=" return chkpass()"action="data.php" method="post" name="f" enctype="multipart/form-data">
     <label> *Account no:    </label>
     <input type="text" name="ac" required autocomplete="off" maxlength="4"> <br><br>
     <label>*Full name:      </label>
     <input type="text" name="name"required autocomplete="off"maxlength="10"><br><br> 
     <label> *E-mail:</label>
     <input type="email" name="Email"required autocomplete="off" ><br><br> 
     <label> Cellphone:</label>
     <input type="text" name="Cellphone"required autocomplete="off"maxlength="10"> <br><br>
     <label> Address:</label>
     <input type="text" name="Street"required autocomplete="off"> <br><br>
           
      <label for="City">City:</label>
      <select  style="margin-left: -362px;" name="city"required>
       <option value="jalandhar">select</option>
       <option value="jalandhar">Jalandhar</option>
       <option value="chandigarh">Chandigarh</option>
       <option value="nawansher">Nawansher</option>
       <option value="jalandhar">Ropar</option>
       <option value="chandigarh">Amritsar</option>
       <option value="nawansher">Gurdaspur</option>
       </select><br><br>
      <label for="State">State:</label>
      <select  style="margin-left: -362px;" name="State"required>
       <option value="jalandhar">select</option>
       <option value="Punjab">Punjab</option>
       <option value="Tamil nadu">Tamil nadu</option>
       <option value="Mizoram">Mizoram</option>
       <option value="Haryana">Haryana</option>
       <option value="Himachal">Himachal</option>
       <option value="Kashmir">Kashmir</option>
       </select><br><br>
     <label> DOB:</label>
     <input type="date" name="Birth" autocomplete="off"> <br><br>
     <label> Adhar no:</label>
     <input type="text" name="Adhar" autocomplete="off"> <br><br>
     <label> *Password:</label>
     <input type="password" name="password"required autocomplete="off"> <br><br>
     <label> *Confirm :</label>
     <input type="password" name="confirm"required autocomplete="off"> <br><br>  
       <h3  class="text-warning"style="opacity: 0.9;margin-top: 30px;"> TERMS AND CONDITIONS</h3>    
     
      <input style="position:absolute;margin-left: -400px; margin-top:30px;width: 20px;height: 20px;"type="checkbox" name="checkbox"required >
      <h2 style="text-align: center;font-size: 20px; margin-top: 35px;">  I accept the terms and conditions for signing up to this service,<br> and hereby confirm I have read the privacy policy.</h2>

     <input class="btn btn-warning text-white" style="font-size:25px;width:40%;margin-left:360px; margin-top:78px;margin-bottom: 50px;"type="submit" name="submit" >

     <div class="image">
      
      <div class="file-field">
      <div class="btn btn-info btn-sm float-left text-white">
       <!-- <span class="btn btn-primary">Browse</span> -->
       <input type="file" name="upload" required>
       </div>
    <div class="file-path-wrapper">
      <input class="file-path validate " type="text" placeholder="upload your pic">

<!-- code for php -->

    </div>
  </div>

       
     </div>              
    </form>
   </div> 
  </div>
</body>
</html>
