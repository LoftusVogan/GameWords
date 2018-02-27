<?php
/**
 * main Controller
 */

namespace application\core;

use application\core\View;

abstract class Controller
{
    public $route;

    public $view;

    /**
     * Controller constructor.
     * @param $route
     */
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);

        //debug($this->route);
    }

    /**
     * Function autoload model.
     * Example: if controller mainController, model -> Main. If AcountController, model -> Acount.
     * @param $name
     * @return mixed
     */
    public function loadModel($name)
    {
        $path = 'application\models\\'.ucfirst($name);
        if(class_exists($path)){
            return new $path;
        }
    }
}
