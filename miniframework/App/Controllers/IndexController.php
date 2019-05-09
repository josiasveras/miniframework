<?php 

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action{

	public function index() {

	//A variável $dados é passada com segundo parâmetro da função render para que seja possível recuperar seu conteúdo dentro do escopo em que ela não existe
	   	//$this->view->dados = array ('sofá', 'cadeira', 'cama');

		//Instância de conexão
		//Pelo fato do método getDb ser do tipo estático eu não precisei instânciar a classe Connection para fazer a utilização do método getDb aqui
		$conn = Connection::getDb();

		//Instanciar modelo
		$produto = new Produto($conn);

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');

	}

	public function sobreNos() {

		//$this->view->dados = array ('notebook', 'smarphone', 'tablet');
		$this->render('sobreNos', 'layout2');

	}

}	

?>