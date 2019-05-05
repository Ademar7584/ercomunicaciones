<?php
namespace App\Controller;

use App\Controller\AppController;

class VentasProductoController extends AppController
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
        $this->paginate = [
            'contain' => ['Productos', 'Clientes']
        ];
        $ventasProducto = $this->paginate($this->VentasProducto);

        $this->set(compact('ventasProducto'));
        $this->set('_serialize', ['ventasProducto']);
    }

    public function view($id = null)
    {
        $ventasProducto = $this->VentasProducto->get($id, [
            'contain' => ['Productos', 'Clientes']
        ]);

        $this->set('ventasProducto', $ventasProducto);
        $this->set('_serialize', ['ventasProducto']);
    }

    public function add()
    {
        $ventasProducto = $this->VentasProducto->newEntity();
        if ($this->request->is('post')) {
            $ventasProducto = $this->VentasProducto->patchEntity($ventasProducto, $this->request->getData());
            if ($this->VentasProducto->save($ventasProducto)) {
                $this->Flash->success(__('La venta del Producto ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La venta del Producto no pudo ser guardada, intente de nuevo.'));
        }
        $productos = $this->VentasProducto->Productos->find('list', ['keyField' => 'id', 'valueField' => 'marca']);
        $clientes = $this->VentasProducto->Clientes->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('ventasProducto', 'productos', 'clientes'));
        $this->set('_serialize', ['ventasProducto']);
    }

    public function edit($id = null)
    {
        $ventasProducto = $this->VentasProducto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ventasProducto = $this->VentasProducto->patchEntity($ventasProducto, $this->request->getData());
            if ($this->VentasProducto->save($ventasProducto)) {
                $this->Flash->success(__('La venta del Producto ha sido editada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La venta del Producto no pudo ser editada, intente de nuevo.'));
        }
        $productos = $this->VentasProducto->Productos->find('list', ['keyField' => 'id', 'valueField' => 'marca']);
        $clientes = $this->VentasProducto->Clientes->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('ventasProducto', 'productos', 'clientes'));
        $this->set('_serialize', ['ventasProducto']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ventasProducto = $this->VentasProducto->get($id);
        if ($this->VentasProducto->delete($ventasProducto)) {
            $this->Flash->success(__('La venta del Producto ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La venta del Producto ha sido eliminada, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
