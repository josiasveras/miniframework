<?php 

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

	public function index() {

	//A variável $dados é passada com segundo parâmetro da função render para que seja possível recuperar seu conteúdo dentro do escopo em que ela não existe
	   	$this->view->dados = array ('sofá', 'cadeira', 'cama');
		$this->render('index', 'layout1');

	}

	public function sobreNos() {

		$this->view->dados = array ('notebook', 'smarphone', 'tablet');
		$this->render('sobreNos', 'layout2');

	}

}	

?>