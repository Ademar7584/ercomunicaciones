<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class ClientesController extends AppController
{
    public function isAuthorized($user) {
        if(isset($user['rol']) and $user['rol'] === 'user') {
            if(in_array($this->request->action, ['index', 'add', 'edit', 'view'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    public function index()
    {
        $clientes = $this->paginate($this->Clientes, array('limit' => 10));

        $this->set(compact('clientes'));
        $this->set('_serialize', ['clientes']);
    }

    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);

        $status = [
            true => 'Activo',
            false => 'Inactivo',
        ];

        $this->set('cliente', $cliente);
        $this->set('status', $status);
        $this->set('_serialize', ['cliente']);
    }

    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El cliente ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El cliente no pudo ser guardado. intente de nuevo.'));
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El cliente ha sido editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El cliente no pudo ser editado. intente de nuevo.'));
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('El cliente ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El cliente no pudo ser eliminado. intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function sendMail() {
        Email::setConfigTransport('gmail', [
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'username' => 'alanfernando93.am@gmail.com',
            'password' => 'alanmamanihuayllani',
            'className' => 'Smtp',
            'tls' => true
        ]);
        if ($this->request->is('post')) {
            $correo = new Email();
            $correo->setTransport('gmail');
            $correo->setTemplate('email');
            $correo->setEmailFormat('html');
            $correo->setTo($this->request->getData('email'));
            $correo->setFrom($this->Auth->user('email'));
            $correo->setSubject('Correo de Notificacion');
            $correo->setViewVars([
                'message' => $this->request->getData('message'),
            ]);

            if ($correo->send()) {
                $this->Flash->success(__('Correo enviado'));

                return $this->redirect(['action' => 'view', $this->request->getData('id')]);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->setAction('view');
    }
}
