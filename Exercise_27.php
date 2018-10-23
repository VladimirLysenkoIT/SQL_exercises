<?php 
/*
	Find out the average hard disk drive capacity of PCs produced by makers who also manufacture printers.
	Result set: maker, average HDD capacity.
*/

$request = "
	SELECT product.maker, AVG(pc.hd)
	FROM pc INNER JOIN product ON (product.model = pc.model)
	WHERE product.maker IN (
		SELECT DISTINCT maker
		FROM product
		WHERE product.type = 'printer'
	)
	GROUP BY maker
";

?>