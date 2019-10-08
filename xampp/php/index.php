<!DOCTYPE html>
<html>
<head>
	<title>PHP TEST</title>
</head>
<body>
	<form method = "GET">
		<input type = "text "name = "person">	
		<button>SUBMIT</button>
	</form>

<a href="php_6.php"> PHP 6 </a>
<br>
<?php 
	$name = $_GET['person'];
	echo $name. " is a handsome fellow";



	
?>
</body>
</html>
