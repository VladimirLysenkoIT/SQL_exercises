<?php 
/*
	Find out the average speed of the PCs produced by maker A.
*/

$request = "
	SELECT AVG(pc.speed)
	FROM pc, product
	WHERE pc.model = product.model AND product.maker = 'A'
";

?>