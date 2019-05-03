<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    public function isAuthorized($user) {
        if(isset($user['rol']) and $user['rol'] === 'user') {
            if(in_array($this->request->action, ['home', 'logout', 'view'])) {
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

        $this->set(compact('users', array('limit' => 10)));
        $this->set('_serialize', ['users']);
    }

    public function home() {
        $categorias = TableRegistry::get('Categorias');
        $categorias = $categorias->find('all', ['order' => ['created' => 'DESC'], 'limit' => 5]);
        
        $clientes = TableRegistry::get('Clientes');
        $clientes = $clientes->find('all', ['order' => ['created' => 'DESC'], 'limit' => 5]);

        $productos = TableRegistry::get('Productos');
        $productos = $productos->find('all', ['order' => ['created' => 'DESC'], 'limit' => 5]);

        $promociones = TableRegistry::get('Promociones');
        $promociones = $promociones->find('all', ['order' => ['created' => 'DESC'], 'limit' => 5]);

        $status = [
            true => 'Activo',
            false => 'Inactivo',
        ];

        $this->set('categorias', $categorias);
        $this->set('clientes', $clientes);
        $this->set('productos', $productos);
        $this->set('promociones', $promociones);
        $this->set('status', $status);
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $status = [
            true => 'Activo',
            false => 'Inactivo',
        ];

        $this->set('user', $user);
        $this->set('status', $status);
        $this->set('_serialize', ['user']);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->rol = 'user';
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
