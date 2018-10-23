<?php 
/*
	Find the model number, RAM and screen size of the laptops with prices over $1000. 
*/

$request = "
	SELECT model, ram, screen
	from Laptop
	where price > 1000
";

?>