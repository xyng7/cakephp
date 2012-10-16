<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ForgotPasswordController extends AppController {

/**
 * index method
 *
 * @return void
 */
    
public function beforeFilter() {
        $this->Auth->allow();
         $this->Auth->autoRedirect = false; //for last login time
    }
	
    
    public function index() {
        $this->layout = 'forgotpassworddefault';  //dont use default layout with menu icons
		
	}

}