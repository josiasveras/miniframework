<?php 

namespace App;

use MF\Init\Bootstrap;

//Requisitos funcionais da applicação
class Route extends Bootstrap {

	//Definição das rotas da nossa aplicação
	protected function initRoutes() {
		//arrays que administram as rotas de URL
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);

	}

}

?>