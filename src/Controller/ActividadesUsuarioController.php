<?php
namespace App\Controller;

use App\Controller\AppController;

class ActividadesUsuarioController extends AppController
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
            'contain' => ['Users', 'Actividades']
        ];
        $actividadesUsuario = $this->paginate($this->ActividadesUsuario);

        $this->set(compact('actividadesUsuario'));
        $this->set('_serialize', ['actividadesUsuario']);
    }

    public function view($id = null)
    {
        $actividadesUsuario = $this->ActividadesUsuario->get($id, [
            'contain' => ['Users', 'Actividades']
        ]);

        $this->set('actividadesUsuario', $actividadesUsuario);
        $this->set('_serialize', ['actividadesUsuario']);
    }

    public function add()
    {
        $actividadesUsuario = $this->ActividadesUsuario->newEntity();
        if ($this->request->is('post')) {
            $actividadesUsuario = $this->ActividadesUsuario->patchEntity($actividadesUsuario, $this->request->getData());
            if ($this->ActividadesUsuario->save($actividadesUsuario)) {
                $this->Flash->success(__('La actividad del usuario ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La actividad ser usuario no pudo ser guardado, intente de nuevo.'));
        }
        $users = $this->ActividadesUsuario->Users->find('list', ['keyField' => 'id', 'valueField' => 'names']);
        $actividades = $this->ActividadesUsuario->Actividades->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('actividadesUsuario', 'users', 'actividades'));
        $this->set('_serialize', ['actividadesUsuario']);
    }

    public function edit($id = null)
    {
        $actividadesUsuario = $this->ActividadesUsuario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividadesUsuario = $this->ActividadesUsuario->patchEntity($actividadesUsuario, $this->request->getData());
            if ($this->ActividadesUsuario->save($actividadesUsuario)) {
                $this->Flash->success(__('La actividad del usuario ha sido editada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La actividad del usuario no pudo ser editada, intente de nuevo.'));
        }
        $users = $this->ActividadesUsuario->Users->find('list', ['keyField' => 'id', 'valueField' => 'names']);
        $actividades = $this->ActividadesUsuario->Actividades->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('actividadesUsuario', 'users', 'actividades'));
        $this->set('_serialize', ['actividadesUsuario']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actividadesUsuario = $this->ActividadesUsuario->get($id);
        if ($this->ActividadesUsuario->delete($actividadesUsuario)) {
            $this->Flash->success(__('La actividad del usuario ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La actividad usuario no pudo ser eliminada. intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
