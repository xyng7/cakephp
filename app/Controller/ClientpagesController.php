<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientpagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
public function isAuthorized($user) {
   
        return true;

}
    
        public function index() {
        $this->layout = 'clientsdefault';  //dont use default layout with menu icons
		
	}

}