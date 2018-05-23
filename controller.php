<?php
include 'koneksi.php';
class controller
{
	function __construct()
	{
	}

	public function baca()
	{
		$data = model::bacadata();
		require_once 'view2.php';
	}

	public function home()
	{
		require_once 'view.php';
	}

	public function login()
	{
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$read = "SELECT _ID FROM user WHERE username = '$username' AND password = '$password'";
			$data = mysqli_query($con, $read);
			if (mysqli_num_rows($data) > 0) {
				header("location:dashboard.php");
			} else {
				header("location:http://localhost/pw/?error");
			}
		}
	}

	public function tambahBio()
	{
		include_once 'mahasiswa.php';
		include_once 'mahasiswamodel.php';
		$nama = isset($_GET['nama'])? $_GET['nama']:'';
		$jeniskelamin = isset($_GET['jenis_kelamin'])? $_GET['jenis_kelamin']:'';
		$prodi = isset($_GET['prodi'])? $_GET['prodi']:'';
		$hobi1 = isset($_GET['hobi1'])? $_GET['hobi1']:'';
		$hobi2 = isset($_GET['hobi2'])? $_GET['hobi2']:'';
		$hobi = $hobi1 . ", " .$hobi2;
		mahasiswa maha = new mahasiswa('', $nama, $jeniskelamin, $prodi, $hobi);

		$status = mahasiswamodel::insertBio($maha);
		if($status == 'berhasil') {
			
		} else {
			header("location:http://localhost/pw/?error");
		}
	}
}
?>