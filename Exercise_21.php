<?php 
/*
	Find out the maximum PC price for each maker having models in the PC table.
	Result set: maker, maximum price.  
*/

$request = "
	SELECT product.maker, MAX(pc.price)
	FROM product, pc
	WHERE product.model = pc.model
	GROUP BY product.maker
";

?>