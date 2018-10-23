<?php 
/*
	Find out the average price of PCs and laptops produced by maker A.
	Result set: one overall average price for all items. 
*/

$request = "
	SELECT sum(s.price)/sum(s.quantity) as average
	FROM (
		SELECT price,1 as quantity
		FROM pc,product
	 	WHERE pc.model = product.model AND product.maker = 'A'
	UNION all
		SELECT price,1 as quantity
		FROM laptop,product
		WHERE laptop.model = product.model AND product.maker = 'A'
	) as s
";

?>