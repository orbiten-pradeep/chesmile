<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\Utility\Text;
use Cake\Mailer\Email;
use Cake\Routing\Router;
use Cake\Datasource\ConnectionManager;
use Cake\Utility\Security;
use Cake\Event\Event;

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
    public function add($id = null)
    {
        $marathon = $this->Marathon->newEntity();
        $activation_key = Text::uuid();
        if ($this->request->is('post')) {

            if(!empty($this->request->data['date']))
            {
                $this->request->data['date'] = new Time($this->request->data['date']);
            }
            $event = "";
            $this->loadModel('Events');
            $this->request->data['activation_key'] = $activation_key;
            if(isset($id))
            {
                $this->request->data['events_id'] = $id;
                $event = $this->Events->get($id, [
                    'contain' => ['Users', 'Categories']
                ]);
            }
            //debug($event); exit(0);
            $marathon = $this->Marathon->patchEntity($marathon, $this->request->data);
            if ($this->Marathon->save($marathon)) {

                $email = new Email();
                $email->transport('gmail');
                $name = $event['user']['fullname'];
                $to = trim($event['user']['email']); 
                $email->emailFormat('html');
                $email->template('default');
                $email->from('admin@chennaismile.com');
                $email->to($to);
                $email->cc('admin@chennaismile.com');
                $subject = "New User registered for your event";
                $email->subject($subject);
                $activationUrl = Router::url(['controller' => 'Marathon', 'action' => 'details/' . $activation_key, '_full' => true ]);
                // Always try to write clean code, so that you can read it :) :
                $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
                $message .= "<br/>New User has been registered successfully for your event. Please find the attached user information as below: <br/>";
                $message .= "<br/><b>View the registered user information by clicking on the below url:</b> <br/>";
                $message .= "<a href='$activationUrl'>$activationUrl</a><br/><br/>";
                $message .= "<br/>Thanks, <br/>Support Team";
                $email->send($message);

                $this->Flash->success(__('The marathon has been saved.'));
                return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
                //return $this->redirect(['action' => 'index']);
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

    public function details($key = null)
    {
        $marathon = $this->Marathon->find('all',array('conditions'=>array('activation_key'=>$key)));
        $marathon = $marathon->first();
        //debug($marathon); exit(0);
        if(isset($marathon))
        {
            $id = $marathon['ID'];
            $marathon = $this->Marathon->get($id, [
                'contain' => ['Events']
            ]);
            $this->set('marathon', $marathon);
            $this->set('_serialize', ['marathon']);
        } else
        {
            return $this->redirect(['controller' => 'Events', 'action' => 'index']);
        }
    }

    public function usersinformation($id = null)
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $marathon = $this->paginate($this->Marathon);
        $this->paginate['conditions'] = array("Marathon.events_id" => $id);
        $this->set(compact('marathon'));
        $this->set('_serialize', ['marathon']);
    }
}
