<?php 
/*
	Find the makers producing at least three distinct models of PCs.
	Result set: maker, number of PC models. 
*/

$request = "
	SELECT maker, COUNT(model)
	FROM product
	WHERE type = 'pc'
	GROUP BY product.maker
	HAVING COUNT (DISTINCT model) >= 3
";

?>