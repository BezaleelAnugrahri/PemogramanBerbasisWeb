<?php

	function add1($a,$b)
	{
		$c = $a	+ $b;
		return $c;
	}
	
	function min1($a,$b)
	{
		$c = $a	- $b;
		return $c;
	}
	function times1($a,$b)
	{
		$c = $a	* $b;
		return $c;
	}
	function div1($a,$b)
	{
		$c = $a	/ $b;
		return $c;
	}
	function pangkat1($a,$b)
	{
		$c = $a	** $b;
		return $c;
	}

?>
<?php
			
	if(isset($_POST['confirm']))
	{
		$first = $_POST['first'];
		$second = $_POST['second'];
		$op = $_POST['oprt'];
		
		if ($op = '+')
			{
				 echo add1($first,$second);
			}
		else if ($op = '-')
		{
			echo min1($first,$second);
		}		
		else if ($op = '*')
		{
			echo times1($first,$second);
		}	
		else if ($op = '/')
		{
			echo div1($first,$second);
		}	
		else if ($op = '^')
		{
			echo pangkat1($first,$second);
		}			
	}
	?>

<html>
<head>
<title>.::Praktek PBW::.</title>
</head>

<form action = "praktikumPBWChapter3.php" method = "post">
	first number = <br>
	<input type="text" name="first"><br>
	second number = <br>
	<input type="text" name="second"><br>
	
	math operator = <br>
	<select name="oprt">
		<option value = "+"> + </option>
		<option value = "-"> - </option>
		<option value = "/"> / </option>
		<option value = "*"> * </option>
		<option value = "^"> ^ </option>
		</select><br>
	<input type="submit" name="confirm" value="confirm"><br>
	
	<br>

</form>


</html>