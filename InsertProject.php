<?php
	include('access.php');	
	$result = @mysql_query('insert into project(pname, pnumber, plocation, dnum) values ("'
			.$_POST['pname'].'", '
			.$_POST['pnumber'].', "'
			.$_POST['plocation'].'", "'
			.$_POST['dnum'].');'
			);
	if (!$result) {
		echo '<p>There was a problem inserting. Please try again.</p>';
	} else {
        echo '<p>Inserted Successfully</p>';
	}
?>
<html>
  <body>
    <form action='InsertProject.php' method='post'>
   	  <label for="fname">Project Name:</label>
      <input type='text' name='pname' />
      <br>
   	  <label for="fname">Project Number:</label>
      <input type='text' name='pnumber' />
      <br>
   	  <label for="fname">Project Location:</label>
      <input type='text' name='plocation' />
      <br>
   	  <label for="fname">Project Department Number:</label>
      <input type='text' name='dnum' />
      <br>
      <input type='submit' />
    </form>
  </body>
</html>
