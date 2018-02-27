<?php
/**
 * Created by PhpStorm.
 * User: loftus
 * Date: 29.01.18
 * Time: 20:12
 */

namespace application\Controllers;


use application\core\Controller;

class AboutController extends Controller
{
    public function infoAction(){
        $this->view->render('info');
    }
}