<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actividades Controller
 *
 *
 * @method \App\Model\Entity\Actividade[] paginate($object = null, array $settings = [])
 */
class ActividadesController extends AppController
{

    public function isAuthorized($user) {
        if(isset($user['rol']) and $user['rol'] === 'user' or $user['rol'] === 'cliente') {
            if(in_array($this->request->action, ['index', 'add', 'view'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }
    public function index()
    {
        $actividades = $this->paginate($this->Actividades, array('limit' => 10));

        $this->set(compact('actividades'));
        $this->set('_serialize', ['actividades']);
    }

    public function view($id = null)
    {
        $actividade = $this->Actividades->get($id, [
            'contain' => []
        ]);

        $status = [
            true => 'Activo',
            false => 'Inactivo',
        ];

        $this->set('actividade', $actividade);
        $this->set('status', $status);
        $this->set('_serialize', ['actividade']);
    }

    public function add()
    {
        $actividade = $this->Actividades->newEntity();
        if ($this->request->is('post')) {
            $actividade = $this->Actividades->patchEntity($actividade, $this->request->getData());
            if ($this->Actividades->save($actividade)) {
                $this->Flash->success(__('The actividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actividade could not be saved. Please, try again.'));
        }
        $this->set(compact('actividade'));
        $this->set('_serialize', ['actividade']);
    }

    public function edit($id = null)
    {
        $actividade = $this->Actividades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividade = $this->Actividades->patchEntity($actividade, $this->request->getData());
            if ($this->Actividades->save($actividade)) {
                $this->Flash->success(__('The actividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actividade could not be saved. Please, try again.'));
        }
        $this->set(compact('actividade'));
        $this->set('_serialize', ['actividade']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actividade = $this->Actividades->get($id);
        if ($this->Actividades->delete($actividade)) {
            $this->Flash->success(__('The actividade has been deleted.'));
        } else {
            $this->Flash->error(__('The actividade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
