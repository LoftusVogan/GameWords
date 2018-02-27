<?php
/**
 * Created by PhpStorm.
 * User: loftus
 * Date: 29.01.18
 * Time: 20:21
 */

namespace application\Controllers;


use application\core\Controller;

class ContactController extends Controller
{
    public function meAction()
    {
        $this->view->render('Contact');
    }
}