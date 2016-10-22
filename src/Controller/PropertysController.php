<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Propertys Controller
 *
 * @property \App\Model\Table\PropertysTable $Propertys
 */
class PropertysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Properties']
        ];
        $propertys = $this->paginate($this->Propertys);

        $this->set(compact('propertys'));
        $this->set('_serialize', ['propertys']);
    }

    /**
     * View method
     *
     * @param string|null $id Property id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $property = $this->Propertys->get($id, [
            'contain' => ['Properties']
        ]);

        $this->set('property', $property);
        $this->set('_serialize', ['property']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $property = $this->Propertys->newEntity();
        if ($this->request->is('post')) {
            $property = $this->Propertys->patchEntity($property, $this->request->data);
            if ($this->Propertys->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property could not be saved. Please, try again.'));
            }
        }
        $properties = $this->Propertys->Properties->find('list', ['limit' => 200]);
        $this->set(compact('property', 'properties'));
        $this->set('_serialize', ['property']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Property id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $property = $this->Propertys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $property = $this->Propertys->patchEntity($property, $this->request->data);
            if ($this->Propertys->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property could not be saved. Please, try again.'));
            }
        }
        $properties = $this->Propertys->Properties->find('list', ['limit' => 200]);
        $this->set(compact('property', 'properties'));
        $this->set('_serialize', ['property']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Property id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $property = $this->Propertys->get($id);
        if ($this->Propertys->delete($property)) {
            $this->Flash->success(__('The property has been deleted.'));
        } else {
            $this->Flash->error(__('The property could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
