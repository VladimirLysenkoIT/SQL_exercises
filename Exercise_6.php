<?php 
/*
	For each maker producing laptops with a hard drive capacity of 10 Gb or higher, find the speed of such laptops. Result set: maker, speed. 
*/

$request = "
	SELECT DISTINCT maker, speed
	FROM laptop l, Product p
	WHERE l.model = p.model
	AND l.hd >= 10
";

?>