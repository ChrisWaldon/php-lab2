<?php
	include('access.php');	
	$result = @mysql_query('insert into employee(fname, minit, lname, ssn, bdate, address, sex, salary, superssn, dno) values ("'
			.$_POST['fname'].'", "'
			.$_POST['minit'].'", "'
			.$_POST['lname'].'", "'
			.$_POST['ssn'].'", "'
			.$_POST['bdate'].'", "'
			.$_POST['address'].'", "'
			.$_POST['sex'].'", '
			.$_POST['salary'].', "'
			.$_POST['superssn'].'", '
			.$_POST['dno'].');'
			);
	if (!$result) {
		echo '<p>There was a problem inserting. Please try again.</p>';
	} else {
        echo '<p>Inserted Successfully</p>';
	}
?>
<html>
  <body>
    <form action='InsertEmployee.php' method='post'>
   	  <label for="fname">First Name:</label>
      <input type='text' name='fname' />
      <br>
   	  <label for="fname">Middle Initial:</label>
      <input type='text' name='minit' />
      <br>
   	  <label for="fname">Last Name:</label>
      <input type='text' name='lname' />
      <br>
   	  <label for="fname">Social Security Number:</label>
      <input type='text' name='ssn' />
      <br>
   	  <label for="fname">Birth Date:</label>
      <input type='text' name='bdate' />
      <br>
   	  <label for="fname">Address:</label>
      <input type='text' name='address' />
      <br>
   	  <label for="fname">Sex:</label>
      <input type='text' name='sex' />
      <br>
   	  <label for="fname">Salary:</label>
      <input type='text' name='salary' />
      <br>
   	  <label for="fname">Supervisor Ssn:</label>
      <input type='text' name='superssn' />
      <br>
   	  <label for="fname">Department Number:</label>
      <input type='text' name='dno' />
      <br>
      <input type='submit' />
    </form>
  </body>
</html>
