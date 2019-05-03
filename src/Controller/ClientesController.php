<?php
namespace App\Controller;

use App\Controller\AppController;

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
        $clientes = $this->paginate($this->Clientes);

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
}
