<?php
/**
 *
 * GameController
 *
 */

namespace application\Controllers;


use application\core\Controller;
use application\models\Main;
class Game extends Controller
{
    public function startAction()
    {
        $this->view->render('City Game');
    }
}