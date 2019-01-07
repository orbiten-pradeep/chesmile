<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookingonline Controller
 *
 * @property \App\Model\Table\BookingonlineTable $Bookingonline
 */
class BookingonlineController extends AppController
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
        $bookingonline = $this->paginate($this->Bookingonline);

        $this->set(compact('bookingonline'));
        $this->set('_serialize', ['bookingonline']);
    }

    /**
     * View method
     *
     * @param string|null $id Bookingonline id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookingonline = $this->Bookingonline->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('bookingonline', $bookingonline);
        $this->set('_serialize', ['bookingonline']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookingonline = $this->Bookingonline->newEntity();
        if ($this->request->is('post')) {
            $bookingonline = $this->Bookingonline->patchEntity($bookingonline, $this->request->data);
            if ($this->Bookingonline->save($bookingonline)) {
                $this->Flash->success(__('The bookingonline has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bookingonline could not be saved. Please, try again.'));
            }
        }
        $events = $this->Bookingonline->Events->find('list', ['limit' => 200]);
        $this->set(compact('bookingonline', 'events'));
        $this->set('_serialize', ['bookingonline']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bookingonline id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookingonline = $this->Bookingonline->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookingonline = $this->Bookingonline->patchEntity($bookingonline, $this->request->data);
            if ($this->Bookingonline->save($bookingonline)) {
                $this->Flash->success(__('The bookingonline has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bookingonline could not be saved. Please, try again.'));
            }
        }
        $events = $this->Bookingonline->Events->find('list', ['limit' => 200]);
        $this->set(compact('bookingonline', 'events'));
        $this->set('_serialize', ['bookingonline']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bookingonline id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookingonline = $this->Bookingonline->get($id);
        if ($this->Bookingonline->delete($bookingonline)) {
            $this->Flash->success(__('The bookingonline has been deleted.'));
        } else {
            $this->Flash->error(__('The bookingonline could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
