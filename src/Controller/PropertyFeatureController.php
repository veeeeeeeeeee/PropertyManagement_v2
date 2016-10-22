<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropertyFeature Controller
 *
 * @property \App\Model\Table\PropertyFeatureTable $PropertyFeature
 */
class PropertyFeatureController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Property', 'Feature']
        ];
        $propertyFeature = $this->paginate($this->PropertyFeature);

        $this->set(compact('propertyFeature'));
        $this->set('_serialize', ['propertyFeature']);
    }

    /**
     * View method
     *
     * @param string|null $id Property Feature id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propertyFeature = $this->PropertyFeature->get($id, [
            'contain' => ['Property', 'Feature']
        ]);

        $this->set('propertyFeature', $propertyFeature);
        $this->set('_serialize', ['propertyFeature']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propertyFeature = $this->PropertyFeature->newEntity();
        if ($this->request->is('post')) {
            $propertyFeature = $this->PropertyFeature->patchEntity($propertyFeature, $this->request->data);
            if ($this->PropertyFeature->save($propertyFeature)) {
                $this->Flash->success(__('The property feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property feature could not be saved. Please, try again.'));
            }
        }
        $property = $this->PropertyFeature->Property->find('list', ['limit' => 200]);
        $feature = $this->PropertyFeature->Feature->find('list', ['limit' => 200]);
        $this->set(compact('propertyFeature', 'property', 'feature'));
        $this->set('_serialize', ['propertyFeature']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Property Feature id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propertyFeature = $this->PropertyFeature->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propertyFeature = $this->PropertyFeature->patchEntity($propertyFeature, $this->request->data);
            if ($this->PropertyFeature->save($propertyFeature)) {
                $this->Flash->success(__('The property feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property feature could not be saved. Please, try again.'));
            }
        }
        $property = $this->PropertyFeature->Property->find('list', ['limit' => 200]);
        $feature = $this->PropertyFeature->Feature->find('list', ['limit' => 200]);
        $this->set(compact('propertyFeature', 'property', 'feature'));
        $this->set('_serialize', ['propertyFeature']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Property Feature id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propertyFeature = $this->PropertyFeature->get($id);
        if ($this->PropertyFeature->delete($propertyFeature)) {
            $this->Flash->success(__('The property feature has been deleted.'));
        } else {
            $this->Flash->error(__('The property feature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
