<?php
    namespace App;

    class route{
        private $routes;

        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes(){
            return $this->routes;
        }
        public function setRoutes(array $routes){
            $this->routes = $routes;
        }

        public function initRoutes(){
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobreNos',
                'controller' => 'indexController',
                'action' => 'sobreNos'
            );

            $this->getRoutes($routes);
        }

        public function run($url){
            foreach($this->getRoutes() as $key => $route){
                if($url == $route['route']){
                    $class = "App\\Controllers\\" .ucfirst($route['controller']);

                    $controller = new $class;

                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // SuperGlobal
        }
    }
?>