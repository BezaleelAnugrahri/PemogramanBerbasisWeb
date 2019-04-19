<?php
	$input = "abcde";
	function Combine($input){
		$input = str_replace(" ","",$input);
		$input = strtoupper($input);
		$arrayInput = str_split($input);
		$arrayCombi = array();
		for($x = 0; $x<count($arrayInput);$x++){
			for($i = $x + 1;$i<=count($arrayInput)-1;$i++)
			{
				$arrayCombi[] = $arrayInput[$x].$arrayInput[$i];
			}
		}
		return $arrayCombi;
	}
	echo "Kalimat yang akan di Check adalah <br>".$input."<br><br>";
	$hasil = join(',',Combine($input));
	echo "Kombinasi 2 huruf dari kalimat tersebut adalah <br><b>".$hasil."</b>";
?>