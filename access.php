<?php
$db = msql_connect('localhost', 'waldonck', '900494932');
if (!$db) {
	die('could not connect: '. mysql_error());
}
