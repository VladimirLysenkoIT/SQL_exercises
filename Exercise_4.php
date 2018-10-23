<?php 
/*
	Find all records from the Printer table containing data about color printers. 
*/

$request = "
	SELECT * FROM printer
	where color = 'y'
";

?>