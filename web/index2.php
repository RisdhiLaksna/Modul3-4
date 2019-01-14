<!DOCTYPE html>
<html lang="en">
<head>
	<title>DBRAM</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="agile-login">
		<h1>Login Form</h1>
		<div class="wrapper">
			<div class="form">
				<form action="" method="post">
					<?php
						$user = $_POST['name'];
						$pass = $_POST['password'];
						if (($user == "Bramini") && ($pass == "assalamualaikum"))
						{
							echo "Login Berhasil";
						}
						else {
							echo "Login Gagal";
						}
					 ?>
				</form>
			</div>

		</div>
	</div>

</body>
</html>
