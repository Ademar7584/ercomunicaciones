<?php
namespace App\Controller;

use App\Controller\AppController;


class PromocionesController extends AppController
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
        $promociones = $this->paginate($this->Promociones);

        $this->set(compact('promociones'));
        $this->set('_serialize', ['promociones']);
    }

    /**
     * View method
     *
     * @param string|null $id Promocione id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $promocione = $this->Promociones->get($id, [
            'contain' => []
        ]);

        $this->set('promocione', $promocione);
        $this->set('_serialize', ['promocione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $promocione = $this->Promociones->newEntity();
        if ($this->request->is('post')) {
            $promocione = $this->Promociones->patchEntity($promocione, $this->request->getData());
            if ($this->Promociones->save($promocione)) {
                $this->Flash->success(__('The promocione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The promocione could not be saved. Please, try again.'));
        }
        $this->set(compact('promocione'));
        $this->set('_serialize', ['promocione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Promocione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $promocione = $this->Promociones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $promocione = $this->Promociones->patchEntity($promocione, $this->request->getData());
            if ($this->Promociones->save($promocione)) {
                $this->Flash->success(__('The promocione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The promocione could not be saved. Please, try again.'));
        }
        $this->set(compact('promocione'));
        $this->set('_serialize', ['promocione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Promocione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $promocione = $this->Promociones->get($id);
        if ($this->Promociones->delete($promocione)) {
            $this->Flash->success(__('The promocione has been deleted.'));
        } else {
            $this->Flash->error(__('The promocione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
