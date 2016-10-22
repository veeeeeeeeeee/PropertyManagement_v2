<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Type Controller
 *
 * @property \App\Model\Table\TypeTable $Type
 */
class TypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Types']
        ];
        $type = $this->paginate($this->Type);

        $this->set(compact('type'));
        $this->set('_serialize', ['type']);
    }

    /**
     * View method
     *
     * @param string|null $id Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $type = $this->Type->get($id, [
            'contain' => ['Types']
        ]);

        $this->set('type', $type);
        $this->set('_serialize', ['type']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $type = $this->Type->newEntity();
        if ($this->request->is('post')) {
            $type = $this->Type->patchEntity($type, $this->request->data);
            if ($this->Type->save($type)) {
                $this->Flash->success(__('The type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type could not be saved. Please, try again.'));
            }
        }
        $types = $this->Type->Types->find('list', ['limit' => 200]);
        $this->set(compact('type', 'types'));
        $this->set('_serialize', ['type']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $type = $this->Type->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $type = $this->Type->patchEntity($type, $this->request->data);
            if ($this->Type->save($type)) {
                $this->Flash->success(__('The type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type could not be saved. Please, try again.'));
            }
        }
        $types = $this->Type->Types->find('list', ['limit' => 200]);
        $this->set(compact('type', 'types'));
        $this->set('_serialize', ['type']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $type = $this->Type->get($id);
        if ($this->Type->delete($type)) {
            $this->Flash->success(__('The type has been deleted.'));
        } else {
            $this->Flash->error(__('The type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
