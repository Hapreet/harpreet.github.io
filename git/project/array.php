<?php
 
  $arex=array();
     $arex[1][1]=120;
     $arex[1][2]=121;
     $arex[1][3]=122;
     $arex[2][1]=123;
     $arex[2][2]=124;
     $arex[2][3]=125;
     $arex[3][1]=126;
     $arex[3][2]=127;
     $arex[3][3]=128;
     
     for ($i=1; $i <4 ; $i++) { 
     	
     	for ($j=1; $j< 4; $j++) { 
     		?> <prev><?php
     		print_r( $arex[$i][$j]." ");
     	}
     	echo"<br>";
     }
     /*$arex[1]=121;
     $arex[2]=122;
     $arex[3]=123;
     $arex[4]=124;
     $arex[5]=125;
     $arex[6]=126;
  for ($i=0; $i<=6; $i++) { 
  	
      echo $arex[$i];
      echo"<br>";  

  }*/
   
?>