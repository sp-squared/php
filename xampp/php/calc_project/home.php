<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title> Calculater </title>
</head>
<body>
	<form>
		<input type ="text" name="num1" placeholder="Number 1">	
		<input type ="text" name="num2" placeholder="Number 2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
		<br>
		<button name="submit" value="submit" type="submit">Calculate</button>
	</form>

	<p>The answer is : </p>
	
<?php
	// isset checks whether or not the submit button has been pressed
	if (isset($_GET['submit'])) {
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$operator = $_GET['operator'];
	switch($operator){
		case "None":
			echo "Error: Need to select TWO numbers and an operator";
		break;
		case "Add":
			echo $num1 + $num2;
		break;
		case "Multiply":
			echo $num1 * $num2;
		break;
		case "Divide":
			echo  $num1 / $num2;
		break;
		default:
			echo "Error: Need to select TWO numbers and an operator";
		
	
		}
	}


?>

</body>
</html>

