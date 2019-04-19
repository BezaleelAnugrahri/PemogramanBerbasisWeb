<?php
$data=array("TPS1"=>array("Ahok"=>220,"Anies"=>312),
			"TPS2"=>array("Ahok"=>150,"Anies"=>250),
			"TPS3"=>array("Ahok"=>100,"Anies"=>135),
			"TPS4"=>array("Ahok"=>200,"Anies"=>225),
			"TPS5"=>array("Ahok"=>75,"Anies"=>125)
		    );
$hasil1=0;
$hasil2=0;
foreach($data as $k=>$v){
	echo "<br>".$k." " ;
	foreach ($v as $k1=>$v1)
	{
		echo "<br>".$k1."=".$v1." ";
		if($k1=="Ahok"){
		$hasil1+=$v1;
		$nama1="Ahok";
	}elseif ($k1=="Anies") {
		$hasil2+=$v1;
		$nama2="Anis";

	}
}
}
$total=($hasil1+$hasil2);
echo "<br>hasil suara $nama1 =".(($hasil1/$total)*100)."%";
echo "<br>hasil suara $nama2 =".(($hasil2/$total)*100)."%";
?>