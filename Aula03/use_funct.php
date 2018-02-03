<?php 

$msg = " si na casemma";

$func = function($a) use ($msg) {
	
	echo $msg.$a;
}



echo $func();