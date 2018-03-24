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
 * Contact Controller
 *
 * @property \App\Model\Table\ContactTable $Contact
 */
class ContactController extends AppController
{

    public function beforeFilter(Event $event) 
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('admin');
        $contact = $this->paginate($this->Contact);
        $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contact = $this->Contact->get($id, [
            'contain' => []
        ]);

        $this->set('contact', $contact);
        $this->set('_serialize', ['contact']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contact = $this->Contact->newEntity();
        if ($this->request->is('post')) {   
            $contact = $this->Contact->patchEntity($contact, $this->request->data);
            if ($this->Contact->save($contact)) {

                $email = new Email();
                $email->transport('gmail');
                $email->emailFormat('html');
                $email->template('default');
                $email->from('admin@chennaismile.com');
                $email->to('admin@chennaismile.com');
                //$email->cc('admin@chennaismile.com');
                $subject = "Contact User";
                $email->subject($subject);
                //$activationUrl = Router::url(['controller' => 'Marathon', 'action' => 'details/' . $activation_key, '_full' => true ]);
                // Always try to write clean code, so that you can read it :) :
                $message = "Dear <span style='color:#666666'>Admin</span>,<br/><br/>";
                $message .= "<br/> User wants to contact you. Please find the attached user information as below: <br/>";
                $message .= "<br/><b>Name :</b>" .$this->request->data['Name']. "<br/>";
                $message .= "<br/><b>Email :</b>" .$this->request->data['email']. "<br/>";
                $message .= "<br/><b>Comments :</b>" .$this->request->data['comments']. "<br/>";
                $message .= "<br/>Please respond for this immediately.<br/>";
                $message .= "<br/>Thanks, <br/>Support Team";
                $email->send($message);

                $this->Flash->success(__('Thank you for contacting us. We will get to you soon.'));
                return $this->redirect(['controller' => 'Events', 'action' => 'index']);
                //return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contact->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contact->patchEntity($contact, $this->request->data);
            if ($this->Contact->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contact->get($id);
        if ($this->Contact->delete($contact)) {
            $this->Flash->success(__('The contact has been deleted.'));
        } else {
            $this->Flash->error(__('The contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
