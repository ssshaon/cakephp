<?php
App::uses('AppController', 'Controller');
/**
 * UserRoles Controller
 *
 * @property UserRole $UserRole
 * @property PaginatorComponent $Paginator
 */
class UserRolesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserRole->recursive = 0;
		$this->set('userRoles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

    public function beforeFilter()
    {
        if (AuthComponent::user('user_role_id') != 1) {
            $this->Session->setFlash('You are not authenticated to view this page','flash/error');
            $this->redirect('/');
        }
        //If Admin
    }

	public function view($id = null) {
		if (!$this->UserRole->exists($id)) {
			throw new NotFoundException(__('Invalid user role'));
		}
		$options = array('conditions' => array('UserRole.' . $this->UserRole->primaryKey => $id));
		$this->set('userRole', $this->UserRole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserRole->create();
			if ($this->UserRole->save($this->request->data)) {
				$this->Session->setFlash('The user role has been saved.','flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
                $this->Session->setFlash('The user role could not be saved. Please, try again.','flash/error');
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
		if (!$this->UserRole->exists($id)) {
			throw new NotFoundException(__('Invalid user role'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserRole->save($this->request->data)) {
				$this->Flash->success(__('The user role has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user role could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserRole.' . $this->UserRole->primaryKey => $id));
			$this->request->data = $this->UserRole->find('first', $options);
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
		$this->UserRole->id = $id;
		if (!$this->UserRole->exists()) {
			throw new NotFoundException(__('Invalid user role'));
		}
		if ($this->UserRole->delete()) {
			$this->Flash->success(__('The user role has been deleted.'));
		} else {
			$this->Flash->error(__('The user role could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
