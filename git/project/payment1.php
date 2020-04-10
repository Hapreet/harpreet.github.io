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
}

input[type=submit]:hover {
  background-image: linear-gradient(to right,orange ,red,yellow);
}

div {
  border-radius: 5px;
  background-color: #00FA9A;
  padding: 20px;
  width: 20%;
  margin-left: 500px;
}
	</style>
</head>
<body >
<h1> 	SELECT  YOUR OPERATOR</h1>

   <div>
  <form action="last.php">
  	 <label for="OPERATOR">DTH OPERATOR</label>
    <select>
      <option >VIDEOCON</option>
      <option >DISH TV</option>
      <option >TATA SKY</option>
      <option >AIRTEL</option>
      <option >MONGO</option>
      <option >HUAWEI</option>

    </select>
    <label for="fname">ACCOUNT NO</label>
    <input type="text" id="fname" name="firstname" placeholder="Your account no.." required>

    <label for="lname">PASSWORD</label>
    <input type="PASSWORD" id="" name="" placeholder="Your password .." required>

    <label for="lname">AMOUNT</label>
    <input type="text" id="" name="amount12" placeholder="Enter the amount  .." required>


    <input type="submit" value="Submit" name="dth">
  </form>
</div>


</body>
</html>