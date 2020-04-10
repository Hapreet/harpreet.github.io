<?php
// error_reporting(0);
    $servername="localhost";
     $username="root";
     $password="";
     $db="pay1";

if(isset($_POST['sub']))
{
   
   $pass=$_POST['pass'];
   $conn=mysqli_connect($servername,$username,$password,$db);
   $query="SELECT * from dummy where Account no='1205'";
   $run=mysqli_query($conn,$query);
   $result=mysqli_fetch_array($run);
   
   echo $result["balance"];
   // echo $result['balance'];
 }  
 ?>  
 <!DOCTYPE html>
 <html>
 <head>
 	<title>password</title>
 </head>
 <body>
 <form method="POST"> 
 	password
 	<input type="text" name="pass" required>
    <input type="submit" name="sub">
 </form>
 </body>
 </html>