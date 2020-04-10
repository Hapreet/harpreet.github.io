<?php

  session_start();
  include("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>dummy </title>
</head>
<body>

  <form action="#" method="post">
  	
    Name:
  	<input type="text" name="name">
    Password
    <input type="password" name="pass">
     <input type="submit" name="submit">


  </form>

</body>
</html>
<?php
  
  if(isset($_POST['submit']))
  {

     $user=$_POST['name'];
     $pass=$_POST['pass'];
     $query="SELECT * FROM dummy WHERE Name='$user' && password='$pass'";
     $data=mysqli_query($conn,$query);
     $row=mysqli_num_rows($data);
     
     if($row==1)
      {

        echo $row;

        echo "<script>window.location.href='main.php';</script>";
        exit;
         // header("main.php");
         //exit();

      }
    
    else
      {

echo("unsucessful");

      }
}  
?>