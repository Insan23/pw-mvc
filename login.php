<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>Login</title>
</head>
<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4" style="margin-top: 100px">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Login Terlebih Dahulu</h3>
					<h5>Belum Punya Akun?</h5>
					<a class="btn btn-primary" href="http://localhost/pw/index.php?page=daftar">Daftar</a>
				</div>
				<div class="panel-body">
					<form action="http://localhost/pw/index.php?page=dashboard" method="post">
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" type="text" name="username" placeholder="Username" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="text" name="password" placeholder="Password"/>
							<?php if (isset($_GET['error'])) { ?>
								<label style="color: red">Username atau Password Salah</label>
							<?php } ?>
						</div>
						<input class="btn btn-primary" type="submit" name="login" value="Login" />
					</form>	
				</div>
			</div>	
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>