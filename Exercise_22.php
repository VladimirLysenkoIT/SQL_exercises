<?php 
/*
	For each value of PC speed that exceeds 600 MHz, find out the average price of PCs with identical speeds.
	Result set: speed, average price.    
*/

$request = "
	SELECT pc.speed, AVG(pc.price)
	FROM pc
	WHERE pc.speed > 600
	GROUP BY pc.speed
";

?>