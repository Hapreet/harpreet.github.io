<?php

 include("connect.php");
 $name=$_POST['name'];
   $query="SELECT * FROM dummy WHERE Name='$name'";
   $run=mysqli_query($conn,$query);
   $data=mysqli_num_rows($run);
   if($data!=0)
    {
        ?>
        <table border="2" style="text-align: center;">
        	
        	<tr>
        		<th>NAME</th>
        		<th>PASSWORD</th>
        	</tr>
        

        <?php
        
        while ($result=mysqli_fetch_assoc($run)) 
         {
        	
        	echo "<tr>
        		<td>".$result['Name']."</td>
        		<td>".$result['password']."</td>
        	</tr>";
        	
         }
    	// e6cho "Tabel has records";

    }

   else
   {
    	echo"NO records found";
    } 

 

	// echo $result['Name']."    ".$result['password']."<br>";


?>
</table>
