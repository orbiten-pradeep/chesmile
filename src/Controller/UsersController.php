<?php
namespace App\Controller;
use Cake\Mailer\Email;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Routing\Router;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	
	public function initialize()
	{
	    parent::initialize();
	
	    //$this->Auth->allow(['add','adminlogin']);
	    $this->Auth->allow();
	}
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		
        $this->paginate = [
            'contain' => ['Groups']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups', 'Aros', 'Events']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	$activation_key = Text::uuid();
		$this->viewBuilder()->layout('signin');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
        	//$this->request->data['activation_key'] = $activation_key = String::uuid();
        	$this->request->data['group_id'] = 1;
        	$this->request->data['activation_key'] = $activation_key;
        	$user = $this->Users->patchEntity($user, $this->request->data);
            
            if ($this->Users->save($user)) {
            	
            	$email = new Email();
        		$email->transport('gmail');
        		$email->template('default');
        		$subject = "Account Activation link send on your email";
            	$name = $this->request->data['fullname'];
			    $to = trim($this->request->data['email']);
			    $email->emailFormat('html');
			    $email->from('admin@chennaismile.com');
			    $email->to($to);
			    $email->cc('admin@chennaismile.com');
			    $email->subject($subject);
			    
				$activationUrl = Router::url(['controller' => 'users', 'action' => 'activate/' . $activation_key, '_full' => true ]);
			    // Always try to write clean code, so that you can read it :) :
			    $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
			    $message .= "Your account has been created successfully by Administrator.<br/>";
            	$message .= "<b>Activate your account by clicking on the below url:</b> <br/>";
			    $message .= "<a href='$activationUrl'>$activationUrl</a><br/><br/>";
			    $message .= "<br/>Thanks, <br/>Support Team";
			    $email->send($message);
            	
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('role' => 'Users')]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
	public function login() {
		$this->viewBuilder()->layout('signin');
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
			if ($user && $user['Active'] != False) {
	            $this->Auth->setUser($user);
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Flash->error(__('Your username or password was incorrect.'));
	    }
	    $activation_key = Text::uuid();
	    $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
        	//$this->request->data['activation_key'] = $activation_key = String::uuid();
        	$this->request->data['group_id'] = 1;
        	$this->request->data['activation_key'] = $activation_key;
        	$user = $this->Users->patchEntity($user, $this->request->data);
            
            if ($this->Users->save($user)) {
            	
            	$email = new Email();
        		$email->transport('gmail');
        		$email->template('default');
        		$subject = "Account Activation link send on your email";
            	$name = $this->request->data['fullname'];
			    $to = trim($this->request->data['email']);
			    $email->emailFormat('html');
			    $email->from('admin@chennaismile.com');
			    $email->to($to);
			    $email->cc('admin@chennaismile.com');
			    $email->subject($subject);
			    
				$activationUrl = Router::url(['controller' => 'users', 'action' => 'activate/' . $activation_key, '_full' => true ]);
			    // Always try to write clean code, so that you can read it :) :
			    $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
			    $message .= "Your account has been created successfully by Administrator.<br/>";
            	$message .= "<b>Activate your account by clicking on the below url:</b> <br/>";
			    $message .= "<a href='$activationUrl'>$activationUrl</a><br/><br/>";
			    $message .= "<br/>Thanks, <br/>Support Team";
			    $email->send($message);
            	
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('role' => 'Users')]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);

		if(!empty($this->request->data))
		{
			
			if(empty($this->request->data['email']))
			{
				$this->Flash->error(__('Please Provide Your Email Adress that You used to Register with Us'));
			}
			else
			{
				$email_inp=$this->request->data['email'];
				$fu=$this->Users->find('all',array('conditions'=>array('email'=>$email_inp)));
				$fu = $fu->first();
				if(!empty($fu))
				{
					if($fu['Active'] == true)
					{
						$key = Text::uuid();
						$url = Router::url(['controller' => 'users', 'action' => 'reset/' . $key, '_full' => true ]);
						$ms=$url;
						$ms=wordwrap($ms,1000);
						$fu['activation_key']= Text::uuid();
						$user_id = $fu['id'];
						$status = $this->Users->updateAll(['activation_key' => $key], ['id' => $user_id]);
						if($status){
							//============Email================//
							$email = new Email();
			        		$email->transport('gmail');
			        		$email->template('default');
			        		$subject = "Reset Your http://chennaismile.com/ Password";
			            	$name = $fu['fullname'];
						    $to = trim($this->request->data['email']);
						    $email->emailFormat('html');
						    $email->from('admin@chennaismile.com');
						    $email->to($to);
						    $email->cc('admin@chennaismile.com');
						    $email->subject($subject);
							
						    // Always try to write clean code, so that you can read it :) :
						    $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
						    $message .= "<p>Click on the link below to Reset Your Password </p><br/>";
						    $message .= "<a href='$ms'>$ms</a><br/><br/>";
						    $message .= "<br/>Thanks, <br/>Support Team";
						    $email->send($message);
			            	
			                $this->Flash->success(__('Check Your Email To Reset your password.'));
			                return $this->redirect(['action' => 'login']);
							//============EndEmail=============//
						}
						else{
							$this->Flash->success(__("Error Generating Reset link"));
						}
					}
					else
					{
						$this->Flash->success(__('This Account is not Active yet.Check Your mail to activate it'));
					}
				}
				else
				{
					$this->Flash->success(__('Email does Not Exist'));
				}
			}
		}
	}
	
	
	public function adminlogin() {
			
		$this->viewBuilder()->layout('signin');
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
			
	        if ($user) {
	            $this->Auth->setUser($user);
	            return $this->redirect(array('controller' => 'AdminDashBoard',
		        'action' => 'index',));
	        }
	        $this->Flash->error(__('Your username or password was incorrect.'));
	    }
	}
    
	public function logout() {
		$this->Auth->logout();
	    $this->Flash->success(__('Good-Bye'));
	    $this->redirect($this->Auth->logout());
	}

	function activate($activation_key) 
	{
		$this->autoRender = false;
        $query = $this->Users->find('all', array('conditions' => array('activation_key' => $activation_key,
                'active' => 0
			)
		));
		$userData = $query->first();
		if( !empty($userData))
		{
			if ($userData['active'] == false)
            {
                $activeStatus = 1;
            }
			$status = $this->Users->updateAll(['active' => $activeStatus], ['id' => $userData['id']]);
			if ($status)
			{
				$this->Flash->success(__('Status updated successfully'));
			}
			else
			{
				$this->Flash->error(__('Something went wrong, please try again.'));
			}
			$this->redirect(array('controller' => 'Users', 'action' => 'login'));	
		}
	}
	
	function forgetpassword()
	{
		$this->viewBuilder()->layout('signin');
		//debug($this->request->data); exit(0);
		if(!empty($this->request->data))
		{
			
			if(empty($this->request->data['email']))
			{
				$this->Flash->error(__('Please Provide Your Email Adress that You used to Register with Us'));
			}
			else
			{
				$email_inp=$this->request->data['email'];
				$fu=$this->Users->find('all',array('conditions'=>array('email'=>$email_inp)));
				$fu = $fu->first();
				if(!empty($fu))
				{
					if($fu['Active'] == true)
					{
						$key = Text::uuid();
						$url = Router::url(['controller' => 'users', 'action' => 'reset/' . $key, '_full' => true ]);
						$ms=$url;
						$ms=wordwrap($ms,1000);
						$fu['activation_key']= Text::uuid();
						$user_id = $fu['id'];
						$status = $this->Users->updateAll(['activation_key' => $key], ['id' => $user_id]);
						if($status){
							//============Email================//
							$email = new Email();
			        		$email->transport('gmail');
			        		$email->template('default');
			        		$subject = "Reset Your http://chennaismile.com/ Password";
			            	$name = $fu['fullname'];
						    $to = trim($this->request->data['email']);
						    $email->emailFormat('html');
						    $email->from('admin@chennaismile.com');
						    $email->to($to);
						    $email->cc('admin@chennaismile.com');
						    $email->subject($subject);
							
						    // Always try to write clean code, so that you can read it :) :
						    $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
						    $message .= "<p>Click on the link below to Reset Your Password </p><br/>";
						    $message .= "<a href='$ms'>$ms</a><br/><br/>";
						    $message .= "<br/>Thanks, <br/>Support Team";
						    $email->send($message);
			            	
			                $this->Flash->success(__('Check Your Email To Reset your password.'));
			                return $this->redirect(['action' => 'login']);
							//============EndEmail=============//
						}
						else{
							$this->Flash->success(__("Error Generating Reset link"));
						}
					}
					else
					{
						$this->Flash->success(__('This Account is not Active yet.Check Your mail to activate it'));
					}
				}
				else
				{
					$this->Flash->success(__('Email does Not Exist'));
				}
			}
		}
	}
	
	function reset($token=null)
	{
		$this->viewBuilder()->layout('signin');
		
		if(!empty($token)){
			$u=$this->Users->find('all',array('conditions'=>array('activation_key'=>$token)));
			$u = $u->first();
			$user = $this->Users->newEntity();
			if($u){
				$user_id=$u['id'];
				if(!empty($this->request->data['password'])){
					$activation_key = Text::uuid();
					$u['activation_key'] = $activation_key;
					$u['password'] = $this->request->data['password'];
					$user = $u;
					$user = $this->Users->patchEntity($user, $this->request->data);
					if($this->Users->save($user))
					{
						$this->Flash->success(__('Password Has been Updated'));
						$this->redirect(array('controller'=>'users','action'=>'login'));
					}
				}
			}
			else
			{
				$this->Flash->success(__('Token Corrupted,,Please Retry.the reset link work only for once.'));
			}
		}
 		else
		{
			$this->redirect('/');
		}
	}
	
	
	
}
