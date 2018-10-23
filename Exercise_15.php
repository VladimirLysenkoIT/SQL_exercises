<?php 
/*
	Get hard drive capacities that are identical for two or more PCs. Result set: hd. 
*/

$request = "
	SELECT hd FROM pc GROUP BY (hd) HAVING COUNT(model) >= 2
";

?>