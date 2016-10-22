<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Property Controller
 *
 * @property \App\Model\Table\PropertyTable $Property
 */
class PropertyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Props']
        ];
        $property = $this->paginate($this->Property);

        $this->set(compact('property'));
        $this->set('_serialize', ['property']);
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
        $property = $this->Property->get($id, [
            'contain' => ['Props', 'Feature']
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
        $property = $this->Property->newEntity();
        if ($this->request->is('post')) {
            $property = $this->Property->patchEntity($property, $this->request->data);
            if ($this->Property->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property could not be saved. Please, try again.'));
            }
        }
        $props = $this->Property->Props->find('list', ['limit' => 200]);
        $feature = $this->Property->Feature->find('list', ['limit' => 200]);
        $this->set(compact('property', 'props', 'feature'));
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
        $property = $this->Property->get($id, [
            'contain' => ['Feature']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $property = $this->Property->patchEntity($property, $this->request->data);
            if ($this->Property->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property could not be saved. Please, try again.'));
            }
        }
        $props = $this->Property->Props->find('list', ['limit' => 200]);
        $feature = $this->Property->Feature->find('list', ['limit' => 200]);
        $this->set(compact('property', 'props', 'feature'));
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
        $property = $this->Property->get($id);
        if ($this->Property->delete($property)) {
            $this->Flash->success(__('The property has been deleted.'));
        } else {
            $this->Flash->error(__('The property could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
