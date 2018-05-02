<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Marathonbooking Controller
 *
 * @property \App\Model\Table\MarathonbookingTable $Marathonbooking
 */
class MarathonbookingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('admin');
        $this->paginate = [
            'contain' => ['Tickets']
        ];
        $marathonbooking = $this->paginate($this->Marathonbooking, array('conditions' => array('Tickets.status IS NOT NULL')));
        //debug($marathonbooking); exit(0);
        $this->set(compact('marathonbooking'));
        $this->set('_serialize', ['marathonbooking']);
    }

    /**
     * View method
     *
     * @param string|null $id Marathonbooking id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin');
        $marathonbooking = $this->Marathonbooking->get($id, [
            'contain' => ['Tickets']
        ]);
        //debug($marathonbooking); exit(0);
        $this->set('marathonbooking', $marathonbooking);
        $this->set('_serialize', ['marathonbooking']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marathonbooking = $this->Marathonbooking->newEntity();
        if ($this->request->is('post')) {
            $marathonbooking = $this->Marathonbooking->patchEntity($marathonbooking, $this->request->data);
            if ($this->Marathonbooking->save($marathonbooking)) {
                $this->Flash->success(__('The marathonbooking has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marathonbooking could not be saved. Please, try again.'));
            }
        }
        $tickets = $this->Marathonbooking->Tickets->find('list', ['limit' => 200]);
        $this->set(compact('marathonbooking', 'tickets'));
        $this->set('_serialize', ['marathonbooking']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Marathonbooking id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marathonbooking = $this->Marathonbooking->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marathonbooking = $this->Marathonbooking->patchEntity($marathonbooking, $this->request->data);
            if ($this->Marathonbooking->save($marathonbooking)) {
                $this->Flash->success(__('The marathonbooking has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marathonbooking could not be saved. Please, try again.'));
            }
        }
        $tickets = $this->Marathonbooking->Tickets->find('list', ['limit' => 200]);
        $this->set(compact('marathonbooking', 'tickets'));
        $this->set('_serialize', ['marathonbooking']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Marathonbooking id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marathonbooking = $this->Marathonbooking->get($id);
        if ($this->Marathonbooking->delete($marathonbooking)) {
            $this->Flash->success(__('The marathonbooking has been deleted.'));
        } else {
            $this->Flash->error(__('The marathonbooking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
