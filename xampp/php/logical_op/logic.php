<!DOCTYPE php>
<html>
<head>
<title> Logic </title>
</head>
<body>
<?php
	// Logical Operators //
	// Else If Statement //
	// Switch Statments //
	

	// Logical Operators and Else If
	echo "<h2>Logical Operators</h2>";
	$x_logic = 20;
	$y_logic = 21;
	
	echo "x = " , $x_logic; echo"<br>";
	echo "y = ", $y_logic; echo "<br>";
	
	
	if($x_logic!=$y_logic){
	echo "x is not equal to y";
	}else{
		echo "x is equal to y";
		}
	echo "<hr>";
	
	// Switch Statements
	echo "<h2>Switch Statements</h2>";
	
	$x_switch = 4;
	
	switch($x_switch){
		case 1:
			echo "The answer is 1";
		break;
		case 2:
			echo "The answer is 2";
		break;
		default:
			echo "NAN";
		}
	
?>

</body>
</html>