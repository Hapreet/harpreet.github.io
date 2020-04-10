<h1 align="center">
<?php

  session_start();
  if(isset($_SESSION["sname"]))
  
   {  
     echo"WELCOME".$_SESSION["sname"];
   
   }
   else
   {

   	echo "you are not login";
   }

?>
</h1>
<a href="logout.php">LOGOUT</a>