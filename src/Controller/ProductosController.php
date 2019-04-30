<?php
namespace App\Controller;

use App\Controller\AppController;

class ProductosController extends AppController
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
        $productos = $this->paginate($this->Productos);

        $this->set(compact('productos'));
        $this->set('_serialize', ['productos']);
    }

    public function view($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => []
        ]);

        $this->set('producto', $producto);
        $this->set('_serialize', ['producto']);
    }

    public function add()
    {
        $producto = $this->Productos->newEntity();
        if ($this->request->is('post')) {
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('El producto ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo ser guardado, intente de nuevo.'));
        }
        $categorias = $this->Productos->Categorias->find('list');
        $this->set(compact('producto', 'categorias'));
        $this->set('_serialize', ['producto']);
    }

    public function edit($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Productos->patchEntity($producto, $this->request->getData());
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('El producto ha sido editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo ser editado ,intente de nuevo'));
        }
        $this->set(compact('producto'));
        $this->set('_serialize', ['producto']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        if ($this->Productos->delete($producto)) {
            $this->Flash->success(__('El producto ha sido eliminado'));
        } else {
            $this->Flash->error(__('El producto no pudo ser eliminado. intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
