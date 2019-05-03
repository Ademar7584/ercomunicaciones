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

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $actividades = $this->paginate($this->Actividades, array('limit' => 10));

        $this->set(compact('actividades'));
        $this->set('_serialize', ['actividades']);
    }

    /**
     * View method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
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

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
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

    /**
     * Edit method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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

    /**
     * Delete method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
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
