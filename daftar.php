<?php 
if (isset($_POST['daftar'])) {
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($con, "INSERT INTO user VALUES('', '$username', '$password')");
	if ($result) {
		header("location: http://localhost/pw/index.php");
	} else {
		header("location: http://localhost/pw/index.php?page=daftar&ms=gagal");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
		if (isset($_GET['ms'])) {
			echo "<div class='alert alert-warning'>";
			echo "Pendaftaran gagal!";
			echo "</div>";
		}
		?>
		<div class="col-md-4 col-md-offset-4" style="margin-top: 100px">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Daftar Akun</h3>
				</div>
				<div class="panel-body">
					<form action="http://localhost/pw/index.php?page=daftar" method="post">
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" type="text" name="username" placeholder="Username" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="text" name="password" placeholder="Password"/>
						</div>
						<input class="btn btn-primary" type="submit" name="daftar" value="Daftar" />
					</form>	
				</div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>