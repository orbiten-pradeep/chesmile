<?php
namespace App\Controller;
use Cake\Mailer\Email;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
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
    	$this->viewBuilder()->layout('admin');
        $this->paginate = [
        'contain' => ['Groups'] ];
        $users = $this->paginate($this->Users);
		$page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

 public function organizerindex()
    {
    	$this->viewBuilder()->layout('admin');
        $this->paginate = [
            'contain' => ['Groups']
        ];
       // $user = $this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 2 )]);
        $users = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 2 )]));
        $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);

    	//$groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('id' => 2)]);
    }
 public function adminmanager()
    {
        $this->viewBuilder()->layout('admin');
        $this->paginate = [
            'contain' => ['Groups']
        ];
       // $user = $this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 2 )]);
        $users = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 5 )]));
         $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);

    	//$groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('id' => 2)]);
    }
 public function emanagerindex()
    {
    	$this->viewBuilder()->layout('admin');
        $this->paginate = [
            'contain' => ['Groups']
        ];
       // $user = $this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 2 )]);
        $users = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 6 )]));
         $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);

    	//$groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('id' => 2)]);
    }
	
	public function userlist()
    {
    	$this->viewBuilder()->layout('admin');
        $this->paginate = [
            'contain' => ['Groups']
        ];
       // $user = $this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 2 )]);
        $users = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 1 )]));
         $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
       // $this->set('count',$this->Users->getCount($users));
            $this->set(compact('users'));
        $this->set('_serialize', ['users']);

    	//$groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('id' => 2)]);
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
       $this->viewBuilder()->layout('admin'); 
        $user = $this->Users->get($id, [
            'contain' => ['Groups']
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

        	$this->loadModel('UserProfile');
            $userProfile = $this->UserProfile->newEntity();

            if ($this->Users->save($user)) {
            	$userProfile = $this->UserProfile->patchEntity($userProfile, $this->request->data);
            	$userProfile['fullname'] = $this->request->data['fullname'];
            	$userProfile['user_id'] = $user->id;
            	$this->UserProfile->save($userProfile);

				$email = new Email();
                $email->transport('gmail');
				//$email->setHelpers(['Html','Text']);
                $subject = "Your Activation link";
                $name = $this->request->data['fullname'];
                $to = trim($this->request->data['email']);
                $activationUrl = Router::url(['controller' => 'users', 'action' => 'activate/' . $activation_key, '_full' => true ]);
                // Always try to write clean code, so that you can read it :) :
    			$email->template('cssignupemail','cs-email');
                $email->emailFormat('html');
    			$email->to($to);
    			$email->cc('admin@chennaismile.com');
    			$email->subject($subject);
    			$email->from('admin@chennaismile.com');
    			$email->viewVars(['name' => $name, 'activationUrl' => $activationUrl]);
    			$email->send();

                $this->Flash->success(__('Account activation link has been sent to you. Please check your mail'));
                //return $this->redirect(['action' => 'login']);
                return $this->redirect(['controller' => 'Events','action' => 'index']);
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
    	 $this->viewBuilder()->layout('admin');
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
        if ($this->Users->updateAll(['active' => '2'], ['id' => $id])) {
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
	        }else{
	        	$this->Flash->error(__('Username or Password is wrong! Please try again'));
	        	return $this->redirect(['controller' => 'Events','action' => 'index']);
	        }
	        // $this->Flash->error(__('Username or Password is wrong! Please try again'));
	    }
/*	    $activation_key = Text::uuid();
	    $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
        	//$this->request->data['activation_key'] = $activation_key = String::uuid();
        	$this->request->data['group_id'] = 1;
        	$this->request->data['activation_key'] = $activation_key;
        	$user = $this->Users->patchEntity($user, $this->request->data);
            
            if ($this->Users->save($user)) {
            	
            	$email = new Email();
        		$email->transport('gmail');
        		$subject = "Account Activation link send on your email";
            	$name = $this->request->data['fullname'];
			    $to = trim($this->request->data['email']);
			    $email->emailFormat('html');
			    $email->from('admin@chennaismile.com');
			    $email->to($to);
			    $email->cc('admin@chennaismile.com');
			    $email->subject($subject);
                $email ->setTemplate('cs-signup-email')
                        ->setLayout('cs-email')
                        ->setEmailFormat('html')
                         ->send();
			    
				$activationUrl = Router::url(['controller' => 'users', 'action' => 'activate/' . $activation_key, '_full' => true ]);
			    // Always try to write clean code, so that you can read it :) :
			    // $message ="";
			    // $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
			    // $message .= "Your account has been created successfully by Administrator.<br/>";
               	//$message .= "<b>Activate your account by clicking on the below url:</b> <br/>";
			    // $message .= "<a href='$activationUrl'>$activationUrl</a><br/><br/>";
			    // $message .= "<br/>Thanks, <br/>Support Team";
			    $email->send();
            	
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('role' => 'Users')]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);*/

		/*if(!empty($this->request->data))
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
		}*/

		$groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('role' => 'Users')]);
        $this->set(compact('groups'));
        
	}
	
	
	public function adminlogin() {
			
		$this->viewBuilder()->layout('admin_login');
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
			if ($user && $user['group_id'] != 1) {
	            $this->Auth->setUser($user);
	            if($this->request->session()->read('Activate') == 1)
	            {
	            	return $this->redirect(array('controller' => 'events', 'action' => 'activate',$this->request->session()->read('eventid')));
	            }
	            else
	            {
	            	return $this->redirect(array('controller' => 'AdminDashBoard', 'action' => 'index'));
	            }
	        }
	        $this->Flash->error(__('Your username or password was incorrect.'));
	    }
	}
    
	public function logout() {
		$this->Auth->logout();
	    // $this->Flash->success(__('Good-Bye'));
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
		if(isset($userData))
		{
			if ($userData['active'] == false)
            {
                $activeStatus = 1;
                
            }
			$status = $this->Users->updateAll(['active' => $activeStatus], ['id' => $userData['id']]);
			if ($status)
			{
				$email = new Email();
        		$email->transport('gmail');
        		$email->template('welcome','cs-email');
        		$subject = "Welcome to chennaismile";
            	$email->emailFormat('html');
			    $email->from('admin@chennaismile.com');
			    $to = $userData['email'];
			    $email->to($to);
			    $email->subject($subject);
				// $activationUrl = Router::url(['controller' => 'events', 'action' => 'activate/' . $new_id, '_full' => true ]);
			    $email->viewVars(['name' => $userData['fullname']]);
			    $email->send();
				$this->Flash->success(__('Status updated successfully'));
				$this->redirect(array('controller' => 'Events', 'action' => 'index'));
			}
			else
			{
				$this->Flash->error(__('Something went wrong, please try again.'));
				$this->redirect(array('controller' => 'Events', 'action' => 'index'));
			}
			$this->redirect(array('controller' => 'Events', 'action' => 'index'));	
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
				if(isset($fu))
				{
					if($fu['Active'] == true)
					{
						$key = Text::uuid();
						$url = Router::url(['controller' => 'users', 'action' => 'reset/' . $key, '_full' => true ]);
						$ms=$url;
						$ms=wordwrap($ms,1000);
						$fu['activation_key']= Text::uuid();
						$user_id = $fu['id'];
						$status = $this->Users->updateAll(['activation_key' => $key,'Active' => '0'], ['id' => $user_id]);
						if($status){
							//============Email================//
							$email = new Email();
			        		$email->transport('gmail');
			        		$email->template('csforgotpassword','cs-email');
			        		$subject = "Reset Your http://chennaismile.com/ Password";
						    $to = trim($this->request->data['email']);
						    $email->emailFormat('html');
						    $email->from('admin@chennaismile.com');
						    $email->to($to);
						    $email->cc('admin@chennaismile.com');
						    $email->subject($subject);
							$email->viewVars(['url' => $url]);
						    $email->send();
			            	
			                $this->Flash->success(__('Email has been sent to reset your password'));
			                return $this->redirect(['controller' => 'events','action' => 'index']);
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
					$u['Active'] = '1';
					$user = $u;
					$user = $this->Users->patchEntity($user, $this->request->data);
					if($this->Users->save($user))
					{
						$this->Flash->success(__('Password changed successfully'));
						$this->redirect(array('controller'=>'events','action'=>'index'));
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

	function changepassword($token=null)
	{
		if ($this->request->is('post')) 
		{

			$user = $this->Users->get($this->request->data['user_id']);	
			if(!empty($this->request->data['password'])){
				$user = $this->Users->patchEntity($user, $this->request->data);
				if($this->Users->save($user))
				{
					$this->Flash->success(__('Password Has been Updated'));
					$this->redirect(array('controller'=>'users','action'=>'login'));
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
	
	public function isemailexist()
    {
    	$conn = ConnectionManager::get('default');
    	$request = $this->request->data;
    	$email = $request['email'];
    	$response = "";

    	$query = "SELECT id From users WHERE 1 AND email = '".$email."'";
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

    public function adminadd()
    {
    	$activation_key = Text::uuid();
		$this->viewBuilder()->layout('signin');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
        	//$this->request->data['activation_key'] = $activation_key = String::uuid();
        	//$this->request->data['group_id'] = 4;
        	$this->request->data['activation_key'] = $activation_key;
        	$this->request->data['Active'] = '1';
        	$user = $this->Users->patchEntity($user, $this->request->data);

        	$this->loadModel('UserProfile');
            $userProfile = $this->UserProfile->newEntity();

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'adminlogin']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('role' => 'Admin')]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }
  /**
     * Activate method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function activateindividual($id = null)
    {
       
        $this->request->allowMethod(['post', 'activate']);
        $users = $this->Users->get($id);
        if ($this->Users->updateAll(['active' => '1'], ['id' => $id])) {
            $this->Flash->success(__('The User has been Activated.'));
        } else {
            $this->Flash->error(__('The User could not be Activated. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);

    }
    /**
     * Deactivate method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function deactivateindividual($id = null)
    {
       
        $this->request->allowMethod(['post', 'deactivate']);
        $user = $this->Users->get($id);
        if ($this->Users->updateAll(['active' => '2'], ['id' => $id])) {
            $this->Flash->success(__('The User has been Dectivated.'));
        } else {
            $this->Flash->error(__('The User could not be Deactivated. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);

    }
  
}
