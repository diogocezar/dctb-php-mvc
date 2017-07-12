<?php
	namespace App;
	class ControllerAgenda{
		public function index(){
			$modelAgenda = new ModelAgenda();
			$viewAgenda  = new ViewAgenda();
			$viewAgenda->render($modelAgenda->getAgenda());
		}
		public function save($data){
			$modelAgenda = new ModelAgenda();
			$viewAgenda  = new ViewAgenda();
			$modelAgenda->saveAgenda($data);
			$viewAgenda->render($modelAgenda->getAgenda());
		}
	}
?>