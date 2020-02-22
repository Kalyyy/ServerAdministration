<?php 
include 'php/left_form.php';
include 'php/right_form.php';
include 'php/bottom_form.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'/>
	<title></title>
	<link rel='stylesheet' type='text/css' href='css/style.css'>
</head>
<body>
<section class='title'>Server administration with PHP</section>
<div class='searchers'>
	<section class='bdServer'>
	<p class='title'>Display data bases on server</p>
	<div class='alignContent'>
		<div class='content'>
		<form method='post'>
		<div class='create'>
			<input type='search' id='createDB' name='createDB' class='inputText' placeholder='Write a DB name'>
			<input onclick='clearNameDB();' onSubmit="<?php createDB();?>" type='submit' value='Create +' class='btnAction'>
			</div>
			</form>
			
		<form method='post'>
		<p>* Press on the DB name to delete</p>
		<?php showDB();?>
		</form>
		
		</div>
		</div>
		<hr>
	</section>
	<hr class='separe'>
	<section class='finder'>
	<p class='title'>Display tables from a DB</p>
		<div class='alignContent'>
		<div class='content'>
	<form method='post'>
		<div class='create'>
			<input type='search' id='useDB' name='useDB' class='inputText' placeholder='Write a DB name'>
			<input onclick='clearNameDB();' type='submit'value='Use +' class='btnAction'>
			</div>
			<?php showTablesFromDB();?>
			</form>
		</div>
		</div>
	</section>
	</div>
	<hr>
	
	
 <div class='searchers'>
	<section class='displayTables'>
	<p class='title'>Display data from a table</p>
		<div class='alignContent'>
		<div class='content'>
	<form method='post'>
		<div class='create'>
			<input type='search' id='dataOnTable' name='dataOnTable' class='inputText' placeholder='Write a table name to display the data'>
			<input type='submit' value='Display +' class='btnAction' onclick='' onSubmit=''>
			<hr>
			</div>
			<hr>
			<table class='tableUsers'>	
			<tr class="titleData">
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            </tr>
			<?php displayDataTable();?>
			</table>
			<hr>
			</form>
		</div>
		</div>
	</section>
	</div>
	<hr>	
	<script src='js/clearNameDB.js'></script>
</body>
</html>