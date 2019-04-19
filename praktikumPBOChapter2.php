<?php
	//no.2
	$words = array("It's"=>"Ini","Just"=>"Hanya","AGame"=>"Permainan");
	foreach($words as $key => $var)
	{
		echo("Meaning of ".$key." Words is : ".$var."<br>");
	}
	echo("Your words is : <br>".$words["It's"].$words["Just"].$words["AGame"])
?>
<br>
<br>
<?php
	//no.1
	//For
	/*old coder
	$car1[1] = "Dodge Viper";
	$car1[2] = "Ford Mustang GT";
	$car1[3] = "Lamborghini Adventador";*/
	
	//$car1 = array('1'=>"Dodge Viper",'2'=>"Ford Mustang GT",'3'=>"Lamborghini Adventador"); //if you want to give the number manualy
	
	$car1 = array("Dodge Viper","Ford Mustang GT","Lamborghini Adventador");
	$r = count($car1);
	for ($i = 0; $i < $r; $i++){
		echo("Car number ".$i." is : ".$car1[$i]."<br>");
	}
?>
<br>
<br>	
<?php	
	//Do While
	$car2 = array("Dodge Viper","Ford Mustang GT","Lamborghini Adventador");
	$i=0;
	
	do{
		echo("Car number ".$i." is : ".$car2[$i]."<br>");
		$i++;
	}
	while ($i < 3);
?>
<br>
<br>
<?php
	$car4[] = "Dodge Viper";
	$car4[] = "Ford Mustang GT";
	$car4[] = "Lamborghini Adventador";
	for ($i = 0; $i < 3; $i++){
		echo("Car number ".$i." is : ".$car4[$i]."<br>");
	}
?>