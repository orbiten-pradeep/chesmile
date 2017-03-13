<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Galaries Controller
 *
 * @property \App\Model\Table\GalariesTable $Galaries
 */
class GalariesController extends AppController
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
        $galaries = $this->paginate($this->Galaries);

        $this->set(compact('galaries'));
        $this->set('_serialize', ['galaries']);
    }

    /**
     * View method
     *
     * @param string|null $id Galary id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galary = $this->Galaries->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('galary', $galary);
        $this->set('_serialize', ['galary']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galary = $this->Galaries->newEntity();
        if ($this->request->is('post')) {
            $galary = $this->Galaries->patchEntity($galary, $this->request->data);
            if ($this->Galaries->save($galary)) {
                $this->Flash->success(__('The galary has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The galary could not be saved. Please, try again.'));
            }
        }
        $events = $this->Galaries->Events->find('list', ['limit' => 200]);
        $this->set(compact('galary', 'events'));
        $this->set('_serialize', ['galary']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Galary id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galary = $this->Galaries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galary = $this->Galaries->patchEntity($galary, $this->request->data);
            if ($this->Galaries->save($galary)) {
                $this->Flash->success(__('The galary has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The galary could not be saved. Please, try again.'));
            }
        }
        $events = $this->Galaries->Events->find('list', ['limit' => 200]);
        $this->set(compact('galary', 'events'));
        $this->set('_serialize', ['galary']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Galary id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galary = $this->Galaries->get($id);
        if ($this->Galaries->delete($galary)) {
            $this->Flash->success(__('The galary has been deleted.'));
        } else {
            $this->Flash->error(__('The galary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
