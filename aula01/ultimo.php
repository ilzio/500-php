<?php 

for ($i=0 ; $i < 100 ; $i++) {

	if ($i === 5) {
	 	continue;
	 } 
	echo $i;
}

echo "<hr> <br>";

 

for ($i=0 ; $i < 100 ; $i++) {

	if ($i === 30) {
	 	break;
	 }
 	echo $i;
}

echo "<hr> <br>";