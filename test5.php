<?php
	if(isset($_REQUEST["confirm"])){
	$name = $_REQUEST["testInput"];
	echo ("Welcome to website, ".$name);
	
	}
	//"https://www.youtube.com"
?>

<html>
<head></head>
<body>

<form action = "test5.php"  method = "post">
<div>
<br>
Test Name place
<p><input type = "text" name = "testInput" placeholder = "Input your name"></p>
Test radio Button
<p><input type = "radio" name = "gender" value = "B"> Boys</input></p>
<p><input type = "radio" name = "gender" value = "G"> Girls</input></p>
Test checkbox
<p><input type = "checkbox" name = "hobby" value = "Reading">Reading</input></p>
<p><input type = "checkbox" name = "hobby" value = "Gaming">Gaming</input></p>
<p><input type = "checkbox" name = "hobby" value = "Coding">Coding</input></p>
 
Test ComboBox
<p><select name = "Prodi">
	<option>__Jurusan/Prodi__</option>
	<option value = "IF">Informatika</option>
	<option value = "TI">Tehnik Industri</option>
	<option value = "TS">Tehnik Sipil</option>
	<option value = "TK">Tehnik Kimia</option></select></p>

Test Comment / text area
<p><textarea name = "comment" rows = '4' cols = '50' placeholder = "comment at here"></textarea></p>
Test File
<p><file name = "file"/></p>
<br><br><input type = "submit" value = "Save" name = "confirm">
<div>
</form>
</body>
</html>