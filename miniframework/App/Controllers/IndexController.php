<?php 

namespace App\Controllers;

class IndexController {
	
	public function index() {

	//A variável $dados é passada com segundo parâmetro da função render para que seja possível recuperar seu conteúdo dentro do escopo em que ela não existe
	   	$dados = array ('sofá', 'cadeira', 'cama');
		$this->render('index', $dados);

	}

	public function sobreNos() {

		$dados = array ('notebook', 'smarphone', 'tablet');
		$this->render('sobreNos', $dados);

	}

	public function render($view, $dados) {
		echo get_class($this);
		require_once "../App/Views/index/".$view.".phtml";

	}

}	

?>