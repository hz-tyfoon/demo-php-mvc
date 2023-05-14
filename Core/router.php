<?php 

namespace Core;

class Router{
    protected $routes = [];

    public function add($uri, $controller, $method){
        $this->routes[] = compact('uri', 'controller', 'method');
    }

    public function get($uri, $controller){
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller){
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller){
        $this->add($uri, $controller, 'DELETE');
    }

    public function patch($uri, $controller){
        $this->add($uri, $controller, 'PATCH');
    }
    
    public function put($uri, $controller){
        $this->add($uri, $controller, 'PUT');
    }

    public function route($uri, $method){
        foreach ($this->routes as $key => $route) {

            $method = strtoupper($method);
            if($route['uri'] === $uri && $route['method'] === $method){
                return require basePath($route['controller']);
            }

            if( ! ( $method === 'DELETE' || $method === 'PATCH' ) ){
                continue;
            }

            $pattern = "~^" . preg_quote($route['uri'], '~') . "/(\d{1,9})$~";
            if (preg_match($pattern, $uri, $matches) && $route['method'] === $method) {
                $id = $matches[1];
                return require basePath($route['controller']);
            }

        }

        $this->abort();
    }

    public function abort($code = 404){
        http_response_code($code);

        view("{$code}.php");

        die();
    }
}
