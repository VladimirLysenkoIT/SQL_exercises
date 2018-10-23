<?php 
/*
	Get the makers producing both PCs having a speed of 750 MHz or higher and laptops with a speed of 750 MHz or higher.
	Result set: maker 
*/

$request = "
	SELECT DISTINCT maker
	FROM product t1 JOIN pc t2 ON t1.model=t2.model
	WHERE speed>=750 AND maker IN 
		(   SELECT maker 
			FROM product t1
			JOIN laptop t2 ON t1.model=t2.model
			WHERE speed>=750 
		)
";

?>