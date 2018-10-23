<?php 
/*
	Find out the average speed of the laptops priced over $1000. 
*/

$request = "
	SELECT AVG(speed)
	FROM laptop
	WHERE price > 1000
";

?>