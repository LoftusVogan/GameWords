<?php
/**
 *  Controller main page
 */
namespace application\controllers;

use application\core\Controller;
use application\models\Main;
//use application\lib\Database;

class MainController extends Controller
{

    public function indexAction()
    {
        $this->view->render('City: Main Page');
    }
}
