<?php 
/*
	Find the makers producing PCs but not laptops.
*/

$request = "
	SELECT DISTINCT maker
	FROM product
	WHERE type = 'pc'
	EXCEPT
	SELECT DISTINCT product.maker
	FROM product
	Where type = 'laptop'
";

?>