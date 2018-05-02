<<<<<<< .mine
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

        /**
     * Reply method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function reply($ID = null)
    {
        $this->viewBuilder()->layout('admin');
         $contact = $this->Contact->get($ID, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contact->patchEntity($contact, $this->request->data);
            if ($this->Contact->save($contact)) {
                 if($this->Auth->user('group_id') != 1)
        {
            $u_id = $this->Auth->user('id');
$this->Contact->updateAll(['user_id' => $u_id], ['ID' => $ID]);
            $users_email = $contact['email'];
            //$users_email['email']
            if ($this->request->is(['patch', 'post', 'put']))
            {
        $email = new Email();
                    $email->transport('gmail');

                    // Always try to write clean code, so that you can read it :) :
                        $email->template('contactreplied','cs-email');
                        $name = $contact['Name'];
                        $comment = $contact['comments'];
                        $reply = $contact['reply'];
                        $email->emailFormat('html');
                        $email->from('admin@chennaismile.com');
                        $email->to($users_email);
                        $email->cc('admin@chennaismile.com');

                        // $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
                         $email->viewVars(['name' => $name, 'comment' => $comment, 'reply' => $reply]);
                         $subject = "Contact";
                        $email->subject($subject);
                        $email->send();
                    }
                   $this->Contact->updateAll(['status' => '1'], ['ID' => $ID]);
}
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);


        // $contact = $this->Contact->get($ID);
        // $this->request->session()->write('status', '1');
        // $this->request->session()->write('ID', $ID);

        // if($this->Auth->user('group_id') != 1)
        // {
        //     $users_email = $contact['email'];
        //     //$users_email['email']
        //     if ($this->request->is(['patch', 'post', 'put']))
        //     {
        //         //$event = $this->Events->patchEntity($event, $this->request->data['active']);
        //         if ($this->Contact->updateAll(['status' => $this->request->data['status']], ['ID' => $ID]))
        //         {
        //             //Send eamil to user
        //             $email = new Email();
        //             $email->transport('gmail');

        //             // Always try to write clean code, so that you can read it :) :
        //             if($this->request->data['status'] == '1')
        //             {
        //                 $email->template('eventactivated','cs-email');
        //                 $name = $contact['Name'];
        //                 $email->emailFormat('html');
        //                 $email->from('admin@chennaismile.com');
        //                 $email->to($users_email);
        //                 $email->cc('admin@chennaismile.com');
        //                 // $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
        //                 // $email->viewVars(['name' => $name, 'URL' => $activationUrl]);
        //                  $subject = "Contact";
        //                 $email->subject($subject);
        //                 $email->send();
        //             }
                    // else
                    // {
                    //     $email->template('default');
                    //     $name = $contact['Name'];
                    //     $email->emailFormat('html');
                    //     $email->from('admin@chennaismile.com');
                    //     $email->to($users_email);
                    //     $email->cc('admin@chennaismile.com');
                    //    // $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
                    //     //$email->viewVars(['name' => $name, 'URL' => $activationUrl]);
                    //     $subject = "Event De-Activated";
                    //     $message = "Dear <span style='color:#666666'>".$name."</span>,<br/><br/>";
                    //     $message .= "Event has been de-activated by Admin.<br/>";
                    //     $message .= "<br/>";
                    //     $message .= "<br/>Thanks, <br/>Support Team";
                    //     $email->subject($subject);
                    //     $email->send($message);
                    // }
        //             $this->Flash->success(__('Your Message has been send successfully!.'));
        //             return $this->redirect(['action' => 'index']);
        //         } else {
        //             $this->Flash->error(__('The Message could not be send. Please, try again.'));
        //         }
        //     }
        //     $this->viewBuilder()->layout('admin');
        //     $u_id = "";
        //     if(!empty($this->Auth->user('id')))
        //     {
        //         $u_id = $this->Auth->user('id');
        //         $fullname = $this->Auth->user('fullname');
        //         $email = $this->Auth->user('email');
        //     }
        //      $this->set('contact', $contact);
        //     $this->set('_serialize', ['contact']);
        //   //  $this->set(compact('address', 'mediapartners'));
        // }
        // else
        // {
        //     return $this->redirect(['controller' => 'Contact', 'action' => 'index']);
        // }

    }

}
||||||| .r370
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
        $contact = $this->paginate($this->Contact);

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
=======
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

        /**
     * Reply method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function reply($ID = null)
    {
        $this->viewBuilder()->layout('admin');
         $contact = $this->Contact->get($ID, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contact->patchEntity($contact, $this->request->data);
            if ($this->Contact->save($contact)) {
                 if($this->Auth->user('group_id') != 1)
        {
            $u_id = $this->Auth->user('id');
$this->Contact->updateAll(['user_id' => $u_id], ['ID' => $ID]);
            $users_email = $contact['email'];
            //$users_email['email']
            if ($this->request->is(['patch', 'post', 'put']))
            {
        $email = new Email();
                    $email->transport('gmail');

                    // Always try to write clean code, so that you can read it :) :
                        $email->template('contactreplied','cs-email');
                        $name = $contact['Name'];
                        $comment = $contact['comments'];
                        $reply = $contact['reply'];
                        $email->emailFormat('html');
                        $email->from('admin@chennaismile.com');
                        $email->to($users_email);
                        $email->cc('admin@chennaismile.com');

                        // $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
                         $email->viewVars(['name' => $name, 'comment' => $comment, 'reply' => $reply]);
                         $subject = "Contact";
                        $email->subject($subject);
                        $email->send();
                    }
                   $this->Contact->updateAll(['status' => '1'], ['ID' => $ID]);
}
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);


        // $contact = $this->Contact->get($ID);
        // $this->request->session()->write('status', '1');
        // $this->request->session()->write('ID', $ID);

        // if($this->Auth->user('group_id') != 1)
        // {
        //     $users_email = $contact['email'];
        //     //$users_email['email']
        //     if ($this->request->is(['patch', 'post', 'put']))
        //     {
        //         //$event = $this->Events->patchEntity($event, $this->request->data['active']);
        //         if ($this->Contact->updateAll(['status' => $this->request->data['status']], ['ID' => $ID]))
        //         {
        //             //Send eamil to user
        //             $email = new Email();
        //             $email->transport('gmail');

        //             // Always try to write clean code, so that you can read it :) :
        //             if($this->request->data['status'] == '1')
        //             {
        //                 $email->template('eventactivated','cs-email');
        //                 $name = $contact['Name'];
        //                 $email->emailFormat('html');
        //                 $email->from('admin@chennaismile.com');
        //                 $email->to($users_email);
        //                 $email->cc('admin@chennaismile.com');
        //                 // $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
        //                 // $email->viewVars(['name' => $name, 'URL' => $activationUrl]);
        //                  $subject = "Contact";
        //                 $email->subject($subject);
        //                 $email->send();
        //             }
                    // else
                    // {
                    //     $email->template('default');
                    //     $name = $contact['Name'];
                    //     $email->emailFormat('html');
                    //     $email->from('admin@chennaismile.com');
                    //     $email->to($users_email);
                    //     $email->cc('admin@chennaismile.com');
                    //    // $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
                    //     //$email->viewVars(['name' => $name, 'URL' => $activationUrl]);
                    //     $subject = "Event De-Activated";
                    //     $message = "Dear <span style='color:#666666'>".$name."</span>,<br/><br/>";
                    //     $message .= "Event has been de-activated by Admin.<br/>";
                    //     $message .= "<br/>";
                    //     $message .= "<br/>Thanks, <br/>Support Team";
                    //     $email->subject($subject);
                    //     $email->send($message);
                    // }
        //             $this->Flash->success(__('Your Message has been send successfully!.'));
        //             return $this->redirect(['action' => 'index']);
        //         } else {
        //             $this->Flash->error(__('The Message could not be send. Please, try again.'));
        //         }
        //     }
        //     $this->viewBuilder()->layout('admin');
        //     $u_id = "";
        //     if(!empty($this->Auth->user('id')))
        //     {
        //         $u_id = $this->Auth->user('id');
        //         $fullname = $this->Auth->user('fullname');
        //         $email = $this->Auth->user('email');
        //     }
        //      $this->set('contact', $contact);
        //     $this->set('_serialize', ['contact']);
        //   //  $this->set(compact('address', 'mediapartners'));
        // }
        // else
        // {
        //     return $this->redirect(['controller' => 'Contact', 'action' => 'index']);
        // }

    }

}
>>>>>>> .r439
