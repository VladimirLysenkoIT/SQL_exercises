<?php 
/*
	Get the makers who produce only one product type and more than one model. Output: maker, type.
*/

$request = "
	SELECT maker, MAX(type)
	FROM product
	GROUP BY maker
	HAVING COUNT(DISTINCT type) = 1 AND COUNT(model) > 1
";

?>