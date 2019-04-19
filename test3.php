<html>
<head>
<title>.::<Test3>::.</title>
</head>
<body>
<form action = "test3.php" method = "post">
test number :
<input type="text" name="first"><br>
<input type="submit" name="confirm" value="confirm"><br>

<?php
if(isset($_POST['confirm']))
	{
		$first = $_POST['first'];
		$second = $_POST['first'];
		echo ++$first . " for preincreament"; //pre increment
		echo "<br>";
		echo $second++ . " for postincreament"; //post increment
	}		
?>

</form>
</body>
</html>