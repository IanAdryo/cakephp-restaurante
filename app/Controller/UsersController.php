<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter() {

		parent::beforeFilter();
		//$this->Auth->allow('add');
	}

	public function isAuthorized($user){
		
		if ($user['role'] == 'user') {

			if (in_array($this->action, array('add', 'index'))) {
				
				return true;

			}	else	{

				if ($this->Auth->user('id')){

					$this->Session->setFlash('No puede aceder', $element = 'default', $params = array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}			
		}
		return parent::isAuthorized($user);
	}
	public function login() {

		if ($this->request->is('post')) {

			if ($this->Auth->login()) {

				return $this->redirect($this->Auth->redirectUrl());
			}

			$this->Session->setFlash('Usuario y/o contraseña son incorrectos!', $element = 'default', $params = array('class' => 'alert alert-danger'));
		}
	}

	public function logout() {

		return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->find('count', array('conditions' => array('User.role' => 'admin'))) >= 1) {
				
				$this->request->data['User']['role'] = 'user';
			} else {
				$this->request->data['User']['role'] = 'admin';
			}
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El usuario ha sido guardado.', $element = 'default', $params = array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El usuario no pudo ser guardado. Por favor intentelo nuevamente.', $element = 'default', $params = array('class' => 'alert alert-warning'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El usuario ha sido guardado.', $element = 'default', $params = array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El usuario no pudo ser guardado. Por favor intentelo nuevamente.', $element = 'default', $params = array('class' => 'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash('El usuario ha sido eliminado.', $element = 'default', $params = array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El usuario no pudo ser eliminado. Por favor intentelo nuevamente.', $element = 'default', $params = array('class' => 'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
