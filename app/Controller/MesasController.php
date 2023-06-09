<?php
App::uses('AppController', 'Controller');
/**
 * Mesas Controller
 *
 * @property Mesa $Mesa
 * @property PaginatorComponent $Paginator
 */
class MesasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function isAuthorized($user)
	{

		if ($user['role'] == 'user') {

			if (in_array($this->action, array('view', 'index', 'add'))) {

				return true;
			} else {

				if ($this->Auth->user('id')) {

					$this->Session->setFlash('No puede aceder', $element = 'default', $params = array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		return parent::isAuthorized($user);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mesa->recursive = 0;
		$this->set('mesas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesa->exists($id)) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		$options = array('conditions' => array('Mesa.' . $this->Mesa->primaryKey => $id));
		$this->set('mesa', $this->Mesa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mesa->create();
			if ($this->Mesa->save($this->request->data)) {
				$this->Session->setFlash(__('The mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mesa could not be saved. Please, try again.'));
			}
		}
		$meseros = $this->Mesa->Mesero->find('list');
		$this->set(compact('meseros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mesa->exists($id)) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mesa->save($this->request->data)) {
				$this->Session->setFlash(__('The mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mesa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mesa.' . $this->Mesa->primaryKey => $id));
			$this->request->data = $this->Mesa->find('first', $options);
		}
		$meseros = $this->Mesa->Mesero->find('list');
		$this->set(compact('meseros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mesa->id = $id;
		if (!$this->Mesa->exists()) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mesa->delete()) {
			$this->Session->setFlash(__('The mesa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mesa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
