<?php

 include("connect.php");


?>


<!DOCTYPE html>
<html>
<head>
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
          var name=f.name.value;
          var acct=f.ac.value;
          var email=f.Email.value;
          var phone=f.Cellphone.value;
          var addr=f.Street.value;
          var adhar=f.Adhar.value;
          var error_message=document.getElementById("passerror");
          var text;
           
 
            if(p==cp)
               {
                // alert("passwor and confirm same ");
                return true;
               }

            else
              {
                alert("password and confirm are mismatch");
                 return false;
              }  
            
            if(name.length<5)
             {

                text="name must be valid "
                 error_message.innerHTML=text;
                 return false;
           
             }

         }
      </script>
  
  <style type="text/css">

   body
      {

        background-color: skyblue;
      }

  .form
      {
        width: 1100px;
        height:1000px;
        text-align: center;
        background-color:white;
        opacity: 0.9;
        border-radius: 20px;
        margin-left: 150px;
        margin-top: 100px;


      }  
   
   .formc
      {

        margin-left:-50px;
        margin-top: 40px;
        font-size: 19px;
        font-weight: bold;

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
    }  

  .image
    {

      position: absolute;
      margin-top: -789px;
      margin-left:660px;
    }

   #passerror
    {
      padding:0px;
      position:absolute;
      margin-top: 40px;
      margin-left:500px;
      width: 450px;
      height: 30px;
      background-color: none;
      color:red;
    }
  input{box-shadow: 1px 1px 1px 1px grey;}
  </style>
 <body>
   <h1 style="font-size: 18px;"><a class="text-white" href="loginpage.php"><i class=" fa fa-university fa-2x">  Smart Pay</font></i></a></h1>
   

   <div id="passerror"></div>
   
   <div class="form">
    <b><h1>Registration  Form</h1></b>
     Please ensure you make your choices correctly, we will evaluate them and contact you soon.<br>
     An asterisk ( * ) indicates a mandatory field.


   <div class="formc">
   <form onsubmit=" return chkpass()"action="data.php" method="post" name="f" enctype="multipart/form-data">
     <label> *Account no:    </label>
     <input type="text" name="ac"  autocomplete="off" id="acct"> <br><br>
     <label>*Full name:      </label>
     <input type="text" name="name" autocomplete="off" id="name"><br><br> 
     <label> *E-mail:</label>
     <input type="email" name="Email" autocomplete="off" id="email"><br><br> 
     <label> Cellphone:</label>
     <input type="text" name="Cellphone" autocomplete="off" id="phone"> <br><br>
     <label> Address:</label>
     <input type="text" name="Street"autocomplete="off" id="addre"> <br><br>
           
      <label for="City">City:</label>
      <select  style="margin-left: -362px;" name="city">
       <option value="jalandhar">select</option>
       <option value="jalandhar">Jalandhar</option>
       <option value="chandigarh">Chandigarh</option>
       <option value="nawansher">Nawansher</option>
       <option value="jalandhar">Ropar</option>
       <option value="chandigarh">Amritsar</option>
       <option value="nawansher">Gurdaspur</option>
       </select><br><br>
      <label for="State">State:</label>
      <select  style="margin-left: -362px;" name="State">
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
     <input type="password" name="password" autocomplete="off"> <br><br>
     <label> *Confirm :</label>
     <input type="password" name="confirm" autocomplete="off"> <br><br>  
       <h3 style="color:green;opacity: 0.9;margin-top: 30px;"> TERMS AND CONDITIONS</h3>    
     
      <input style="margin-left: 250px; margin-top:30px;width: 20px;height: 20px;"type="checkbox" name="checkbox" >
      <h2 style="text-align: center;font-size: 20px; margin-top: 35px;">  I accept the terms and conditions for signing up to this service,<br> and hereby confirm I have read the privacy policy.</h2>

     <input style="margin-left:490px; margin-top:48px;font-size:30px; border-radius: 15px; border: 2px solid black;background-color: green;color: white;"type="submit" name="submit" >

     <div class="image">
      
      <div class="file-field">
      <div class="btn btn-success btn-sm float-left">
       <!-- <span class="btn btn-primary">Browse</span> -->
       <input type="file" name="upload">
       </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="upload your pic">

<!-- code for php -->

    </div>
  </div>

       
     </div>              
    </form>
   </div> 
  </div>
</body>
</html>
<script type="text/javascript">
 
</script>