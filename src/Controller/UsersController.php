<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    public function isAuthorized($user) {
        if(isset($user['rol']) and $user['rol'] === 'user') {
            if(in_array($this->request->action, ['home', 'logout'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    public function login() {
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error('datos son invalidos, intente nuevamente', ['key' => 'auth']);
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function home() {
        $this->render();
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->role = 'user';
            $user->estado = 1;
            if ($this->Users->save($user)) {
                $this->Flash->success('El usuario ha sido guardado.');

                return $this->redirect(['controller' => 'Users', 'action' => 'home']);
            }
            $this->Flash->error('El usuario no pudo ser guardado. trata de nuevo.');
        }
        $this->set(compact('user'));
    }

    public function new() {
        $user = $this->Users->newEntity();
        if($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)) {
                $this->Flash->success('El usuario ha sido guardado');
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            }
            $this->Flash->error('El usaurio no pudo ser guardado. trata de nuevo');
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no pudo ser guardado trata de nuevo.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El usuario no pudo ser eliminado. trata de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
