<?php 
include 'koneksi.php';
class model
{
	
	function __construct()
	{
	}

	public static function bacadata() {
		$con = koneksi::getkoneksi();
		$query = "SELECT NIM, Nama, Fakultas, Prodi FROM biodata;";
		$data = mysqli_query($con, $query);
		return $data;
	}
}
?>