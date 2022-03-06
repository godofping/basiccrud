<?php 
$data = [
	'userid' => $_GET['userid'],
];
$user = $this->User->fetch($data);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>users</title>
</head>
<body>

	<h1>users</h1>

	<h2>Update user form</h2>

	<form method="POST" id="updateForm" name="updateForm" action="?p=submit">
		<label>Username</label>
		<input type="text" id="username" name="username" value="<?=$user['username']?>">
		<br><br>
		<label>Password</label>
		<input type="password" id="password" name="password" value="<?=$user['password']?>">
		<input type="hidden" id="userid" name="userid" value="<?=$user['userid']?>">
		<input type="hidden" name="submit" value="updateuser">
		<br><br>
		<button type="submit">Submit</button>
	</form>



</body>
</html>