<?php 

class Home extends Controller {
	public function index() {

		$data['judul'] = 'Home';
		$this->view('home/index');
		$this->view('templates/header', $data);
		$this->view('templates/footer');

	}
}

 ?>