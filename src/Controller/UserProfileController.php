<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserProfile Controller
 *
 * @property \App\Model\Table\UserProfileTable $UserProfile
 */
class UserProfileController extends AppController
{
	
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userProfile = $this->paginate($this->UserProfile);

        $this->set(compact('userProfile'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * View method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
         $this->viewBuilder()->layout('event_home');
        $userProfile = $this->UserProfile->get($id, [
            'contain' => ['Users']
        ]);
    	//Customize
        if(!empty($this->Auth->user('id')))
        {
       		$users_id = $this->Auth->user('id');
       		$fullname = $this->Auth->user('fullname');
        	$email = $this->Auth->user('email');
    	}

       $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
            ->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
                'conditions' => ['active' => 1]
                    ]);

        $this->set('categories', $categories_new);
        $this->set(compact('subCategories_new'));


    	//$groups = $this->UserProfile->Groups->find('list', array('conditions' => array('role' => 'Users')), ['limit' => 200]);
        $this->loadModel('Users');
        $this->loadModel('Groups');
        $user = $this->Users->get($users_id);
        $groups = $this->Groups->get($user['group_id']);
        $this->set('user', $user);
        $this->set('group', $groups);
        $this->set('userProfile', $userProfile);
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('event_home');
        $userProfile = $this->UserProfile->newEntity();
    	$users_id = "";
        $usersInfo = "";
        $fullname = "";
        $email = "";
        $errCheck = false;
        if(!empty($this->Auth->user('id')))
        {
       		$users_id = $this->Auth->user('id');
       		$fullname = $this->Auth->user('fullname');
        	$email = $this->Auth->user('email');
    	}
    	$userProfileEdit = $this->UserProfile->find('all', array('conditions' => array('user_id' => $users_id)), ['fields' => 'id']);
        if($userProfileEdit->first())
        {
        	$this->redirect(['action' => 'view', $userProfileEdit->first()['id']]);
        }
        if ($this->request->is('post')) {
        	
        	$file = $this->request->data['Photo'];
	        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
	        $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
	        
	        if($file['size']/1024 > '2048')
	        {
	        	$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
	        	$errCheck = true;
	        }
	        else if(in_array($ext, $arr_ext))
	        {
	            //do the actual uploading of the file. First arg is the tmp name, second arg is
	            //where we are putting it
	            $uploadFolder = WWW_ROOT . 'img/profile';
	        	if( !file_exists($uploadFolder) ){
			        mkdir($uploadFolder);
			    }
	            $filename = str_replace(" ", "-", rand(1, 3000) . $file['name']);
	            move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/profile' . DS . $filename);
	             //prepare the filename for database entry
                $this->request->data['Photo'] = $filename;
	        }
  			if (!$errCheck)
  			{
	            $userProfile = $this->UserProfile->patchEntity($userProfile, $this->request->data);
	            $this->loadModel('Users');
	            $status = $this->Users->updateAll(['fullname' => $this->request->data['fullname'], 'group_id' => $this->request->data['group_id']], ['id' => $this->request->data['user_id']]);
	        	if ($this->UserProfile->save($userProfile)) {
	                $this->Flash->success(__('The user profile has been saved.'));
	                return $this->redirect(['action' => 'index']);
	            } else {
	                $this->Flash->error(__('The user profile could not be saved. Please, try again.'));
	            }
  			}
	    }
        
        $users = $this->UserProfile->Users->find('list', array('conditions' => array('id' => $users_id)),['limit' => 200]);
        $groups = $this->UserProfile->Groups->find('list', array('conditions' => array('role' => 'Users')), ['limit' => 200]);
        //Customize
        $userinfo = $this->UserProfile->Users->get($users_id);
        $email = $userinfo['email'];
        $fullname = $userinfo['fullname'];
        $this->set(compact('userProfile', 'groups'));        
        $this->set(compact('userProfile', 'users'));
        $this->set(compact('userProfile', 'users_id'));
        $this->set(compact('userProfile', 'fullname'));
        $this->set(compact('userProfile', 'email'));
        $this->set(compact('userProfile', 'usersInfo'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('event_home');
        $userProfile = $this->UserProfile->get($id, [
            'contain' => []
        ]);
        //debug($userProfile); exit(0);
    	if(!empty($this->Auth->user('id')))
        {
       		$users_id = $this->Auth->user('id');
       		$fullname = $this->Auth->user('fullname');
        	$email = $this->Auth->user('email');
      	}
        
        if ($this->request->is(['patch', 'post', 'put'])) 
        {
          	$errCheck = false;
    			if(isset($this->request->data['Photo']))
    			{
    				if($this->request->data['Photo']['name'] != '')
    				{
    					$file = $this->request->data['Photo'];
    					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
    					$arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
    					if($file['size']/1024 > '2048')
    					{
    						$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
    						$errCheck = true;
    					}
    					else if(in_array($ext, $arr_ext))
    					{
    						//do the actual uploading of the file. First arg is the tmp name, second arg is
    						//where we are putting it
    						$uploadFolder = WWW_ROOT . 'img/profile';
    						if( !file_exists($uploadFolder) ){
    							mkdir($uploadFolder);
    						}
    						$filename = str_replace(" ", "-", rand(1, 3000) . $file['name']);
    						move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/profile' . DS . $filename);
    						 //prepare the filename for database entry
    						$this->request->data['Photo'] = $filename;
    					}
    				}
    			}
        	if(empty($this->request->data['Photo']))
        	{
        		$this->request->data['Photo'] = $userProfile['Photo']; 
        	}
        	
    			if (!$errCheck)
    			{
            
              if(!isset($this->request->data['fullname'])){
                $this->request->data['fullname'] = $this->Auth->user('fullname');
              }
              $this->loadModel('Users');
              $user = $this->Users->find('all')->where(['id' => $this->request->data['user_id']])->first();
              $user->fullname = $this->request->data['fullname'];
              $user->group_id = $this->request->data['group_id'];
              $user->Photo = $this->request->data['Photo'];
              $user = $this->Users->patchEntity($user, $this->request->data);
              $status = $this->Users->save($user);
  	          $userProfile = $this->UserProfile->patchEntity($userProfile, $this->request->data);
  	        	if ($this->UserProfile->save($userProfile)) {
  	                $this->Flash->success(__('The user profile has been saved.'));
  	                return $this->redirect(['action' => 'view/', $id]);
  	            } else {
  	                $this->Flash->error(__('The user profile could not be saved. Please, try again.'));
  	            }
    			}
        }
        $users = $this->UserProfile->Users->find('list', ['limit' => 200]);
        //Customize
        $userinfo = $this->UserProfile->Users->get($users_id);
        $email = $userinfo['email'];
        $fullname = $userinfo['fullname'];
        $groups = $this->UserProfile->Groups->find('list', array('conditions' => array('role' => 'Users')), ['limit' => 200]);
		
        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
            ->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
                'conditions' => ['active' => 1]
                    ]);

        $this->set('categories', $categories_new);
        $this->set(compact('subCategories_new'));

        $this->set(compact('userProfile', 'groups'));        
        $this->set(compact('userProfile', 'users_id'));
        $this->set(compact('userProfile', 'fullname'));
        $this->set(compact('userProfile', 'email'));
        $this->set(compact('userProfile', 'users'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userProfile = $this->UserProfile->get($id);
        if ($this->UserProfile->delete($userProfile)) {
            $this->Flash->success(__('The user profile has been deleted.'));
        } else {
            $this->Flash->error(__('The user profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'add']);
    }
	
}
