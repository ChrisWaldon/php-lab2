<?php
include('access.php');
mysql_select_db('waldonck', $db);

$sql = "INSERT INTO Persons(FirstName, LastName, Age) VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['age']}')";

if (!mysql_query($sql, $db)) {
	die('Error: ' . mysql.error());
}
echo "1 record added";

mysql_close($db);
