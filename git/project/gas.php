<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
   
   input[type=PASSWORD], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 100px;
  transition:2s;
  transition: scale(1.05);
  transition: width 2s;
}

input[type=submit]:hover {
  background-image: linear-gradient(to right,green,white,yellow);
  color: black;
}

div {
  border-radius: 5px;
  color: white;
  background-color: orange;
  padding: 20px;
  width: 20%;
  margin-left: 500px;
}
	</style>
</head>
<body >
<h1> 	SELECT  YOUR DISTRIBUTOR</h1>

   <div>
  <form action="last.php" target="last.php"method="POST">
  	 <label for="OPERATOR">DISTRIBUTOR</label>
    <select>
      <option >INDANE GAS</option>
      <option >BHARAT PETROLIUM</option>
      
    </select>

    <label for="fname">CONSUMER NO</label>
    <input type="text" id="fname" name="firstname" placeholder="eg.RG13615.." required>

   

    <label for="lname">AMOUNT</label>
    <input type="text" id="" name="amount14" placeholder="Enter the amount  .." required>


    <input type="submit" value="Submit" name="gas">
  </form>
</div>


</body>
</html>