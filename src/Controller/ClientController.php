<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Client Controller
 *
 * @property \App\Model\Table\ClientTable $Client
 */
class ClientController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $client = $this->paginate($this->Client);

        $this->set(compact('client'));
        $this->set('_serialize', ['client']);
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Client->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('client', $client);
        $this->set('_serialize', ['client']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Client->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Client->patchEntity($client, $this->request->data);
            if ($this->Client->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Client->Clients->find('list', ['limit' => 200]);
        $this->set(compact('client', 'clients'));
        $this->set('_serialize', ['client']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Client->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Client->patchEntity($client, $this->request->data);
            if ($this->Client->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Client->Clients->find('list', ['limit' => 200]);
        $this->set(compact('client', 'clients'));
        $this->set('_serialize', ['client']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Client->get($id);
        if ($this->Client->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
