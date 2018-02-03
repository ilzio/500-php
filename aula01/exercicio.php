<?php 

$i=0;


while ($i < 100) {


	
	if (($i % 2) === 0) {
		echo "$i par";
		echo "<br>";  
	}

	if ($i % 2 !== 0) {
		 
		echo "$i impar";
		echo "<br>";  
	}
	if ($i % 5 === 0) {
		echo "$i multiplos de 5 ";
		echo "<br>";  
		
	 } 
	



	$i++;

}



