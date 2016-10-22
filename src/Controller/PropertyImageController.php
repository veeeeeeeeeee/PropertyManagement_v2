<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropertyImage Controller
 *
 * @property \App\Model\Table\PropertyImageTable $PropertyImage
 */
class PropertyImageController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Imgs', 'Property']
        ];
        $propertyImage = $this->paginate($this->PropertyImage);

        $this->set(compact('propertyImage'));
        $this->set('_serialize', ['propertyImage']);
    }

    /**
     * View method
     *
     * @param string|null $id Property Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propertyImage = $this->PropertyImage->get($id, [
            'contain' => ['Imgs', 'Property']
        ]);

        $this->set('propertyImage', $propertyImage);
        $this->set('_serialize', ['propertyImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propertyImage = $this->PropertyImage->newEntity();
        if ($this->request->is('post')) {
            $propertyImage = $this->PropertyImage->patchEntity($propertyImage, $this->request->data);
            if ($this->PropertyImage->save($propertyImage)) {
                $this->Flash->success(__('The property image has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property image could not be saved. Please, try again.'));
            }
        }
        $imgs = $this->PropertyImage->Imgs->find('list', ['limit' => 200]);
        $property = $this->PropertyImage->Property->find('list', ['limit' => 200]);
        $this->set(compact('propertyImage', 'imgs', 'property'));
        $this->set('_serialize', ['propertyImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Property Image id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propertyImage = $this->PropertyImage->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propertyImage = $this->PropertyImage->patchEntity($propertyImage, $this->request->data);
            if ($this->PropertyImage->save($propertyImage)) {
                $this->Flash->success(__('The property image has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property image could not be saved. Please, try again.'));
            }
        }
        $imgs = $this->PropertyImage->Imgs->find('list', ['limit' => 200]);
        $property = $this->PropertyImage->Property->find('list', ['limit' => 200]);
        $this->set(compact('propertyImage', 'imgs', 'property'));
        $this->set('_serialize', ['propertyImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Property Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propertyImage = $this->PropertyImage->get($id);
        if ($this->PropertyImage->delete($propertyImage)) {
            $this->Flash->success(__('The property image has been deleted.'));
        } else {
            $this->Flash->error(__('The property image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
