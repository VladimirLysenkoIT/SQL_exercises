<?php 
/*
	List all printer makers. Result set: maker. 
*/

$request = "
	SELECT DISTINCT maker
	FROM product
	where type = 'Printer'
";

?>