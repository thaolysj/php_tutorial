<!DOCTYPE html>
<html>
<head>
	<title>	The Program</title>
</head>
<body>
<?php
	$numbers = array(11,4,45,0,6,22,1,7,44,-1,-4,9,8);
	$arrlength = count($numbers);
	$xmin = $numbers[0];
	$y =$number[0];
	$indx = 0;
	for ($n = 0;$n < $arrlength; $n++){
		$xmin = $numbers[$n];
		$found = false;
		$z = $n+1;  
		for ($k=$z;$k < $arrlength;$k++){
			if ($numbers[$k] < $xmin){
				$xmin = $numbers[$k];
				$indx = $k;
				$found = true;
			}

		}
		if ($found == true){
			$y = $numbers[$n];
            $numbers[$indx]=$y;
			$numbers[$n] = $xmin;
		}

	}
	  for($x = 0; $x < $arrlength; $x++) {
	    echo $numbers[$x];
	    echo "<br>";
	  }
	  
?>
</body>
</html>