<?php
class koneksi
{
	
	function __construct()
	{}

	public static function getkoneksi()
	{
		$host            = "localhost";
		$username        = "root";
		$pass            = "";
		$db              = "pw";

		$con = mysqli_connect($host, $username, $pass, $db);
		return $con;
	}
}
?> 
