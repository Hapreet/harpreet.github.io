<?php
  
 
    include('connect.php');
    
            $ac=$_POST['ACCOUNT'];   
            $nm=$_POST['NAME'];
            $bl=$_POST['BALANCE'];

            $query="INSERT INTO `bank`(`Account no`, `Name`, `Balance`) VALUES ('$ac','$nm', '$bl')";
            $run=mysqli_query($conn,$query);
             if ($run == TRUE) 
              {
                 echo "inserted";

              }
              
             else
              {

                echo "failed";

              }




?>