<?php
	include('access.php');	
	$sql = 'insert into works_on(essn, pnum, hours) values ("'
			.$_POST['essn'].'", '
			.$_POST['pnum'].', '
			.$_POST['hours'].');';
	echo $sql;
	$result = @mysql_query($sql);
	if (!$result) {
		echo '<p>There was a problem inserting. Please try again.</p>';
	} else {
        echo '<p>Inserted Successfully</p>';
	}
?>
<html>
  <body>
    <form action='InsertWorks_on.php' method='post'>
   	  <label for="fname">Employee Social Security Number:</label>
      <input type='text' name='essn' />
      <br>
   	  <label for="fname">Project Number:</label>
      <input type='text' name='pnum' />
      <br>
   	  <label for="fname">Hours:</label>
      <input type='text' name='hours' />
      <br>
      <input type='submit' />
    </form>
  </body>
</html>
