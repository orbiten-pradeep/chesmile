<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Eventssubcategories Controller
 *
 * @property \App\Model\Table\EventssubcategoriesTable $Eventssubcategories
 */
class EventssubcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'SubCategories']
        ];
        $eventssubcategories = $this->paginate($this->Eventssubcategories);

        $this->set(compact('eventssubcategories'));
        $this->set('_serialize', ['eventssubcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Eventssubcategory id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventssubcategory = $this->Eventssubcategories->get($id, [
            'contain' => ['Events', 'SubCategories']
        ]);

        $this->set('eventssubcategory', $eventssubcategory);
        $this->set('_serialize', ['eventssubcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventssubcategory = $this->Eventssubcategories->newEntity();
        if ($this->request->is('post')) {
            $eventssubcategory = $this->Eventssubcategories->patchEntity($eventssubcategory, $this->request->data);
            if ($this->Eventssubcategories->save($eventssubcategory)) {
                $this->Flash->success(__('The eventssubcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The eventssubcategory could not be saved. Please, try again.'));
            }
        }
        $events = $this->Eventssubcategories->Events->find('list', ['limit' => 200]);
        $subCategories = $this->Eventssubcategories->SubCategories->find('list', ['limit' => 200]);
        $this->set(compact('eventssubcategory', 'events', 'subCategories'));
        $this->set('_serialize', ['eventssubcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Eventssubcategory id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventssubcategory = $this->Eventssubcategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventssubcategory = $this->Eventssubcategories->patchEntity($eventssubcategory, $this->request->data);
            if ($this->Eventssubcategories->save($eventssubcategory)) {
                $this->Flash->success(__('The eventssubcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The eventssubcategory could not be saved. Please, try again.'));
            }
        }
        $events = $this->Eventssubcategories->Events->find('list', ['limit' => 200]);
        $subCategories = $this->Eventssubcategories->SubCategories->find('list', ['limit' => 200]);
        $this->set(compact('eventssubcategory', 'events', 'subCategories'));
        $this->set('_serialize', ['eventssubcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Eventssubcategory id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventssubcategory = $this->Eventssubcategories->get($id);
        if ($this->Eventssubcategories->delete($eventssubcategory)) {
            $this->Flash->success(__('The eventssubcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The eventssubcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
