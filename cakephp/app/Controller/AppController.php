<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    //Auth login logout routes
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            
            'authorize' => array('Controller') 
            //No log out route set yet...
            //'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );
    
    public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }
    
    else
        // Default deny
        $this->Session->setFlash('Sorry, you don\'t have permission to access that page.');
        $this->redirect(array('controller' => 'users', 'action' => 'login'));
        return false;
}
    
    // allow login page to be accessable
    public function beforeFilter() {
        $this->Auth->allow(array('controller' => 'users', 'action' => 'login'));
         $this->Auth->autoRedirect = false; //for last login time
    }
}
