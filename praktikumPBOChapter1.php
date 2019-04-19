<?php
		$text1 = "Meja1";
		$text2 = "Kursi2";
	//variabel hasil penggabungan menggunakan variabel
	$text3 = $text1.$text2;
	
	//variabel hasil tambah menggunakan variable string
	$text4=$text1+$text2;
	
	//tampilan
	echo $text3."<br>";
	echo $text4;
	//jika string menggunakan (.) dan arithmatika (+)
	
	echo "<br><br>".$text3." ".$text4;
	echo "<br><br>$text3 $text4 <br><br><br><br>";
?>


<?php

//no. 1 
		$a = 'a';
		
		switch ($a){
			case 'a' : echo " $a ini alphabeth vocal";
						break;
			case 'i' : echo "$a ini alphabeth vocal";
						break;
			case 'u' : echo "$a ini alphabeth vocal";
						break;
			case 'e' : echo "$a ini alphabeth vocal";
						break;
			case 'o' : echo "$a ini alphabeth vocal";
						break;
			default : 
					echo "$a bukan alphabeth vocal";
					break;
		}
	echo "<br><br>";
	
	
//no. 2
	$b = 1;
	
	if ($b == 0)
	{
		echo "$b bilangan nol";
	}
	else if($b < 0)
	{
		echo "$b bilangan negatif";
	}
	else {
		echo "$b bilangan positif";
	}

	

echo "<br><br>";

//no.3
		$c = "4";
		
		switch ($c){
			case 1 : {echo "Today is Sunday";
						break;}
			case 2 : {echo "Today is Monday";
						break;}
			case 3 : {echo "Today is Tuesday";
						break;}
			case 4 : {echo "Today is Wednesday";
						break;}
			case 5 : {echo "Today is Thursday";
						break;}
			case 6 : {echo "Today is Friday";
						break;}
			case 7 : {echo "Today is Saturday";
						break;}						
			default : 
					{echo "$c was out of range";
						break;}

		}

?>