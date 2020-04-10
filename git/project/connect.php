<?php
    
    
    // error_reporting(0);
    $servername="localhost";
     $username="root";
     $password="";
     $db="pay1";
   
   $conn=mysqli_connect($servername,$username,$password,$db);
      if($conn)
       { 

             // echo "<h1>yess okay</h1>";
       }

       else
       {
         echo "connection failed";

       }



?>