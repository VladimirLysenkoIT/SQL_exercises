<?php 
/*
	Find the makers of PCs with a processor speed of 450 MHz or more. Result set: maker.
*/

$request = "
	SELECT DISTINCT product.maker
	FROM pc
	INNER JOIN product ON pc.model = product.model
	WHERE pc.speed >= 450
";

?>