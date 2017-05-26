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

    public function beforeFilter(Event $event) 
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','getAction','randomTxnId','generateHash','send','registrationsuccess','registrationfailed']);
    }

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

            //$this->merchantKey = 'wBZpGV5E';
            //$this->salt = 'b8Hg0nhutX';
            $payu['key'] = 'wBZpGV5E';
            $payu['salt'] = 'b8Hg0nhutX'; 
            $payu['txnid'] = $this->randomTxnId();
            $payu['amount'] = $this->request->data['amount'];
            $payu['curl'] = '';
            $payu['productinfo'] = $this->request->data['productinfo'];
            $payu['service_provider'] = $this->request->data['service_provider'];
            $payu['firstname'] = $this->request->data['firstname'];
            $payu['email'] = $this->request->data['email'];
            $payu['phone'] = $this->request->data['mobile_number'];
            $payu['surl'] = Router::url(['controller' => 'Marathon', 'action' => 'registrationsuccess/' . $id, '_full' => true ]);
            $payu['furl'] = Router::url(['controller' => 'Marathon', 'action' => 'registrationfailed/' . $id, '_full' => true ]);
            
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

                $this->send($payu);
                return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
                //return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The online registration could not be completed. Please, try again.'));
                return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
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
            'lastname'              => '',
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

    public function registrationfailed($id = null)
    {
        $this->autoRender = false;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registor = $this->Marathon->find('all', array('conditions' => array('email' => $this->request->data['email'], 'firstname' => $this->request->data['firstname'], 'mobile_number' => $this->request->data['phone'])));  
            $registor = $registor->first();

            $marathon = $this->Marathon->get($registor['ID']);
            $this->Marathon->delete($marathon);
            $this->Flash->error(__('online registration is failed. Please try again...'));
            return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
        }
        return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
        exit(0);
    }

    public function registrationsuccess($id = null)
    {
        $this->autoRender = false;
        if ($this->request->is(['patch', 'post', 'put'])) {

            $registor = $this->Marathon->find('all', array('conditions' => array('email' => $this->request->data['email'], 'firstname' => $this->request->data['firstname'], 'mobile_number' => $this->request->data['phone'])));  
            $registo = $registor->first();
            $status = $this->Marathon->updateAll(['status' => $this->request->data['status'],'amount' => $this->request->data['amount']], ['id' => $registo['ID']]);
            $this->Flash->success(__('online registration is completed successfully.'));
            return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
        }
        return $this->redirect(['controller' => 'Events', 'action' => 'view', $id]);
        exit(0);
    }


}
