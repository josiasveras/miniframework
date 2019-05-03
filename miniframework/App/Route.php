<?php 

namespace App;

class Route {
	//Definição das rotas da nossa aplicação
	public function initRoutes() {
		//arrays que administram as rotas de URL
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => 'sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobre_nos'
		);

	}

	public function getUrl(){
		//recuperação da URL
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}

?>