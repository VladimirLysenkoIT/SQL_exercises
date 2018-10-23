<?php 
/*
	Find the printer models having the highest price. Result set: model, price. 
*/

$request = "
	SELECT model, price
	FROM printer
	WHERE price = (SELECT MAX(price) FROM printer) 
";

?>