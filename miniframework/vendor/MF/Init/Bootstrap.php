<?php 

namespace MF\Init;

abstract class Bootstrap {
	private $routes;

	abstract protected function initRoutes();

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

	protected function run($url) {
		foreach ($this->getRoutes() as $key => $route) {

			if ($url == $route['route']) {
				$class = "App\\Controllers\\".ucfirst($route['controller']);

				$contoller = new $class;

				$action = $route['action'];

				$contoller->$action();
			}
		}

	}

	protected function getUrl(){
		//recuperação da URL
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}



?>