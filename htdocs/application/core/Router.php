<?php
/**
 *
 */
namespace application\core;

use application\core\View;

class Router
{
    protected $routes = [];

    protected $params = [];

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $arr = require('application/config/routes.php');
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    /**
     * @param $route
     * @param $params
     */
    public function add($route, $params)
    {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    /**
     * @return bool
     */
    public function math()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        //  var_dump($url);
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params= $params;
                return true;
            }
        }
        return false;
    }

    /**
     *
     */
    public function run()
    {
        if ($this->math()) {
            $path = "application\controllers\\".ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    View::error(404);
                }
            } else {
                View::error(404);
            }
        } else {
            View::error(404);
        }
    }
}
