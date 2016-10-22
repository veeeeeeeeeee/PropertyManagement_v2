<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropertyImages Controller
 *
 * @property \App\Model\Table\PropertyImagesTable $PropertyImages
 */
class PropertyImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentPropertyImages', 'Properties']
        ];
        $propertyImages = $this->paginate($this->PropertyImages);

        $this->set(compact('propertyImages'));
        $this->set('_serialize', ['propertyImages']);
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
        $propertyImage = $this->PropertyImages->get($id, [
            'contain' => ['ParentPropertyImages', 'Properties']
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
        $propertyImage = $this->PropertyImages->newEntity();
        if ($this->request->is('post')) {
            $propertyImage = $this->PropertyImages->patchEntity($propertyImage, $this->request->data);
            if ($this->PropertyImages->save($propertyImage)) {
                $this->Flash->success(__('The property image has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property image could not be saved. Please, try again.'));
            }
        }
        $parentPropertyImages = $this->PropertyImages->ParentPropertyImages->find('list', ['limit' => 200]);
        $properties = $this->PropertyImages->Properties->find('list', ['limit' => 200]);
        $this->set(compact('propertyImage', 'parentPropertyImages', 'properties'));
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
        $propertyImage = $this->PropertyImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propertyImage = $this->PropertyImages->patchEntity($propertyImage, $this->request->data);
            if ($this->PropertyImages->save($propertyImage)) {
                $this->Flash->success(__('The property image has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The property image could not be saved. Please, try again.'));
            }
        }
        $parentPropertyImages = $this->PropertyImages->ParentPropertyImages->find('list', ['limit' => 200]);
        $properties = $this->PropertyImages->Properties->find('list', ['limit' => 200]);
        $this->set(compact('propertyImage', 'parentPropertyImages', 'properties'));
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
        $propertyImage = $this->PropertyImages->get($id);
        if ($this->PropertyImages->delete($propertyImage)) {
            $this->Flash->success(__('The property image has been deleted.'));
        } else {
            $this->Flash->error(__('The property image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
