<?php
	include('access.php');	
	mysql_query('insert into employee values ("'
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
?>
<html>
  <body>
    <form action='InsertEmployee.php' method='post'>
      <input type='text' name='fname' />
      <input type='text' name='minit' />
      <input type='text' name='lname' />
      <input type='text' name='ssn' />
      <input type='text' name='bdate' />
      <input type='text' name='address' />
      <input type='text' name='sex' />
      <input type='text' name='salary' />
      <input type='text' name='superssn' />
      <input type='text' name='dno' />
    </form>
  </body>
</html>
