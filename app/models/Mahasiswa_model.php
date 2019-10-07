<?php 

class Mahasiswa_model {
/*	private $mhs = [
		[
			"nama" => "Dede Aminudin",
			"nrp" => "173040004",
			"email" => "dedeamin@mail.unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "sahaweh",
			"nrp" => "173040000",
			"email" => "sahaweh@mail.unpas.ac.id",
			"jurusan" => "Teknik Mesin"
		],
		[
			"nama" => "kepo",
			"nrp" => "173040002",
			"email" => "kepo@mail.unpas.ac.id",
			"jurusan" => "Teknik Industri"
		]

	];*/


	private $dbh;
	private $stmt;

	public function __construct() {
		// data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';


		try {
			$this->dbh = new PDO($dsn, 'root','');
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}


	public function getAllMahasiswa() {
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

 ?>