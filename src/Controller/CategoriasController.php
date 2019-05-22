<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriasController extends AppController
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
        $categorias = $this->paginate($this->Categorias, array('limit' => 10));

        $this->set(compact('categorias'));
        $this->set('_serialize', ['categorias']);
    }

    public function view($id = null)
    {
        $categoria = $this->Categorias->get($id, [
            'contain' => []
        ]);

        $this->set('categoria', $categoria);
        $this->set('_serialize', ['categoria']);
    }

    public function add()
    {
        $categoria = $this->Categorias->newEntity();
        if ($this->request->is('post')) {
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->getData());
            if ($this->Categorias->save($categoria)) {
                $this->Flash->success(__('La categoria ha sido guardado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La categoria no pudo ser guardado, intente de nuevo.'));
        }
        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    public function edit($id = null)
    {
        $categoria = $this->Categorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->getData());
            if ($this->Categorias->save($categoria)) {
                $this->Flash->success(__('La categoria ha sido editada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La categoria no pudo ser editada. Please, try again.'));
        }
        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoria = $this->Categorias->get($id);
        if ($this->Categorias->delete($categoria)) {
            $this->Flash->success(__('La categoria ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La categoria no pudo ser eliminada, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
