<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Marathon Controller
 *
 * @property \App\Model\Table\MarathonTable $Marathon
 */
class MarathonController extends AppController
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
        $marathon = $this->paginate($this->Marathon);

        $this->set(compact('marathon'));
        $this->set('_serialize', ['marathon']);
    }

    /**
     * View method
     *
     * @param string|null $id Marathon id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marathon = $this->Marathon->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('marathon', $marathon);
        $this->set('_serialize', ['marathon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marathon = $this->Marathon->newEntity();
        if ($this->request->is('post')) {
            $marathon = $this->Marathon->patchEntity($marathon, $this->request->data);
            if ($this->Marathon->save($marathon)) {
                $this->Flash->success(__('The marathon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marathon could not be saved. Please, try again.'));
            }
        }
        $events = $this->Marathon->Events->find('list', ['limit' => 200]);
        $this->set(compact('marathon', 'events'));
        $this->set('_serialize', ['marathon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Marathon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marathon = $this->Marathon->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marathon = $this->Marathon->patchEntity($marathon, $this->request->data);
            if ($this->Marathon->save($marathon)) {
                $this->Flash->success(__('The marathon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marathon could not be saved. Please, try again.'));
            }
        }
        $events = $this->Marathon->Events->find('list', ['limit' => 200]);
        $this->set(compact('marathon', 'events'));
        $this->set('_serialize', ['marathon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Marathon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marathon = $this->Marathon->get($id);
        if ($this->Marathon->delete($marathon)) {
            $this->Flash->success(__('The marathon has been deleted.'));
        } else {
            $this->Flash->error(__('The marathon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
