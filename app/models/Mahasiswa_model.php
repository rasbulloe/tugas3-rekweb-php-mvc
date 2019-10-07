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




	private $table = 'mahasiswa';
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getAllMahasiswa() {

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();

	}

	public function getMahasiswaById($id) {
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data) {
		$query = "INSERT INTO mahasiswa
					VALUES
					('', :nama, :nrp, :email, :jurusan)";

		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('nrp',$data['nrp']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('jurusan',$data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();

	}





}

 ?>