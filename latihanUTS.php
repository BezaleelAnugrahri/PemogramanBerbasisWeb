<?php
 function test($a,$b)
	{
		$c = $a/$b;
		return $c;
	}
	
 function test1($a,$b)
	{
		$c = $a*$b;
		return $c;
	}
	
	if(isset($_REQUEST ["confirm"])){
		$num1 = $_REQUEST["first"];
		$from = $_REQUEST["from"];
		$convert = $_REQUEST["convertion"];
		

		
		if($from == $convert){
			$num2 = $num1;
		}elseif($from == "cm"){
				if($convert == "feet"){
					$num2 = test($num1,30.48);
				}elseif($convert == "inch"){
					$num2 = test($num1,2.54);
				}
		}elseif($from == "feet"){
				if($convert == "cm"){
					$num2 = test1($num1,30.48);
				}elseif($convert == "inch"){
					$num2 = test1($num1,12);
				}
		
		}elseif($from == "inch"){
				if($convert == "cm"){
					$num2 = test1($num1,2.54);
				}elseif($convert == "feet"){
					$num2 = test($num1,0.0833333);
				}
		}
	}
?>


<html>
<head></head>
<body>
<form action = "latihanUTS.php" method = "post">
<p><input type = "text" name = "first" value = "<?php echo (isset($num1)) ? $num1 : ""; ?>" />
<select name="from">
<option value = "inch">Inch</option>
<option value = "cm">Centimeter</option>
<option value = "feet">Feet</option></select></p>

<p><input type = "text" value= "<?php echo (isset($num2)) ? $num2 : ""; ?>" disabled />
<select name="convertion">
<option value = "inch">Inch</option>
<option value = "cm">Centimeter</option>
<option value = "feet">Feet</option></select></p>

<br><input type="submit" name="confirm" value="confirm" /><br>
</form>
</body>
</html>