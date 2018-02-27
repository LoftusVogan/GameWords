<?php
/**
 * Created by PhpStorm.
 * User: loftus
 * Date: 29.01.18
 * Time: 20:19
 */

namespace application\Controllers;


use application\core\Controller;

class ScoreController extends Controller
{
    public function allAction()
    {
        $this->view->render('Info');
    }
}