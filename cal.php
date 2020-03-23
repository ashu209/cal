<html>
<head>
	<title>calculator</title>
	<style type="text/css">
		#class
		{
			width:100%;
			height: 100vh;
		}
		#ca
		{
			height:350px;
			width: 500px;
			border:2px solid black;
			border-radius: 20px;
			margin-left: 50%;
			transform: translate(-50%);
		}
		#ca FORM
		{
			margin :20px;
		}
	</style>
</head>
<body>
	<br><br><br><br><br>
	<div id="class">
	<div id="ca">
	<center>
	<form>
		<h2> SI + CI  Interest Calculator  </h2>
		<input type="text" name="num1" placeholder="Principal"><br><br>
		<input type="text" name="num2" placeholder="Rate"><br><br>
		<input type="text" name="num3" placeholder="Time"><br><br>
		<select name="operator">
			<option>None</option>
			<option>SI</option>
			<option>CI</option>
		</select><br><br>
		<button type="submit" name="submit" value="submit">Calculate</button>
	</form>
	</center>
	<p> <h3>The Answer is:</h3></p>
	<?php
	if (isset($_GET['submit'])) {
		$result1=$_GET['num1'];
		$result2=$_GET['num2'];
		$result3=$_GET['num3'];
		$operator=$_GET['operator'];

		switch ($operator) {
			case 'None':
				echo "You need to select a method !";
				break;
				case 'SI':
				echo $result1*$result2*$result3/100;
				break;
				case 'CI':
				echo round($result1 * pow(1 + ($result2/100),$result3), 2);
				break;
		}
	}
	?>
</div>
</div>	
</body>
</html> 