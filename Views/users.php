<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>users</title>
</head>
<body>

	<h1>users</h1>

	<h2>Create user form</h2>

	<form method="POST" id="createForm" name="createForm" action="?p=submit">
		<label>Username</label>
		<input type="text" id="username" name="username">
		<br><br>
		<label>Password</label>
		<input type="password" id="password" name="password">
		<br><br>
		<button type="submit">Submit</button>
	</form>

	<hr>
	

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($this->User->fetchAll() as $user): ?>
				<tr>
					<td><?php echo $user['userid'] ?></td>
					<td><?php echo $user['username'] ?></td>
					<td><?php echo $user['password'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>


</body>
</html>