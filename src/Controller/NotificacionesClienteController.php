<?php
namespace App\Controller;

use App\Controller\AppController;

class NotificacionesClienteController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Promociones']
        ];
        $notificacionesCliente = $this->paginate($this->NotificacionesCliente);

        $this->set(compact('notificacionesCliente'));
        $this->set('_serialize', ['notificacionesCliente']);
    }

    public function view($id = null)
    {
        $notificacionesCliente = $this->NotificacionesCliente->get($id, [
            'contain' => ['Clientes', 'Promociones']
        ]);

        $this->set('notificacionesCliente', $notificacionesCliente);
        $this->set('_serialize', ['notificacionesCliente']);
    }

    public function add()
    {
        $notificacionesCliente = $this->NotificacionesCliente->newEntity();
        if ($this->request->is('post')) {
            $notificacionesCliente = $this->NotificacionesCliente->patchEntity($notificacionesCliente, $this->request->getData());
            if ($this->NotificacionesCliente->save($notificacionesCliente)) {
                $this->Flash->success(__('The notificaciones cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificaciones cliente could not be saved. Please, try again.'));
        }
        $clientes = $this->NotificacionesCliente->Clientes->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $promociones = $this->NotificacionesCliente->Promociones->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('notificacionesCliente', 'clientes', 'promociones'));
        $this->set('_serialize', ['notificacionesCliente']);
    }

    public function edit($id = null)
    {
        $notificacionesCliente = $this->NotificacionesCliente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificacionesCliente = $this->NotificacionesCliente->patchEntity($notificacionesCliente, $this->request->getData());
            if ($this->NotificacionesCliente->save($notificacionesCliente)) {
                $this->Flash->success(__('The notificaciones cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificaciones cliente could not be saved. Please, try again.'));
        }
        $clientes = $this->NotificacionesCliente->Clientes->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $promociones = $this->NotificacionesCliente->Promociones->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('notificacionesCliente', 'clientes', 'promociones'));
        $this->set('_serialize', ['notificacionesCliente']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificacionesCliente = $this->NotificacionesCliente->get($id);
        if ($this->NotificacionesCliente->delete($notificacionesCliente)) {
            $this->Flash->success(__('The notificaciones cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The notificaciones cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
