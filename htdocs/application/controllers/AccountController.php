<?php
/**
 * AccountController.php
 * Controller to register new users & login authorization users
 */
namespace application\controllers;

use application\core\Controller;
use application\models\Authorization;
class AccountController extends Controller
{

    /**
     * login action
     */
    public function loginAction()
    {
        $this->view->render('login');

    }

    /**
     * register action
     */
    public function registerAction()
    {
        $this->view->render('register');

    }

    /**
     *
     */
    public function logoutAction()
    {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            unset($_SESSION['cart']);
        }
        $this->view->redirect('zatolokin.rf.gd');
    }
}
