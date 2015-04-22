<?php
	include('access.php');	
	$result = @mysql_query('insert into department(dname, dnumber, mgrssn, mgrstartdate) values ("'
			.$_POST['dname'].'", '
			.$_POST['dnumber'].', "'
			.$_POST['mgrssn'].'", "'
			.$_POST['mgrstartdate'].'");'
			);
	if (!$result) {
		echo '<p>There was a problem inserting. Please try again.</p>';
	} else {
        echo '<p>Inserted Successfully</p>';
	}
?>
<html>
  <body>
    <form action='InsertDepartment.php' method='post'>
   	  <label for="fname">Department Name:</label>
      <input type='text' name='dname' />
      <br>
   	  <label for="fname">Department Number:</label>
      <input type='text' name='dnumber' />
      <br>
   	  <label for="fname">Manager Social Security Number:</label>
      <input type='text' name='mgrssn' />
      <br>
   	  <label for="fname">Manager Start Date:</label>
      <input type='text' name='mgrstartdate' />
      <br>
      <input type='submit' />
    </form>
  </body>
</html>
