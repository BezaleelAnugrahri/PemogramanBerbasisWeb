<html>
<head>
<title>.::Prime Number::.</title>
</head>
<body>
<form action = "praktikumPBWChapter4.php" method = "POST">
test number :
<input type="text" name="first"><br>
loop until :
<input type="text" name="second"><br>

<input type="submit" name="confirm" value="confirm"><br>

<?php
function prima($m,$n){
  
      for($i=$m;$i<=$n;$i++){  
              $counter = 0; 
              for($j=$m;$j<=$i;$j++){ 
                  if($i % $j==0){ 
                        
                          $counter++;
                    }
              }
            if($counter==2){
                 
                   print $i." is Prime <br/>";
            }
     }
} 

if(isset($_POST['confirm'])){	
		$first = $_POST['first'];//Post sent query string to the server I/O stream, data will be invisible in URL
		$second = $_POST['second'];//Get sending query string via URL, example : https://www.youtube.com/results?search_query=st+ar+15
		prima($first,$second);
	}	
?>

</form>
</body>
</html>

