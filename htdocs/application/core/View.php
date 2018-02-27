<?php
/**
 *
 */
namespace application\core;

/**
 * Class View
 * @package application\core
 */
class View
{
    public $path;
    public $route;
    public $layout = 'default';

    /**
     * View constructor.
     * @param $route
     */
    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
        //debug($route);
    }

    /**
     * @param $title
     * @param array $vars
     */
    public function render($title, $vars = [])
    {
        $path = 'application/view/' . $this->path . '.php';
        extract($vars);
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/view/layouts/' . "$this->layout" . '.php';
        } else {
            echo "view not find".$this->path;
        }
    }

    /**
     * @param $url
     */
    public function redirect($url)
    {
        header("location $url");
        exit();
    }

    /** error function.
     * @param $code
     */
    public static function error($code)
    {
        http_response_code($code);
        $path = 'application/view/errors/' . $code . '.php';
        if (file_exists($path)) {
            require $path;
        } else {
            exit();
        }
        exit;
    }
}
