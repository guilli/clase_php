<style type="text/css">
	table, th, td {
		border: 1px solid black;
	}
</style>

<?php

include("globals.php"); // Includes configuration

$foo =  new vista();

echo $foo->get_content();