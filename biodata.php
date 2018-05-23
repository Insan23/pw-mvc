<?php
session_start();

?>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3" style="margin-top: 40px">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2>Biodata</h2>
				</div>
				<div class="panel-body">
					<form action="upload-foto.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<img src="" class="img-responsive img-circle">
							<label>Username :</label>
							<label><?php echo $_SESSION['username']?></label>
						</div>
						<div class="form-group">
							<label>Nama:</label>
							<input class="form-control" type="text" name="nama">
						</div>
						<div class="form-group">
							<label>Alamat:</label>
							<input class="form-control" type="text" name="alamat">
						</div>
						<div class="form-group">
							<label>Foto Profil</label>
							<input type="file" name="foto-profil">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>