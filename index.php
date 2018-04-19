<?php
	require_once('database.php');
	require_once('UsersBD.php');
	require_once('user.php');
	$users = UsersDB::getUsers();
?>
<html>
	<head>
		<title>Objects and Classes Assignment</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<table class="user-table">
			<tr>
				<th>ID</th>
				<th>email</th>
				<th>fname</th>
				<th>lname</th>
				<th>phone</th>
				<th>birthdate</th>
				<th>gender</th>
				<th>password</th>
			</tr>	
			<?php foreach ($users as $user) : ?>
				<?php echo $user->displayUserRow(); ?>
			<?php endforeach; ?>		
		</table>
	</body>		
</html>
