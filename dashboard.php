<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>Dashboard</title>
</head>
<body>
	<div class="container">
		<div class="alert alert-success">
			<?php
			echo "Berhasil Login";
			?>

		</div>
		<div class="col-md-4 col-md-offset-4" style="margin-top: 100px">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Daftarkan Biodata Anda</h3>
				</div>
				<div class="panel-body">
					<form action="http://localhost/pw/biodata.php" method="POST">
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" type="text" name="nama"/> 
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<br>
							<input type="radio" name="jenis_kelamin" value="pria" checked="true" /> <label>Pria</label> 
							<input type="radio" name="jenis_kelamin" value="wanita" /> <label>Wanita</label>
						</div>
						<div class="form-group">
							<label>Hobi</label>
							<br>
							<input type="checkbox" name="hobi1" value="Sepak Bola" /> <label>Sepak Bola</label> 
							<input type="checkbox" name="hobi2" value="Membaca" /> <label>Membaca</label> 
						</div>
						<input class="btn btn-primary" type="submit" name="datadiri" value="Simpan"/>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
