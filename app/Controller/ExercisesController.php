<?php
App::uses('AppController', 'Controller');
/**
 * Exercises Controller
 *
 * @property Exercise $Exercise
 */
class ExercisesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Exercise->recursive = 0;
		$this->set('exercises', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Exercise->id = $id;
		if (!$this->Exercise->exists()) {
			throw new NotFoundException(__('Invalid exercise'));
		}
		$this->set('exercise', $this->Exercise->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Exercise->create();
			if ($this->Exercise->save($this->request->data)) {
				$this->Session->setFlash(__('The exercise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
			}
		}
		$bodyParts = $this->Exercise->BodyPart->find('list');
		$categories = $this->Exercise->Category->find('list');
		$equipment = $this->Exercise->Equipment->find('list');
		$this->set(compact('bodyParts', 'categories', 'equipment'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Exercise->id = $id;
		if (!$this->Exercise->exists()) {
			throw new NotFoundException(__('Invalid exercise'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Exercise->save($this->request->data)) {
				$this->Session->setFlash(__('The exercise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Exercise->read(null, $id);
		}
		$bodyParts = $this->Exercise->BodyPart->find('list');
		$categories = $this->Exercise->Category->find('list');
		$equipment = $this->Exercise->Equipment->find('list');
		$this->set(compact('bodyParts', 'categories', 'equipment'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Exercise->id = $id;
		if (!$this->Exercise->exists()) {
			throw new NotFoundException(__('Invalid exercise'));
		}
		if ($this->Exercise->delete()) {
			$this->Session->setFlash(__('Exercise deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exercise was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

class ImagesController extends AppController {

	var $name = 'Images';
	var $helpers = array('Html', 'Form');
	var $components = array('Upload');

function upload() {

	if (empty($this->data)) {
		$this->render();
	} else {
		$this->cleanUpFields();

		// set the upload destination folder
		$destination = realpath('../../app/webroot/img/uploads/') . '/';

		// grab the file
		$file = $this->data['Image']['filedata'];

		// upload the image using the upload component
		$result = $this->Upload->upload($file, $destination, null, array('type' => 'resizecrop', 'size' => array('400', '300'), 'output' => 'jpg'));
		
		if (!$result){
			$this->data['Image']['filedata'] = $this->Upload->result;
		} else {
			// display error
			$errors = $this->Upload->errors;

			// piece together errors
			if(is_array($errors)){ $errors = implode("<br />",$errors); }

			$this->Session->setFlash($errors);
			$this->redirect('/images/upload');
			exit();
		}
		if ($this->Image->save($this->data)) {
			$this->Session->setFlash('Image has been added.');
			$this->redirect('/images/index');
		} else {
			$this->Session->setFlash('Please correct errors below.');
			unlink($destination.$this->Upload->result);
		}
        }
    }

}
