<?php 
/*
	List the models of any type having the highest price of all products present in the database.
*/

$request = "
	SELECT model
	FROM (
		SELECT model, price
		FROM pc
			UNION
		SELECT model, price
		FROM Laptop
			UNION
		SELECT model, price
		FROM Printer
	) t1
	WHERE price = (
		SELECT MAX(price)
		FROM (
			SELECT price
			FROM pc
				UNION
			SELECT price
			FROM Laptop
				UNION
			SELECT price
			FROM Printer
		) t2
	)
";

?>