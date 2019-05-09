<?php
namespace App\Controller;

use App\Controller\AppController;

class PromocionesProductoController extends AppController
{
    public function isAuthorized($user) {
        if(isset($user['rol']) and $user['rol'] === 'user' or $user['rol'] === 'cliente') {
            if(in_array($this->request->action, ['index', 'add', 'edit', 'view'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Promociones', 'Productos']
        ];
        $promocionesProducto = $this->paginate($this->PromocionesProducto);

        $this->set(compact('promocionesProducto'));
        $this->set('_serialize', ['promocionesProducto']);
    }

    public function view($id = null)
    {
        $promocionesProducto = $this->PromocionesProducto->get($id, [
            'contain' => ['Promociones', 'Productos']
        ]);

        $this->set('promocionesProducto', $promocionesProducto);
        $this->set('_serialize', ['promocionesProducto']);
    }

    public function add()
    {
        $promocionesProducto = $this->PromocionesProducto->newEntity();
        if ($this->request->is('post')) {
            $promocionesProducto = $this->PromocionesProducto->patchEntity($promocionesProducto, $this->request->getData());
            if ($this->PromocionesProducto->save($promocionesProducto)) {
                $this->Flash->success(__('La promocion del producto ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La promocion del producto no pudo ser guardado, intente de nuevo.'));
        }
        $productos = $this->PromocionesProducto->Productos->find('list', ['keyField' => 'id', 'valueField' => 'marca']);
        $promociones = $this->PromocionesProducto->Promociones->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('promocionesProducto', 'productos', 'promociones'));
        $this->set('_serialize', ['promocionesProducto']);
    }

    public function edit($id = null)
    {
        $promocionesProducto = $this->PromocionesProducto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $promocionesProducto = $this->PromocionesProducto->patchEntity($promocionesProducto, $this->request->getData());
            if ($this->PromocionesProducto->save($promocionesProducto)) {
                $this->Flash->success(__('La promocion del producto ha sido editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La promocion del producto no pudo ser editado, intente de nuevo.'));
        }
        $productos = $this->PromocionesProducto->Productos->find('list', ['keyField' => 'id', 'valueField' => 'marca']);
        $promociones = $this->PromocionesProducto->Promociones->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('promocionesProducto', 'productos', 'promociones'));
        $this->set('_serialize', ['promocionesProducto']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $promocionesProducto = $this->PromocionesProducto->get($id);
        if ($this->PromocionesProducto->delete($promocionesProducto)) {
            $this->Flash->success(__('La promociones del producto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('La promocion del producto no pudo ser eliminado, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
