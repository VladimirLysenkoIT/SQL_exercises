<?php 
/*
	Get the models and prices for all commercially available products (of any type) produced by maker B.
*/

$request = "
	SELECT DISTINCT product.model, pc.price
	FROM Product JOIN pc ON product.model = pc.model WHERE maker = 'B'
	UNION
		SELECT DISTINCT product.model, laptop.price
		FROM product JOIN laptop ON product.model=laptop.model WHERE maker = 'B'
	UNION
		SELECT DISTINCT product.model, printer.price
		FROM product JOIN printer ON product.model=printer.model WHERE maker = 'B';
";

?>