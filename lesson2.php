<!DOCTYPE html>
<html>
<head>
	<title>Lesson 2</title>
</head>
<body>
	<?php 
	$arrayNumbers = array(2,1,3,2,2,4,5,3,2,3,98,3);
	$arrayDupNumbers = array();
	$num = 0;
	$arrlegnth = count($arrayNumbers);
	for ($i=0; $i < $arrlegnth; $i++) {
		$DupNum = $arrayNumbers[$i];
		$found = false;
		for ($n=$i+1; $n < $arrlegnth ; $n++) { 
			if ($DupNum == $arrayNumbers[$n]) {
				$found = true;
			 }
		}
		if ($found == true) {
			if ($num == 0){
				$arrayDupNumbers[$num++] = $DupNum;
			}
			echo $DupNum." = ".$num;
			for($x = 0; $x < $num; $x++) {
				echo $x."<br>";
			 	if ($DupNum == $arrayDupNumbers[$x]){
			 		 $arrayDupNumbers[$k++]= $DupNum;
			 	}
			}
		}
	}

	for($x = 0; $x < $k; $x++) {
	    echo "This: ".$arrayDupNumbers[$x];
	    echo "<br>";
	  }
 	?>
</body>
</html>