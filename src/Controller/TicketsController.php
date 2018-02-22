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
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 */
class TicketsController extends AppController
{

    public function beforeFilter(Event $event) 
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','getAction','randomTxnId','generateHash','send','success','failed','isemailexist', 'edit','marathon']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('admin');
        $this->paginate = [
            'contain' => ['Events']
        ];
        //debug($this->paginate); exit(0);
        $tickets = $this->paginate($this->Tickets, array('conditions' => array(['status IS NOT NULL'])));
        //debug($tickets); exit(0);
        $this->set(compact('tickets'));
        $this->set('_serialize', ['tickets']);
    }

 public function mytickets()
    {
        if(!empty($this->Auth->user('id')))
        {
            $users_id = $this->Auth->user('id');
            $fullname = $this->Auth->user('fullname');
            $email = $this->Auth->user('email');
            //$this->paginate['conditions'] = array("Events.user_id" => $users_id);
        }

        $this->viewBuilder()->layout('admin');
        $this->paginate = ['contain' => ['Events']
        ];
        //debug($this->paginate); exit(0);
        $tickets = $this->paginate($this->Tickets, array('conditions' => array(['status IS NOT NULL'])));
        //debug($tickets); exit(0);
        $this->set(compact('tickets'));
        $this->set('_serialize', ['tickets']);
    }
    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin');
        $ticket = $this->Tickets->get($id, [
            'contain' => ['Events']
        ]);

        $this->loadModel('Marathonbooking');
        $marathons = $this->Marathonbooking->find('all', array('conditions' => array('Marathonbooking.tickets_id' => $id)));
        //sdebug($marathon->all()); exit(0);
        $this->set('marathons', $marathons);
        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            
            $this->loadModel('Events');

            $this->request->data['amount'] = $this->request->data['price'];
            $this->request->data['phone'] = $this->request->data['mobile_number'];
            $this->request->data['txnid'] = $this->randomTxnId();
            $this->request->data['hash'] = $this->hash;
            
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->data);
            if ($this->Tickets->save($ticket)) 
            {
                $new_id = $ticket->id;
                $payu['key'] = 'wBZpGV5E';
                $payu['salt'] = 'b8Hg0nhutX'; 
                $payu['txnid'] = $this->randomTxnId();
                $payu['amount'] = $this->request->data['price'];
                $payu['curl'] = '';
                $payu['productinfo'] = $this->request->data['productinfo'];
                $payu['service_provider'] = $this->request->data['service_provider'];
                $payu['firstname'] = $this->request->data['firstname'];
                $payu['lastname'] = $this->request->data['lastname'];
                $payu['email'] = $this->request->data['email'];
                $payu['phone'] = $this->request->data['mobile_number'];
                $payu['surl'] = Router::url(['controller' => 'Tickets', 'action' => 'edit/' . $new_id, '_full' => true ]);
                $payu['furl'] = Router::url(['controller' => 'Tickets', 'action' => 'edit/' . $new_id, '_full' => true ]);
                $this->send($payu);
                $this->Flash->success(__('The ticket booking completed successfully.'));
                return $this->redirect(['controller' => 'Events','action' => 'chennai',$this->request->data['events_id']]);
            } else {
                $this->Flash->error(__('The ticket booking could not be completed. Please, try again.'));
            }
        }
        $events = $this->Tickets->Events->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'events'));
        $this->set('_serialize', ['ticket']);
    }


    public function marathon()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {

            $this->loadModel('Events');
            $this->loadModel('Marathonbooking');
            $data['amount'] = $this->request->data['price'];
            $data['txnid'] = $this->randomTxnId();
            $data['hash'] = $this->hash;
            $data['tickets'] = $this->request->data['tickets'];
            $data['productinfo'] = $this->request->data['productinfo'];
            $data['events_id'] = $this->request->data['events_id'];
            $data['service_provider'] =  $this->request->data['service_provider'];            
            
            $ticke_cnt = $this->request->data['tickets'];
            
            $data['firstname'] = $this->request->data['Marathon']['firstname'][0];
            $data['email'] = $this->request->data['Marathon']['email'][0];
            $data['phone'] = $this->request->data['Marathon']['mobile_number'][0];

            $ticket = $this->Tickets->patchEntity($ticket, $data);
            if ($this->Tickets->save($ticket)) 
            {
                $new_id = $ticket->id;
                for ($i=0;$i < $ticke_cnt; $i++) { 
                    $marathon = $this->Marathonbooking->newEntity();
                    $marathon->tickets_id =  $new_id;
                    $marathon->firstname =  $this->request->data['Marathon']['firstname'][$i];
                    $marathon->email =  $this->request->data['Marathon']['email'][$i];
                    $marathon->phone =  $this->request->data['Marathon']['mobile_number'][$i];
                    $marathon->TSHIRT =  $this->request->data['Marathon']['TSHIRT'][$i];
                    $marathon->KM =  $this->request->data['Marathon']['KM'][$i];
                    if(isset($this->request->data['Marathon']['Blood'])){
                        $marathon->Blood =  $this->request->data['Marathon']['Blood'][$i];
                    }
                    if(isset($this->request->data['Marathon']['address'])){
                        $marathon->address=  $this->request->data['Marathon']['address'][$i];
                    }
                    if(isset($this->request->data['Marathon']['emergency_contact'])){
                        $marathon->emergency_contact =  $this->request->data['Marathon']['emergency_contact'][$i];
                    }
                    if(isset($this->request->data['Marathon']['cycle']))
                    {
                        $marathon->cycle =  $this->request->data['Marathon']['cycle'][$i];
                    }
                    $this->Marathonbooking->save($marathon);
                }
                $payu['key'] = 'wBZpGV5E';
                $payu['salt'] = 'b8Hg0nhutX'; 
                $payu['txnid'] = $this->randomTxnId();
                $payu['amount'] = $data['amount'];
                $payu['curl'] = '';
                $payu['productinfo'] = $data['productinfo'];
                $payu['service_provider'] = $data['service_provider'];
                $payu['firstname'] = $data['firstname'];
                $payu['lastname'] = '';
                $payu['email'] = $data['email'];
                $payu['phone'] = $data['phone'];
                $payu['surl'] = Router::url(['controller' => 'Tickets', 'action' => 'edit/' . $new_id, '_full' => true ]);
                $payu['furl'] = Router::url(['controller' => 'Tickets', 'action' => 'edit/' . $new_id, '_full' => true ]);
                $this->send($payu);
                
                $this->Flash->success(__('The ticket booking completed successfully.'));
                return $this->redirect(['controller' => 'Events','action' => 'chennai',$this->request->data['events_id']]);
            } else {
                $this->Flash->error(__('The ticket booking could not be completed. Please, try again.'));
            }
        }
        $events = $this->Tickets->Events->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'events'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        $this->request->data['lastname'] = $ticket['lastname']; 


        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->loadModel('Events');
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->data);
            if ($this->Tickets->save($ticket)) {

                if(!empty($ticket['events_id']))
                {
                    $event = $this->Events->get($ticket['events_id'], [
                        'contain' => ['Users']
                    ]);
                }
            
                ////////////////////////////////////////////////
                if($this->request->data['status'] == 'success')
                {
                    $email = new Email();
                    $email->transport('gmail');
                    $firstname = $this->request->data['firstname'];
                    $lastname = $this->request->data['lastname'];
                    $tickets = $ticket['tickets'];
                    $amount = $ticket['amount'];
                    $event_title = $event['title'];
                    $to = trim($this->request->data['email']); 
                    $email->emailFormat('html');
                    $email->template('default');
                    $email->from('admin@chennaismile.com');
                    $email->to($to);
                    $email->cc('admin@chennaismile.com');
                    $subject = "Thanks for the registration of " . $tickets . " tickets for " . $event_title;
                    $email->subject($subject);

                    $message = "Dear <span style='color:#666666'>" . $firstname . " " . $lastname . " </span>,<br/><br/>";
                    $message .= "<br/>We are happy to inform you that your registration of " . $tickets . " tickets for <b>" . $event_title . "</b> is done & payment of " . $amount . " is completed successfully. <br/>";
                    $message .= "<br/>Thanks and regards, <br/>Team ChennaiSmile, <br/>www.chennaismile.com";
                    $email->send($message);
                }
                if($this->request->data['status'] == 'failure')
                {
                    $email = new Email();
                    $email->transport('gmail');
                    $firstname = $this->request->data['firstname'];
                    $lastname = $this->request->data['lastname'];
                    $tickets = $ticket['tickets'];
                    $amount = $ticket['amount'];
                    $event_title = $event['title'];
                    $to = trim($this->request->data['email']); 
                    $email->emailFormat('html');
                    $email->template('default');
                    $email->from('admin@chennaismile.com');
                    $email->to($to);
                    $email->cc('admin@chennaismile.com');
                    $subject = "Your registration of " . $tickets . " tickets for " . $event_title . " has been failed";
                    $email->subject($subject);

                    $message = "Dear <span style='color:#666666'>" . $firstname . " " . $lastname . " </span>,<br/><br/>";
                    $message .= "<br/>We would like to inform you that your registration of " . $tickets . " tickets for <b>" . $event_title . "</b> is failed. Thanks for your interest. Please try again. <br/>";
                    $message .= "<br/>Thanks and regards, <br/>Team ChennaiSmile, <br/>www.chennaismile.com";
                    $email->send($message);
                }
               // $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['controller' => 'events','action' => 'chennai', $ticket->events_id]);
            } else {
                $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
            }
        }
        $events = $this->Tickets->Events->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'events'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function getAction() {
        $this->merchantKey = 'wBZpGV5E';
        $this->salt = 'b8Hg0nhutX';
        $this->payuBaseURL = "https://secure.payu.in";
        return $this->payuBaseURL . '/_payment';
    }

    public function randomTxnId() {
        // Generate random transaction id
        return substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    }


    private function generateHash($posted = []) {
        // Hash Sequence
        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }
        //debug($hash_string);
        $hash_string .= 'b8Hg0nhutX';
        $this->hash = strtolower(hash('sha512', $hash_string));
    }


    public function send($posted = []) {
        // Post Request
        //$posted['key'] = $this->merchantKey;
        $this->generateHash($posted);
        $posturl =  'https://secure.payu.in/_payment';
        $payu_in_args = array(
            // Merchant details
            'key'                   => $posted['key'],
            'surl'                  => $posted['surl'],
            'furl'                  => $posted['furl'],
            'curl'                  => $posted['curl'],
            'service_provider'      => 'payu_paisa',
            // Customer details
            'firstname'             => $posted['firstname'],
            'lastname'              => $posted['lastname'],
            'email'                 => $posted['email'],
            'address1'              => '',
            'address2'              => '',
            'city'                  => '',
            'state'                 => '',
            'zipcode'               => '',
            'country'               => '',
            'phone'                 => $posted['phone'],
            // Item details
            'productinfo'           => $posted['productinfo'],
            'amount'                => $posted['amount'],
            // Pre-selection of the payment method tab
            'pg'                    => ''
        );



        $payuform = '';
        foreach( $payu_in_args as $key => $value ) {
            if( $value ) {
                $payuform .= "<input type='hidden' name='" . $key . "' value='" . $value . "' />\n";
            }
        }
        $payuform .= '<input type="hidden" name="txnid" value="' . $posted['txnid'] . '" />' . "\n";
        $payuform .= '<input type="hidden" name="hash" value="' . $this->hash . '" />' . "\n";
        // The form
        echo '
          <style>
            body {
                text-lign:      center;
                background-color:#fff;
                cursor: wait;
                margin: 0 auto;
                width: 200px;
            }
            .box {
              margin: 50 0px;
              width: 200px;
              background-color:#e6e6e6;
              padding: 50px;
              border: 3px solid #aaa;
            }
          </style>
          <div class="box">
            <img src="' . Router::url("/img/front/loader.gif", true) . '" alt="Redirecting..." />Thank you for your order. We are now redirecting you to PayUMoney to make payment.
          </div>
          <form action="' . $posturl . '" method="POST" name="payuForm" id="payform">
                ' . $payuform . '
                <input type="submit" class="button" id="submit_payu_in_payment_form" value="Pay via PayUMoney" />
                <a class="button cancel" href="' . $posted['curl'] . '">Cancel order &amp; restore cart</a>
                <script type="text/javascript">
                    var payuForm = document.forms.payuForm;
                    payuForm.submit();
                </script>
            </form>';
        exit;
    }

    public function failed($id = null)
    {
        $this->autoRender = false;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registor = $this->Marathon->find('all', array('conditions' => array('email' => $this->request->data['email'], 'firstname' => $this->request->data['firstname'], 'mobile_number' => $this->request->data['phone'])));  
            $registor = $registor->first();

            $marathon = $this->Marathon->get($registor['ID']);
            $this->Marathon->delete($marathon);
            $this->Flash->error(__('online registration is failed. Please try again...'));
            return $this->redirect('thebigbeachmarathon');
        }
        //return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
        return $this->redirect('thebigbeachmarathon');
        exit(0);
    }

    public function success($id = null)
    {
        $this->autoRender = false;
        if ($this->request->is(['patch', 'post', 'put'])) {

            $registor = $this->Marathon->find('all', array('conditions' => array('email' => $this->request->data['email'], 'firstname' => $this->request->data['firstname'], 'mobile_number' => $this->request->data['phone'])));  
            $registo = $registor->first();
            $status = $this->Marathon->updateAll(['status' => $this->request->data['status'],'amount' => $this->request->data['amount']], ['id' => $registo['ID']]);


            //Email to registrant
           /* $email = new Email();
            $email->transport('gmail');
            $name = $this->request->data['firstname'];
            $to = trim($this->request->data['email']); 
            $email->emailFormat('html');
            $email->template('default');
            $email->from('admin@chennaismile.com');
            $email->to($to);
            $email->cc('admin@chennaismile.com');
            $subject = "Your registration for The Big Beach Marathon is done";
            $email->subject($subject);
            //$activationUrl = Router::url(['controller' => 'Marathon', 'action' => 'details/' . $activation_key, '_full' => true ]);
            // Always try to write clean code, so that you can read it :) :
            $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
            $message .= "<br/>Thank you for registering for the Big Beach Marathon event. Your registration is successfully completed and you will receive unique BIB number via SMS prior to the event day. <br/>";
            $message .= "<br/>The event starts at 5.30 am and will be held at Elliot's Beach, Besant Nagar. <br/>";
            $message .= "If you have any questions please contact ChennaiSmile team @8939775770. <br/>";
            $message .= "Thank you, awaiting for your presence on the event day! <br/>";
            $message .= "<br/>Best Regards, <br/>Team ChennaiSmile, <br/>www.chennaismile.com";
            $email->send($message);
*/
            $this->Flash->success(__('online registration is completed successfully.'));
            //return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
            return $this->redirect('thebigbeachmarathon');
        }
        return $this->redirect('thebigbeachmarathon');
        //return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
        exit(0);
    }

        public function isemailexist()
    {
        $conn = ConnectionManager::get('default');
        $request = $this->request->data;
        $email = $request['email'];
        $response = "";

        $query = "SELECT id From marathon WHERE 1 AND email = '".$email."'";
        $stmt = $conn->execute($query);
        $results = $stmt->fetchAll();
        
        if(empty($results)){
            $response['code'] = true;
        } 
        else {
            $response['code'] = false;
        }
        echo json_encode($response);
        exit;
    }




}
