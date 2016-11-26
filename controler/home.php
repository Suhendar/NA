<?php
	namespace controler;
	use lib\MVC\controler\base;
	use model\tabel;
	class home extends base{
		public function __construct(){
				parent::__construct();
				$this->model("tabel");
		}
		public function index(){
			$data['hasil'] = $this->model->ambil();
			$this->view("view",$data);
		}
		public function tambah(){
			$data = array( "nama" => "rahmat","kelas" => "XII TKJ 2");
			$this->model->tambah($data);
			$this->index();
		}
		public function ubah(){
			$data = array("kelas" => "XII TKJ 2");
			$q["hasil"] = $this->model->ubah($data);
			$this->view("view",$q);
		}
		public function hapus(){
			$this->model->hapus("nama","rahmat");
			$this->index();
		}
	}
 ?>
