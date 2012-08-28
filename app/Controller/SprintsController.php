<?php
App::uses('AppController', 'Controller');

/*

 */
class SprintsController extends AppController {
	public $scaffold = 'admin';

	public $components = array('Session');

	public $helpers = array('Form', 'Html');

	public function index() {
		$this->set('sprints', $this->Story->find('all'));
	}

	public function add() {
		parent::_add();
	}

	public function edit($id = null) {
		$this->Story->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Story->read();
		} else {
			if ($this->Story->save($this->request->data)) {
				$this->Session->setFlash('The story has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update the story.');
			}
		}
	}
}
