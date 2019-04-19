<html>
<head></head>
<body>
<form action = "polindrom.php" method = "post">
<p>Masukan Kalimat di sini :
<textarea name = "words" placeholder = "tulis kaliamat di sini" value = "<?php echo (isset($set)) ? $set : ""; ?>" /></textarea></p>
<input type="submit" name="confirm" value="confirm" /><br>
</form>
</body>
</html>

<?php 

if(isset($_REQUEST ["confirm"])){
	
function checkPalindrome( $string )   
{
    $string = str_replace( ' ', '', $string );
    return $string == strrev( $string );
}  

$string = $_REQUEST['words'];

if( checkPalindrome( $string ) == true )
{ 	echo $string;
    echo 'String is a palindrome';
}
else
{	echo "Inputan : ".$string."<br>";
    echo 'string is not a palindrome';
}
}
?>