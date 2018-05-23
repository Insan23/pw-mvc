<?php 
include('koneksi.php');
class mahasiswamodel
{
	
	function __construct()
	{
		
	}

	public static function insertBio($mahasiswa)
	{
		$nama = $mahasiswa->getNama();
		$jeniskelamin = $mahasiswa->getJenisKelamin();
		$hobi = $mahasiswa->getHobi();
		$prodi = $mahasiswa->getProgramStudi();
		
		$input = $con->query("INSERT INTO Biodata VALUES('$nama', '$jeniskelamin', '$hobi', '$prodi')") or die (mysql_error());

		if ($input) {
			return 'berhasil';
		} else {
			return 'gagal';
		}
	}
}
?>