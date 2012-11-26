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
public function client() {     
    $this->layout = 'clientsdefault';
        $this->loadModel('Client');
        $this->loadModel('Program');
        $client_id = AuthComponent::user('client_id');
        
        $this->Client->id = $client_id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
}
                
        public function isAuthorized($user) {
   
        return true;

        }
        
        public function clientdetails() {
        $this->layout = 'clientsdefault'; //load clientsdefault layout
        $this->loadModel('Client');
        
        $id = AuthComponent::user('client_id');
        $this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		$this->set('client', $this->Client->read(null, $id));
        }
    
        public function index() {
	$this->clientdetails();
                
        
        }
        
        public function viewProgram($id){
        $this->clientdetails();
        $this->loadModel('Program');
        $this->loadModel('ExercisesProgram');
                $this->Program->id = $id;
                $prog = $this->Program->read(null, $id);
                if(AuthComponent::user('client_id') != $prog['Program']['client_id'])
		{
                    $this->Session->setFlash(__('Unauthorised'));
                   // $this->redirect(array('action' => 'index'));
                }
                //$this->Program->id = $id;
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid program'));
		}
                $this->set('program', $prog);
                
                $exercisesProgram = $this->ExercisesProgram->query("SELECT exercises_programs.rec_sets, exercises_programs.rec_reps, exercises_programs.rec_res FROM exercises_programs WHERE exercises_programs.program_id = $id");
		$this->set('exercisesPrograms', $exercisesProgram);
       }
               
        public function changePassword($id = null) {
        $this->clientdetails();
        $this->loadModel('User');
        $this->User->id = $id;
       
        if (!$this->User->exists() || AuthComponent::user('id') != $id) {   
            $this->Session->setFlash(__('Unauthorised'));
           $this->redirect(array('action' => 'index'));
            
        }
        if (AuthComponent::password($this->request->data('User.password')) == AuthComponent::password($this->request->data('User.password_confirm')))
        {
            
        if ($this->request->is('post') || $this->request->is('put')) {
          
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Password change successful'));
                $this->redirect(array('action' => 'index'));
            } 
            else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
        }
        else {
            $this->Session->setFlash(__('Password do not match, please try again.'));
        }
        
        }
        
        public function viewExercise($id = null) {
		$this->clientdetails();
                $this->loadModel('Program');
                $this->Program->Exercise->id = $id; 
		if (!$this->Program->Exercise->exists()) {
			throw new NotFoundException(__('Invalid exercise'));
		}
                //$this->set('program', $progid);
		$this->set('exercise', $this->Program->Exercise->read(null, $id));
       }
       
       public function belongsTo($id)
       {
           
       }
}