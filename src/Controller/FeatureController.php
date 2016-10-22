<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Feature Controller
 *
 * @property \App\Model\Table\FeatureTable $Feature
 */
class FeatureController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Feats']
        ];
        $feature = $this->paginate($this->Feature);

        $this->set(compact('feature'));
        $this->set('_serialize', ['feature']);
    }

    /**
     * View method
     *
     * @param string|null $id Feature id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feature = $this->Feature->get($id, [
            'contain' => ['Feats', 'Property']
        ]);

        $this->set('feature', $feature);
        $this->set('_serialize', ['feature']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feature = $this->Feature->newEntity();
        if ($this->request->is('post')) {
            $feature = $this->Feature->patchEntity($feature, $this->request->data);
            if ($this->Feature->save($feature)) {
                $this->Flash->success(__('The feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feature could not be saved. Please, try again.'));
            }
        }
        $feats = $this->Feature->Feats->find('list', ['limit' => 200]);
        $property = $this->Feature->Property->find('list', ['limit' => 200]);
        $this->set(compact('feature', 'feats', 'property'));
        $this->set('_serialize', ['feature']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Feature id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feature = $this->Feature->get($id, [
            'contain' => ['Property']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feature = $this->Feature->patchEntity($feature, $this->request->data);
            if ($this->Feature->save($feature)) {
                $this->Flash->success(__('The feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feature could not be saved. Please, try again.'));
            }
        }
        $feats = $this->Feature->Feats->find('list', ['limit' => 200]);
        $property = $this->Feature->Property->find('list', ['limit' => 200]);
        $this->set(compact('feature', 'feats', 'property'));
        $this->set('_serialize', ['feature']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feature id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feature = $this->Feature->get($id);
        if ($this->Feature->delete($feature)) {
            $this->Flash->success(__('The feature has been deleted.'));
        } else {
            $this->Flash->error(__('The feature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
