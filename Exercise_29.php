<?php 
/*
	Find the model number, speed and hard drive capacity of PCs cheaper than $600 having a 12x or a 24x CD drive.
*/

$request = "
	SELECT model,speed,hd
	FROM pc
	WHERE ((cd= '12x' or cd = '24x') and (price < 600))
";

?>