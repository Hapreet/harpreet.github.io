

<!DOCTYPE html>
<html>
<head>
	<title>last preloader </title>
<style type="text/css">
	
	#loading
	       {

               width: 100%;
               height: 100vh;
               background:#fff url("imgs/banka.gif") no-repeat center;


	       }
</style>

</head>
<body onload="myfunction()">
	 <?php header( "refresh:5;url=last2.php" );?>
	<div id="loading">
		

	</div>
<h1 style="text-align: center;">PLEASE DONOT  REFRESH THE PAGE AS YOUR TRANSACTION IS UNDER PROCESS</h1>
<script type="text/javascript">
	var    preloader=document.getElementById('loading');
	 function myfunction()
	 {

	 	preloader.style.display='none';
	 }

    
</script>
</body>
</html>