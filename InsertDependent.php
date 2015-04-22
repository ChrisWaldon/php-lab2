<?php
	include('access.php');	
	$result = @mysql_query('insert into dependent(essn, dependent_name, sex, bdate, relationship) values ("'
			.$_POST['essn'].'", "'
			.$_POST['dependent_name'].'", "'
			.$_POST['sex'].'", "'
			.$_POST['bdate'].'", "'
			.$_POST['relationship'].'");'
			);
	if (!$result) {
		echo '<p>There was a problem inserting. Please try again.</p>';
	} else {
        echo '<p>Inserted Successfully</p>';
	}
?>
<html>
  <body>
    <form action='InsertDependent.php' method='post'>
   	  <label for="fname">Employee Social Security Number:</label>
      <input type='text' name='essn' />
      <br>
   	  <label for="fname">Dependent Name:</label>
      <input type='text' name='dependent_name' />
      <br>
   	  <label for="fname">Sex:</label>
      <input type='text' name='sex' />
      <br>
   	  <label for="fname">Birth Date:</label>
      <input type='text' name='bdate' />
      <br>
   	  <label for="fname">Relationship:</label>
      <input type='text' name='relationship' />
      <br>
      <input type='submit' />
    </form>
  </body>
</html>
