<html>
<head></head>
<body>
<form action = "utsno(3).php" method = "post">
<p>Masukan Kalimat di sini :
<textarea name = "words" placeholder = "tulis kaliamat di sini" value = "<?php echo (isset($set)) ? $set : ""; ?>" /></textarea></p>
<input type="submit" name="confirm" value="confirm" /><br>
</form>
</body>
</html>

<?php
if(isset($_REQUEST ["confirm"])){
	function checkHuruf($input){
		$input = str_replace(' ','',$input);
		$input = strtolower($input);
		$arrayInput = str_split($input);
		$vocal_array = array("a","i","u","e","o");
		$hitungHuruf = array(0,0);
		foreach($arrayInput as $row){
			if(in_array($row, $vocal_array)){
				$hitungHuruf[0] +=1;
			}else{
				$hitungHuruf[1] +=1;
			}
		}
		return $hitungHuruf;
	}
	$set = $_REQUEST['words'];
	echo "<p>kalimat yang akan di checking : <b>".$set."</b><br><br>";
	$hasil = checkHuruf($set);
	echo "jumlah huruf vocal : ".$hasil[0]."<br><br>";
	echo "jumlah huruf konsonan : ".$hasil[1]."</p>";
	}
?>