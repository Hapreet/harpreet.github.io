<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	name
<input type="name" id="name">
<button  onclick="myfunction()"> submit</button>

</body>
<script type="text/javascript">
	

	function myfunction() 
	{
	 
	var s=document.getElementById("name").value;
	 document.write(Number.isInteger(var s));

	
    }
</script>
</html>