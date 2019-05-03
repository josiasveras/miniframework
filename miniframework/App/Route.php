<?php 

namespace App;

class Route {

	private $routes;

	public function __construct(){
		$this->initRoutes();
		$this->run($this->geturl());
	}

	public function getRoutes(){
		//
		return $this->routes;
	}

	public function setRoutes(array $routes){
		//
		$this->routes = $routes;
	}


	//Definição das rotas da nossa aplicação
	public function initRoutes() {
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

	public function run($url) {
		foreach ($this->getRoutes() as $key => $route) {

			if ($url == $route['route']) {
				$class = "App\\Controllers\\".ucfirst($route['controller']);

				$contoller = new $class;

				$action = $route['action'];

				$contoller->$action();
			}
		}

	}

	public function getUrl(){
		//recuperação da URL
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}

?>