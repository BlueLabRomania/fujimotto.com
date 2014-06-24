<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\Adapter\DbTable as AuthAdapter;

/**
 * Class AuthenticationController
 * @package Application\Controller
 * Author: Ciuca Dan Sorin
 * Date: 22.06.2014
 */
class AuthenticationController extends AbstractActionController {
    function __construct()
    {
        // @todo: set no rander
    }

    /**
     * @return ViewModel
     */
    public function indexAction () {
        return new ViewModel();
    }

    /**
     * @return ViewModel
     */
    public function loginAction() {
        return new ViewModel();
    }

    /**
     * @return ViewModel
     */
    public function logoutAction() {
        return new ViewModel();
    }
}