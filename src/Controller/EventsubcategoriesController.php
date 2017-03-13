<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Eventsubcategories Controller
 *
 * @property \App\Model\Table\EventsubcategoriesTable $Eventsubcategories
 */
class EventsubcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $eventsubcategories = $this->paginate($this->Eventsubcategories);

        $this->set(compact('eventsubcategories'));
        $this->set('_serialize', ['eventsubcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Eventsubcategory id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventsubcategory = $this->Eventsubcategories->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('eventsubcategory', $eventsubcategory);
        $this->set('_serialize', ['eventsubcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventsubcategory = $this->Eventsubcategories->newEntity();
        if ($this->request->is('post')) {
            $eventsubcategory = $this->Eventsubcategories->patchEntity($eventsubcategory, $this->request->data);
            if ($this->Eventsubcategories->save($eventsubcategory)) {
                $this->Flash->success(__('The eventsubcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The eventsubcategory could not be saved. Please, try again.'));
            }
        }
        $events = $this->Eventsubcategories->Events->find('list', ['limit' => 200]);
        $this->set(compact('eventsubcategory', 'events'));
        $this->set('_serialize', ['eventsubcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Eventsubcategory id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventsubcategory = $this->Eventsubcategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventsubcategory = $this->Eventsubcategories->patchEntity($eventsubcategory, $this->request->data);
            if ($this->Eventsubcategories->save($eventsubcategory)) {
                $this->Flash->success(__('The eventsubcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The eventsubcategory could not be saved. Please, try again.'));
            }
        }
        $events = $this->Eventsubcategories->Events->find('list', ['limit' => 200]);
        $this->set(compact('eventsubcategory', 'events'));
        $this->set('_serialize', ['eventsubcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Eventsubcategory id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventsubcategory = $this->Eventsubcategories->get($id);
        if ($this->Eventsubcategories->delete($eventsubcategory)) {
            $this->Flash->success(__('The eventsubcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The eventsubcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
