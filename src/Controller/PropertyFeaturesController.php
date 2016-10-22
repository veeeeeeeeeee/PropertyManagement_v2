<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropertyFeatures Controller
 *
 * @property \App\Model\Table\PropertyFeaturesTable $PropertyFeatures
 */
class PropertyFeaturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Propertys', 'Features']
        ];
        $propertyFeatures = $this->paginate($this->PropertyFeatures);

        $this->set(compact('propertyFeatures'));
        $this->set('_serialize', ['propertyFeatures']);
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
        $propertyFeature = $this->PropertyFeatures->get($id, [
            'contain' => ['Propertys', 'Features']
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
        $propertyFeature = $this->PropertyFeatures->newEntity();
        if ($this->request->is('post')) {
            $propertyFeature = $this->PropertyFeatures->patchEntity($propertyFeature, $this->request->data);
            if ($this->PropertyFeatures->save($propertyFeature)) {
                $this->Flash->success(__('The property feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property feature could not be saved. Please, try again.'));
            }
        }
        $propertys = $this->PropertyFeatures->Propertys->find('list', ['limit' => 200]);
        $features = $this->PropertyFeatures->Features->find('list', ['limit' => 200]);
        $this->set(compact('propertyFeature', 'propertys', 'features'));
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
        $propertyFeature = $this->PropertyFeatures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propertyFeature = $this->PropertyFeatures->patchEntity($propertyFeature, $this->request->data);
            if ($this->PropertyFeatures->save($propertyFeature)) {
                $this->Flash->success(__('The property feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property feature could not be saved. Please, try again.'));
            }
        }
        $propertys = $this->PropertyFeatures->Propertys->find('list', ['limit' => 200]);
        $features = $this->PropertyFeatures->Features->find('list', ['limit' => 200]);
        $this->set(compact('propertyFeature', 'propertys', 'features'));
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
        $propertyFeature = $this->PropertyFeatures->get($id);
        if ($this->PropertyFeatures->delete($propertyFeature)) {
            $this->Flash->success(__('The property feature has been deleted.'));
        } else {
            $this->Flash->error(__('The property feature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
