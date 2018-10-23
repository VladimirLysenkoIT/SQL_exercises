<?php 
/*
	For each maker having models in the Laptop table, find out the average screen size of the laptops he produces.
	Result set: maker, average screen size. 
*/

$request = "
	SELECT product.maker, AVG(screen)
	FROM laptop
	LEFT JOIN product ON product.model = laptop.model
	GROUP BY product.maker
";

?>