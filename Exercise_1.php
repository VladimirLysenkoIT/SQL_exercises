<?php 
/*
	Find the model number, speed and hard drive capacity for all the PCs with prices below $500.
	Result set: model, speed, hd.
*/

$request = "
	SELECT model, speed, hd
	FROM PC
	where price < 500
";

?>