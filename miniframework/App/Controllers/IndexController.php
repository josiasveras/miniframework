<?php 

namespace App\Controllers;

class IndexController {

	private $view;

	public function __construct(){
		$this->view = new \stdClass();
	}
	
	public function index() {

	//A variável $dados é passada com segundo parâmetro da função render para que seja possível recuperar seu conteúdo dentro do escopo em que ela não existe
	   	$this->view->dados = array ('sofá', 'cadeira', 'cama');
		$this->render('index');

	}

	public function sobreNos() {

		$this->view->dados = array ('notebook', 'smarphone', 'tablet');
		$this->render('sobreNos');

	}

	public function render($view) {
		$classAtual = get_class($this);

		$classAtual = str_replace('App\\Controllers\\', '', $classAtual);

		$classAtual = strtolower(str_replace('Controller', '', $classAtual));

		require_once "../App/Views/".$classAtual."/".$view.".phtml";

	}

}	

?>