<?php 
/*
	Get the laptop models that have a speed smaller than the speed of any PC.
	Result set: type, model, speed. 
*/

$request = "
	SELECT DISTINCT p.type,p.model,l.speed
	FROM laptop l
	JOIN product p on l.model=p.model
	WHERE l.speed<(SELECT min(speed) FROM pc) 
";

?>