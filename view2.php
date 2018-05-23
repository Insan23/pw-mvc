<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
</head>
<body>
	<?php 
	if (isset($data)) {
		echo "<h3>Biodata</h3>";
		echo "<table class='table'>";
		echo "<tr>";
		echo "<td>NIM</td>";
		echo "<td>Nama</td>";
		echo "<td>Fakultas</td>";
		echo "<td>Prodi</td>";
		echo "</tr>";
		while ($baris = mysqli_fetch_row($data)) {
			echo "<tr>";
			echo "<td>$baris[0]</td>";
			echo "<td>$baris[1]</td>";
			echo "<td>$baris[2]</td>";
			echo "<td>$baris[3]</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "<a class='btn teal' href='index.php?c=controller&f=baca'>Tidak ada data</a>";
	}
	?>
</body>
</html>