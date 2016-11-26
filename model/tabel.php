<?php
	namespace model;
	use lib\MVC\model\model;

	class tabel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function konek(){
			$ha = $this->teskonek();
			return $ha;
		}
		public function ambil(){
			$col = array("nama","kelas");
			$this->select($col);
			$this->from("data");
			$this->where("kelas","XII TKJ 2");

			return $this->get();
		}
		public function tambah($p){
			$this->into("data");
			$this->set($p);

			$this->insert();
		}
		public function hapus($p1,$p2){
			$this->into("data");
			$this->where($p1,$p2);

			$this->delete();
		}
		public function ubah($p){

			$this->into("data");
			$this->set($p);
			$this->where("nama","rahmat");

			$this->update();

		}
	}
 ?>
