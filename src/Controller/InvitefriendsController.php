<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Invitefriends Controller
 *
 * @property \App\Model\Table\InvitefriendsTable $Invitefriends
 */
class InvitefriendsController extends AppController
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
        $invitefriends = $this->paginate($this->Invitefriends);

        $this->set(compact('invitefriends'));
        $this->set('_serialize', ['invitefriends']);
    }

    /**
     * View method
     *
     * @param string|null $id Invitefriend id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invitefriend = $this->Invitefriends->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('invitefriend', $invitefriend);
        $this->set('_serialize', ['invitefriend']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invitefriend = $this->Invitefriends->newEntity();
        if ($this->request->is('post')) {
            $invitefriend = $this->Invitefriends->patchEntity($invitefriend, $this->request->data);
            if ($this->Invitefriends->save($invitefriend)) {
                $this->Flash->success(__('The invitefriend has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The invitefriend could not be saved. Please, try again.'));
            }
        }
        $events = $this->Invitefriends->Events->find('list', ['limit' => 200]);
        $this->set(compact('invitefriend', 'events'));
        $this->set('_serialize', ['invitefriend']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Invitefriend id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invitefriend = $this->Invitefriends->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invitefriend = $this->Invitefriends->patchEntity($invitefriend, $this->request->data);
            if ($this->Invitefriends->save($invitefriend)) {
                $this->Flash->success(__('The invitefriend has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The invitefriend could not be saved. Please, try again.'));
            }
        }
        $events = $this->Invitefriends->Events->find('list', ['limit' => 200]);
        $this->set(compact('invitefriend', 'events'));
        $this->set('_serialize', ['invitefriend']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Invitefriend id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invitefriend = $this->Invitefriends->get($id);
        if ($this->Invitefriends->delete($invitefriend)) {
            $this->Flash->success(__('The invitefriend has been deleted.'));
        } else {
            $this->Flash->error(__('The invitefriend could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
