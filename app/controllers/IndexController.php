<?php 

	namespace App\Controllers;

	use MF\Controller\Action;
	use MF\Model\Container;

	use App\Models\Produto;
	use App\Models\Info;

	class IndexController extends Action{

		public function index(){

			// $this->view->dados = array('Casa', 'Roupa', 'Carro');

			$produto= Container::getModel('Produto');

			$this->view->dados= $produto->getProduto();
			$this->render('index', 'layout');

		}

		public function sobreNos(){

			// $this->view->dados = array('Tv', 'Rádio', 'Pc');
			$info= Container::getModel('Info');

			$this->view->dados= $info->getInfo();
			$this->render('sobreNos', 'layout');
		}
	}
 

 ?>