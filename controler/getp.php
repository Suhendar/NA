<?php
	namespace controler;
	use lib\MVC\controler\base;
	class getp extends base{
		public function index(){
			$this->view("pos",null);
		}
		public function ambil(){
			$data = $this->urlparams;
			$this->view("view",$data);
		}
	}
 ?>