<?php 

class mahasiswa
{
	$ID;
	$Nama;
	$JenisKelamin;
	$Hobi;
	$ProgramStudi;

	function __construct($ID = '', $Nama, $JenisKelamin, $Hobi, $ProgramStudi)
	{
		$this->ID = $ID;
		$this->Nama = $Nama;
		$this->JenisKelamin = $JenisKelamin;
		$this->Hobi = $Hobi;
		$this->ProgramStudi = $ProgramStudi;
	}

	/**
	 *  getter
	 */

	public function getID()
	{
		return $this->ID;
	}

	public function getNama()
	{
		return $this->Nama;
	}

	public function getJenisKelamin()
	{
		return $this->JenisKelamin;
	}

	public function getHobi()
	{
		return $this->Hobi;
	}

	public function getProgramStudi()
	{
		return $this->ProgramStudi;
	}

	/**
	 *  setter
	 */

	public function setID($ID)
	{
		$this->ID = $ID;
	}

	public function setNama($Nama)
	{
		$this->Nama = $Nama;
	}

	public function setJenisKelamin($JenisKelamin)
	{
		$this->JenisKelamin = $JenisKelamin;
	}

	public function setHobi($Hobi)
	{
		$this->Hobi = $Hobi;
	}

	public function setProgramStudi($ProgramStudi)
	{
		$this->ProgramStudi = $ProgramStudi;
	}

}
 ?>