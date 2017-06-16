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
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController
{
	public function beforeFilter(Event $event) 
	{
		parent::beforeFilter($event);
    	$this->Auth->allow(['Invitation','about','terms','privacy','partnerwith','contact','thebigbeachmarathon']);
    	$this->set('Photo',$this->Auth->user('Photo'));
	}

	public $components = array('RequestHandler');
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function about(){
    	$this->viewBuilder()->layout('event_home');

    }

    public function terms(){
    	$this->viewBuilder()->layout('event_home');
    }
    
    public function privacy(){
    	$this->viewBuilder()->layout('event_home');
    }

    public function partnerwith(){
    	$this->viewBuilder()->layout('event_home');
    }

    public function contact(){
    	$this->viewBuilder()->layout('event_home');
    }


    public function index($query=null)
    {
		$this->viewBuilder()->layout('event_home');
		
        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			]);

        $users_id = $this->Auth->user('id');

        $this->set('categories', $categories_new);
        $this->set('usersId', $users_id);
        $this->set(compact('subCategories_new'));
    }

    public function myevents()
    {
    	$this->paginate = [
            'contain' => ['Users', 'Categories']
        ];
    	if(!empty($this->Auth->user('id')))
		{
			$users_id = $this->Auth->user('id');
			$fullname = $this->Auth->user('fullname');
			$email = $this->Auth->user('email');
			$this->paginate['conditions'] = array("Events.user_id" => $users_id);
		}
        
        $filter = false;
        $this->paginate['order'] = array('Events.created' => 'desc');
        //debug($this->paginate);
        //exit(0);
		//$this->paginate['conditions'] = array('Events.active' => '1');
        $events = $this->paginate($this->Events);
        //$events->orderAsc();

		$this->viewBuilder()->layout('event_home');
		$this->loadModel('Likes');
        $likes = '';
        foreach ($events as $key => $value) {
        	$query_count = $this->Likes->find('all', [
			    'conditions' => ['events_id' => $value['id'], 'likes' => 1]
			]);
			$number_cnt = $query_count->count();
			$likes[$key]['events'] = $value['id'];
			$likes[$key]['likes'] = $number_cnt;
        }
        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			]);

        $this->set('categories', $categories_new);
        $this->set(compact('subCategories_new'));
        $this->set(compact('events'));
        $this->set(compact('likes'));
        $this->set('_serialize', ['events', 'likes']);
    }


	public function likedevents()
    {
    	$this->paginate = [
            'contain' => ['Users', 'Categories']
        ];
        $this->loadModel('Likes');
        
    	if(!empty($this->Auth->user('id')))
		{
			$users_id = $this->Auth->user('id');
			$fullname = $this->Auth->user('fullname');
			$email = $this->Auth->user('email');
			$likes = $this->Likes->find('all', ['conditions' => ['user_id' => $users_id]])->select(['events_id']);
		}
		if(!empty($likes))
		{
			foreach ($likes as $key => $value) {

				$eventids[$key] = $value['events_id'];
			}
			$this->paginate['conditions'] = array('Events.id IN' => $eventids);
		}
        
        $this->paginate['order'] = array('Events.created' => 'desc');
        $events = $this->paginate($this->Events);

        //$events->orderAsc();

		$this->viewBuilder()->layout('event_home');
		$this->loadModel('Likes');
        $likes = '';
        foreach ($events as $key => $value) {
        	$query_count = $this->Likes->find('all', [
			    'conditions' => ['events_id' => $value['id'], 'likes' => 1]
			]);
			$number_cnt = $query_count->count();
			$likes[$key]['events'] = $value['id'];
			$likes[$key]['likes'] = $number_cnt;
        }
        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			]);

        $this->set('categories', $categories_new);
        $this->set(compact('subCategories_new'));
        $this->set(compact('events'));
        $this->set(compact('likes'));
        $this->set('_serialize', ['events', 'likes']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$this->viewBuilder()->layout('event_home');
        $event = $this->Events->get($id, [
            'contain' => ['Users', 'Categories']
        ]);
        $u_id = "";
        if(!empty($this->Auth->user('id')))
		{
			$u_id = $this->Auth->user('id');
			$fullname = $this->Auth->user('fullname');
			$email = $this->Auth->user('email');
		}

        $this->loadModel('Address');
        $address = $this->Address->find('all', ['conditions' => ['events_id' => $id]]);
        $address = $address->first();
        $this->loadModel('Mediapartners');
        $mediapartners = $this->Mediapartners->find('all', ['conditions' => ['events_id' => $id]]);
        $this->loadModel('Galaries');
        $galaries = $this->Galaries->find('all', ['conditions' => ['events_id' => $id]]);

        $this->loadModel('Sponsors');
        $sponsors = $this->Sponsors->find('all', ['conditions' => ['events_id' => $id]]);
        $this->loadModel('Likes');
        $likes = $this->Likes->find('all', ['conditions' => ['events_id' => $id]]);
        $query = $this->Likes->find('all', ['select' => 'id',
		    	'conditions' => ['events_id' => $id]]);
		$number = $query->count();

        $this->set('event', $event);
        $this->set('_serialize', ['event']);

        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			    	]);

        $this->set('categories', $categories_new);
        $this->set(compact('subCategories_new'));
        $this->set(compact('address', 'mediapartners', 'sponsors', 'number', 'likes', 'u_id', 'galaries'));
    }

		
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	if(!empty($this->Auth->user('id')))
		{
			$users_id = $this->Auth->user('id');
			$fullname = $this->Auth->user('fullname');
			$email = $this->Auth->user('email');
		$this->viewBuilder()->layout('event_home');
		}
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
        	
        	$this->loadModel('Address');
        	$this->loadModel('Mediapartners');
        	$this->loadModel('Sponsors');
        	
        	$addres = $this->Address->newEntity();
        	$mediapartner = $this->Mediapartners->newEntity();
        	$sponsor = $this->Sponsors->newEntity();
        	$data = $this->request->data;
        	
        	//debug($this->request->data['Mediapartners'][0]);
        	
        	/////////////////////////////////////////////////////////////////////////
        	if(!empty($this->request->data['Mediapartners']))
        	{
        		$error=array();
	        	$extension=array("jpeg","jpg","png","gif");
	    		foreach($this->request->data['Mediapartners'] as $key=>$tmp_name)
	            {
	                $file_name=$this->request->data['Mediapartners'][$key]["name"];
	                $file_tmp=$this->request->data['Mediapartners'][$key]["tmp_name"];
	                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
	                if(in_array($ext,$extension))
	                {
                		$uploadFolder = WWW_ROOT . 'img/Mediapartners';
			        	if( !file_exists($uploadFolder) ){
					        mkdir($uploadFolder);
					    }
					    
					    
					    $filename = str_replace(" ", "-", rand(1, 3000) . $file_name);
	                	//move_uploaded_file($file_tmp=$this->request->data['Mediapartners'][$key]["tmp_name"], WWW_ROOT . 'img/Mediapartners' . DS . $filename);
	                	if(!file_exists(WWW_ROOT . 'img/Mediapartners' . DS . $filename))
	                    {
	                        move_uploaded_file($file_tmp=$this->request->data['Mediapartners'][$key]["tmp_name"], WWW_ROOT . 'img/Mediapartners' . DS . $filename);
	                        $this->request->data['Mediapartners'][$key]["name"] = $filename;
	                    }
	                    else
	                    {
	                        $filename=basename($file_name,$ext);
	                        $newFileName=$filename.time().".".$ext;
	                        move_uploaded_file($file_tmp=$this->request->data['Mediapartners'][$key]["tmp_name"], WWW_ROOT . 'img/Mediapartners' . DS . $newFileName);
	                        $this->request->data['Mediapartners'][$key]["name"] = $newFileName;
	                    }
	                }
	                else
	                {
	                    array_push($error,"$file_name, ");
	                }
	            }
        	}
        	
        	//////////////////////////////////////////////////////////////////////////////////////////////////
        	if(!empty($this->request->data['Sponsors']))
        	{
        		$error=array();
	        	$extension=array("jpeg","jpg","png","gif");
	    		foreach($this->request->data['Sponsors'] as $key=>$tmp_name)
	            {
	                $file_name=$this->request->data['Sponsors'][$key]["name"];
	                $file_tmp=$this->request->data['Sponsors'][$key]["tmp_name"];
	                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
	                if(in_array($ext,$extension))
	                {
                		$uploadFolder = WWW_ROOT . 'img/Sponsors';
			        	if( !file_exists($uploadFolder) ){
					        mkdir($uploadFolder);
					    }
					    
					    
					    $filename = str_replace(" ", "-", rand(1, 3000) . $file_name);
	                	//move_uploaded_file($file_tmp=$this->request->data['Mediapartners'][$key]["tmp_name"], WWW_ROOT . 'img/Mediapartners' . DS . $filename);
	                	if(!file_exists(WWW_ROOT . 'img/Sponsors' . DS . $filename))
	                    {
	                        move_uploaded_file($file_tmp=$this->request->data['Sponsors'][$key]["tmp_name"], WWW_ROOT . 'img/Sponsors' . DS . $filename);
	                        $this->request->data['Sponsors'][$key]["name"] = $filename;
	                    }
	                    else
	                    {
	                        $filename=basename($file_name,$ext);
	                        $newFileName=$filename.time().".".$ext;
	                        move_uploaded_file($file_tmp=$this->request->data['Sponsors'][$key]["tmp_name"], WWW_ROOT . 'img/Sponsors' . DS . $newFileName);
	                        $this->request->data['Sponsors'][$key]["name"] = $newFileName;
	                    }
	                }
	                else
	                {
	                    array_push($error,"$file_name, ");
	                }
	            }
        	}      	
        	$display = null;
        	$banner = null;
        	$OrganizersLogo = null;

        	//banner Image 
        	if(!empty($this->request->data['banner']))
	        {
	        	$banner = $this->request->data['banner'];
		        $ext = substr(strtolower(strrchr($banner['name'], '.')), 1); //get the extension
		        $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
		        
		        if($banner['size']/1024 > '2048')
		        {
		        	$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
		        	$errCheck = true;
		        }
		        else if(in_array($ext, $arr_ext))
		        {
		            //do the actual uploading of the file. First arg is the tmp name, second arg is
		            //where we are putting it
		            $uploadFolder = WWW_ROOT . 'img/banner';
		        	if( !file_exists($uploadFolder) ){
				        mkdir($uploadFolder);
				    }
		            $filename = str_replace(" ", "-", rand(1, 3000) . $banner['name']);
		            move_uploaded_file($banner['tmp_name'], WWW_ROOT . 'img/banner' . DS . $filename);
		             //prepare the filename for database entry
	                $this->request->data['banner']['name'] = $filename;
	                $banner = $filename;
		        }
        	}
        	
        	
        	if(!empty($this->request->data['display']))
        	{
	        	$display = $this->request->data['display'];
		        $ext = substr(strtolower(strrchr($display['name'], '.')), 1); //get the extension
		        $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
		        
		        if($display['size']/1024 > '2048')
		        {
		        	$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
		        	$errCheck = true;
		        }
		        else if(in_array($ext, $arr_ext))
		        {
		            //do the actual uploading of the file. First arg is the tmp name, second arg is
		            //where we are putting it
		            $uploadFolder = WWW_ROOT . 'img/display';
		        	if( !file_exists($uploadFolder) ){
				        mkdir($uploadFolder);
				    }
		            $filename = str_replace(" ", "-", rand(1, 3000) . $display['name']);
		            move_uploaded_file($display['tmp_name'], WWW_ROOT . 'img/display' . DS . $filename);
		             //prepare the filename for database entry
	                $this->request->data['display']['name'] = $filename;
	                $display = $filename;
		        }
        	}
	        
        	if(!empty($this->request->data['OrganizersLogo']))
        	{
	        	$OrganizersLogo = $this->request->data['OrganizersLogo'];
		        $ext = substr(strtolower(strrchr($OrganizersLogo['name'], '.')), 1); //get the extension
		        $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
		        
		        if($OrganizersLogo['size']/1024 > '2048')
		        {
		        	$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
		        	$errCheck = true;
		        }
		        else if(in_array($ext, $arr_ext))
		        {
		            //do the actual uploading of the file. First arg is the tmp name, second arg is
		            //where we are putting it
		            $uploadFolder = WWW_ROOT . 'img/OrganizersLogo';
		        	if( !file_exists($uploadFolder) ){
				        mkdir($uploadFolder);
				    }
		            $filename = str_replace(" ", "-", rand(1, 3000) . $OrganizersLogo['name']);
		            move_uploaded_file($OrganizersLogo['tmp_name'], WWW_ROOT . 'img/OrganizersLogo' . DS . $filename);
		             //prepare the filename for database entry
	                $this->request->data['OrganizersLogo']['name'] = $filename;
	                $OrganizersLogo = $filename;
		        }
        	}

        	if(!is_null($banner))
        	{
        		$this->request->data['banner'] = $banner;
        	}
        	if(!is_null($display))
        	{
        		$this->request->data['display'] = $display;
        	}
        	if(!is_null($display))
        	{
        		$this->request->data['OrganizersLogo'] = $OrganizersLogo;
        	}


			if(!empty($this->request->data['date']))
			{
	        	$this->request->data['date'] = new Time($this->request->data['date']);
			}
	        $event = $this->Events->patchEntity($event, $this->request->data);
            $activation_key = Text::uuid();
            if ($this->Events->save($event)) {
            	////////////////////////////////////////////////////////////////////
            	$new_id = $event->id;
            	foreach ($this->request->data['Eventsubcategories']['sub_categories'] as $key => $value)
	            {
	            	$subcategories = $this->Events->Eventsubcategories->newEntity();
	            	$subcategories->events_id = $new_id;
	            	$subcategories->sub_categories = $value;
	            	$this->Events->Eventsubcategories->save($subcategories);
	            }

	            //$mediapartner = $this->Mediapartners->newEntity();
        		//$sponsor = $this->Sponsors->newEntity();
	            foreach($this->request->data['Mediapartners'] as $key=>$tmp_name)
	            {
	            	// $mediapartner = $this->Mediapartners->patchEntity($mediapartner, $this->request->data);
	            	// $mediapartner->events_id = $new_id;
	            	// $mediapartner->MediaPartners = $this->request->data['Mediapartners'][$key]["name"];
	            	$mediapartner = $this->Mediapartners->newEntity();
	            	$mediapartner['events_id'] = $new_id;
	            	$mediapartner['MediaPartners'] = $this->request->data['Mediapartners'][$key]["name"];
	            	$this->Mediapartners->save($mediapartner);
	            }

	            foreach($this->request->data['Sponsors'] as $key=>$tmp_name)
	            {
	            	// $sponsor = $this->Sponsors->patchEntity($sponsor, $this->request->data);
	            	// $sponsor->events_id = $new_id;
	            	// $sponsor->Sponsors = $this->request->data['Sponsors'][$key]["name"];
	            	$sponsor = $this->Sponsors->newEntity();
	            	$sponsor['events_id'] = $new_id;
	            	$sponsor['Sponsors'] = $this->request->data['Sponsors'][$key]["name"];
	            	$this->Sponsors->save($sponsor);
	            }
	            
	            $addres = $this->Address->patchEntity($addres, $this->request->data);
	            $addres->events_id = $new_id; 
	            $this->Address->save($addres);
            	////////////////////////////////////////////////////////////////////
	            
            	//Send email to admin to active
            	$email = new Email();
        		$email->transport('gmail');
        		$email->template('eventactivationadmin','cs-email');
        		$subject = "New event has arrived!";
            	$email->emailFormat('html');
			    $email->from('admin@chennaismile.com');
			    $email->to('admin@chennaismile.com');
			    $email->subject($subject);
				$activationUrl = Router::url(['controller' => 'events', 'action' => 'activate/' . $new_id, '_full' => true ]);
			    $email->viewVars(['URL' => $activationUrl]);
			    $email->send();
			    //Send email to admin to active
                $email->transport('gmail');
                $subject = "Event Activation is waiting for Admin review..";
                $name = $this->Auth->user('fullname');
                // Always try to write clean code, so that you can read it :) :
    			$email->template('awaitingapproval','cs-email');
                $email->emailFormat('html');
    			$email->to($this->Auth->user('email'));
    			$email->cc('admin@chennaismile.com');
    			$email->subject($subject);
    			$email->from('admin@chennaismile.com');
    			$email->viewVars(['name' => $name]);
    			$email->send();
            	
    //         	//Email to customer, who created the events
    //         	$email->transport('gmail');
    //     		$email->template('default');
    //     		$subject = "Event Activation is waiting for Admin review..";
    //         	$name = $this->Auth->user('fullname');
			 //    $email->emailFormat('html');
			 //    $email->from('admin@chennaismile.com');
			 //    $email->to($this->Auth->user('email'));
			 //    $email->subject($subject);
			 //    $message = "Dear <span style='color:#666666'>".$name."</span>,<br/><br/>";
			 //    $message .= "Event has been created successfully by " .$this->Auth->user('fullname'). ".<br/>";
    //         	$message .= "<b>Event Activation is waiting for Admin review.. Will let you know, once its activated.</b> <br/>";
			 //    $message .= "<br/>Thanks, <br/>Support Team";
			 //    $email->send($message);
			    
            	////////////////////////////////////////////////////////////////////
                $this->Flash->success(__('The event has been saved, kindly wait for an approval mail from the admin.'));

                return $this->redirect(['action' => 'index']);
            } else 
            {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }

        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			]); 

        $this->set('categories', $categories_new);
        $this->set('subCategories', $subCategories_new); 
        $this->set(compact('subCategories_new'));


        $this->loadModel('SubCategories');
        $this->set(compact('userProfile', 'users_id'));
        $users = $this->Events->Users->find('list', ['limit' => 200]);

        $categories_list = $this->Events->Categories->find('list', ['limit' => 200]);
        $this->set(compact('event', 'users', 'categories_list', 'subCategories')); 
        $this->set('_serialize', ['event']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Eventsubcategories']
        ]);
    	if(!empty($this->Auth->user('id')))
		{
			$users_id = $this->Auth->user('id');
			$fullname = $this->Auth->user('fullname');
			$email = $this->Auth->user('email');
		}
        
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
        	/////////////////////////////////////////////////////////////////
        	if(!empty($this->request->data['banner']))
        	{
	        	$banner = $this->request->data['banner'];
		        $ext = substr(strtolower(strrchr($banner['name'], '.')), 1); //get the extension
		        $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
		        
		        if($banner['size']/1024 > '2048')
		        {
		        	$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
		        	$errCheck = true;
		        }
		        else if(in_array($ext, $arr_ext))
		        {
		            //do the actual uploading of the file. First arg is the tmp name, second arg is
		            //where we are putting it
		            $uploadFolder = WWW_ROOT . 'img/banner';
		        	if( !file_exists($uploadFolder) ){
				        mkdir($uploadFolder);
				    }
		            $filename = str_replace(" ", "-", rand(1, 3000) . $banner['name']);
		            move_uploaded_file($banner['tmp_name'], WWW_ROOT . 'img/banner' . DS . $filename);
		             //prepare the filename for database entry
	                $this->request->data['banner'] = $filename;
		        }
        	}
	        
        	if(!empty($this->request->data['display']))
        	{
	        	$display = $this->request->data['display'];
		        $ext = substr(strtolower(strrchr($display['name'], '.')), 1); //get the extension
		        $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
		        
		        if($display['size']/1024 > '2048')
		        {
		        	$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
		        	$errCheck = true;
		        }
		        else if(in_array($ext, $arr_ext))
		        {
		            //do the actual uploading of the file. First arg is the tmp name, second arg is
		            //where we are putting it
		            $uploadFolder = WWW_ROOT . 'img/display';
		        	if( !file_exists($uploadFolder) ){
				        mkdir($uploadFolder);
				    }
		            $filename = str_replace(" ", "-", rand(1, 3000) . $display['name']);
		            move_uploaded_file($display['tmp_name'], WWW_ROOT . 'img/display' . DS . $filename);
		             //prepare the filename for database entry
	                $this->request->data['display'] = $filename;
		        }
        	}
	        
        	if(!empty($this->request->data['display']))
        	{
	        	$OrganizersLogo = $this->request->data['OrganizersLogo'];
		        $ext = substr(strtolower(strrchr($OrganizersLogo['name'], '.')), 1); //get the extension
		        $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
		        
		        if($OrganizersLogo['size']/1024 > '2048')
		        {
		        	$this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
		        	$errCheck = true;
		        }
		        else if(in_array($ext, $arr_ext))
		        {
		            //do the actual uploading of the file. First arg is the tmp name, second arg is
		            //where we are putting it
		            $uploadFolder = WWW_ROOT . 'img/OrganizersLogo';
		        	if( !file_exists($uploadFolder) ){
				        mkdir($uploadFolder);
				    }
		            $filename = str_replace(" ", "-", rand(1, 3000) . $OrganizersLogo['name']);
		            move_uploaded_file($OrganizersLogo['tmp_name'], WWW_ROOT . 'img/OrganizersLogo' . DS . $filename);
		             //prepare the filename for database entry
	                $this->request->data['OrganizersLogo'] = $filename;
		        }
        	}
  			//debug($this->request->data);

	        $this->request->data['date'] = new Time($this->request->data['date']);
        	/////////////////////////////////////////////////////////////////
        	
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
            	
            	////////////////////////////////////////////////////////////////////
            	$new_id = $id;
            	foreach ($this->request->data['Eventsubcategories']['sub_categories'] as $key => $value)
	            {
	            	$subcategories = $this->Events->Eventsubcategories->newEntity();
	            	$subcategories->events_id = $new_id;
	            	$subcategories->sub_categories = $value;
	            	$this->Events->Eventsubcategories->save($subcategories);
	            }
            	////////////////////////////////////////////////////////////////////
            	
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }
        $cnt = 0;
        foreach ($event['eventsubcategories'] as $val)
        {
        	$selected[$cnt] =  $val['sub_categories'];
        	$cnt++;
        }
        


        $this->loadModel('SubCategories');
        $this->set(compact('selected', 'selected'));
        $this->set(compact('userProfile', 'users_id'));
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $categories = $this->Events->Categories->find('list', ['limit' => 200]);
        $subCategories = $this->SubCategories->find('list', ['limit' => 200]);
        $this->set(compact('event', 'users', 'categories', 'subCategories'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->updateAll(['active' => '2'], ['id' => $id])) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
	public function viewresult($id = null)
	{
		if ($this->request->is('ajax')) {
			$id = $this->request->data['id'];
			$this->loadModel('SubCategories');
			$subCategories = $this->SubCategories->find('list', ['limit' => 200, 'conditions' => array('categories_id' => $id)]);
        	echo json_encode($subCategories);
		}
		$this->autoRender = false;
		exit;
	}
	
	/**
     * Activate method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function activate($id = null)
    {
    	$event = $this->Events->get($id, [
            'contain' => ['Users', 'Categories']
        ]);
        $this->request->session()->write('Activate', '1');
        $this->request->session()->write('eventid', $id);
     	
       	if($this->Auth->user('group_id') == 4)
       	{
	        $users_email = $event['user']['email'];
	        //$users_email['email']
	        if ($this->request->is(['patch', 'post', 'put'])) 
	        {
	            //$event = $this->Events->patchEntity($event, $this->request->data['active']);
	            if ($this->Events->updateAll(['active' => $this->request->data['active']], ['id' => $id])) 
	            {
	            	//Send eamil to user 
	            	$email = new Email();
	        		$email->transport('gmail');
	        		
				    // Always try to write clean code, so that you can read it :) :
				    if($this->request->data['active'] == '1')
				    {
					    $email->template('eventactivated','cs-email');
		            	$name = $event['user']['fullname'];
					    $email->emailFormat('html');
					    $email->from('admin@chennaismile.com');
					    $email->to($users_email);
					    $email->cc('admin@chennaismile.com');
					    $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
					    $email->viewVars(['name' => $name, 'URL' => $activationUrl]);
				    	$subject = "Event Activated";
				    	$email->subject($subject);
				    	$email->send();
				    } 
				    else 
				    {
				    	$email->template('default');
		            	$name = $event['user']['fullname'];
					    $email->emailFormat('html');
					    $email->from('admin@chennaismile.com');
					    $email->to($users_email);
					    $email->cc('admin@chennaismile.com');
					    $activationUrl = Router::url(['controller' => 'events', 'action' => 'view/' . $id, '_full' => true ]);
					    //$email->viewVars(['name' => $name, 'URL' => $activationUrl]);
				    	$subject = "Event De-Activated";
					    $message = "Dear <span style='color:#666666'>".$name."</span>,<br/><br/>";
					    $message .= "Event has been de-activated by Admin.<br/>";
					    $message .= "<br/>";
					    $message .= "<br/>Thanks, <br/>Support Team";
					    $email->subject($subject);
				    	$email->send($message);
				    }
	            	$this->Flash->success(__('The event has been updated.'));
	                return $this->redirect(['action' => 'index']);
	            } else {
	                $this->Flash->error(__('The event could not be updated. Please, try again.'));
	            }
	        }
	        $this->viewBuilder()->layout('event_home');
	        $u_id = "";
	        if(!empty($this->Auth->user('id')))
			{
				$u_id = $this->Auth->user('id');
				$fullname = $this->Auth->user('fullname');
				$email = $this->Auth->user('email');
			}
	        $this->loadModel('Address');
	        $address = $this->Address->find('all', ['conditions' => ['events_id' => $id]]);
	        $address = $address->first();
	        $this->loadModel('Mediapartners');
	        $mediapartners = $this->Mediapartners->find('all', ['conditions' => ['events_id' => $id]]);
	        $this->loadModel('Galaries');
	        $galaries = $this->Galaries->find('all', ['conditions' => ['events_id' => $id]]);
	        $this->loadModel('Sponsors');
	        $sponsors = $this->Sponsors->find('all', ['conditions' => ['events_id' => $id]]);
	        $this->loadModel('Likes');
	        $likes = $this->Likes->find('all', ['conditions' => ['events_id' => $id]]);
	        $query = $this->Likes->find('all', ['select' => 'id',
			    	'conditions' => ['events_id' => $id]]);
			$number = $query->count();
	        $this->loadModel('Categories');
	        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
	        	->where(['active' => 1]);

	        $this->loadModel('SubCategories');
	        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
				    'conditions' => ['active' => 1]
				    	]);
	        $this->set('event', $event);
	        $this->set('_serialize', ['event']);
	        $this->set('categories', $categories_new);
	        $this->set(compact('subCategories_new'));
	        $this->set(compact('address', 'mediapartners', 'sponsors', 'number', 'likes', 'u_id', 'galaries'));
	    }
	    else
	    {
	    	return $this->redirect(['controller' => 'Users', 'action' => 'adminlogin']);
	    }

    }

    //Search AreaName
	public function search() 
	{
        if ($this->request->is('ajax')) {
            $this->loadModel('Area');
            $this->autoRender = false;            
            $name = $this->request->query('term');            
            $results = $this->Area->find('all', array(
                                           'conditions' => array('area_name LIKE ' =>  $name . '%')
                                         
                                           ));
            
            $resultArr = array();
            foreach($results as $result) {
               $resultArr[] = array('label' =>$result['area_name'] , 'value' => $result['area_name'] );
            }
            echo json_encode($resultArr);              
		}
	}

	public function searchbyeventtitle() 
	{
        if ($this->request->is('ajax')) {
            $this->autoRender = false;            
            $title = $this->request->query('term');            
            $results = $this->Events->find('all', array('conditions' => array('title LIKE ' => '%'.$title.'%')));
            
            $resultArr = array();
            foreach($results as $result) {
               $resultArr[] = array('label' =>$result['title'] , 'value' => $result['title'] );
            }
            echo json_encode($resultArr);              
		}
	}

	public function eventlist() 
	{    
		if ($this->request->is('ajax')) {
			$userId = $this->Auth->user('id');
			$filter = false;
	        $cond = '';
	        $joins = '';

	        if (!empty($this->request->data)){
	        	//echo "<pre>";print_r($this->request->query);echo "</pre>";
	        	if(isset($this->request->data['category']) && $this->request->data['category'] !='') {
	        		$category = $this->request->data['category'];
	        		$cond .= " AND e.categories_id IN ($category)";
	        		$filter = true;
	        	}

	        	if(isset($this->request->data['area']) && $this->request->data['area'] !='') {
	        		$area = $this->request->data['area'];
	        		$joins .= " LEFT JOIN address ad ON ad.events_id = e.id";
		        	$cond .= " AND ad.areaname = '".$area."'";
		        	$filter = true;
	        	}

	        	if(isset($this->request->data['eTitle']) && $this->request->data['eTitle'] !='') {
	        		$eTitle = $this->request->data['eTitle'];
		        	$cond .= " AND e.title like '%".$eTitle."%'";
		        	$filter = true;
	        	}
	        	
	        	if(isset($this->request->data['action']) && $this->request->data['action'] !='') {
	        		$action = $this->request->data['action'];
	        		if($action == "pastevents"){
	        			$filter = true;
		        		$cond .= " AND e.date < CURDATE()";
	        		}
	        		if($action == "likedevents"){
	        			$joins .= " LEFT JOIN likes l ON l.events_id = e.id";
		        		$cond .= " AND l.user_id = ".$userId;
		        		$filter = true;
	        		}
	        		if($action == "myevents"){
	        			$cond .= " AND e.user_id = ".$userId;
	        			$filter = true;
	        		}
	        	}
	        	if(isset($this->request->data['date']) && !empty($this->request->data['date'])){
		        	if($this->request->data['date'] == "today") {
		        		$filter = true;
		        		$cond .= " AND e.date = CURDATE()";
		        	}
		        	elseif($this->request->data['date'] == "tomorrow") {
		        		$filter = true;
		        		$cond .= " AND e.date = DATE_ADD(CURDATE(),INTERVAL 1 DAY)";
		        	}
		        	elseif ($this->request->data['date'] == "weekend") {
		        		$filter = true;
		        		$cond .= " AND e.date between DATE_ADD(CURDATE(), interval(7 - DAYOFWEEK(CURDATE()) ) DAY) AND DATE_ADD(CURDATE(), interval(7-DAYOFWEEK(CURDATE())+1) DAY)";
		        	}
		        	elseif ($this->request->data['date'] == "month") {
		        		$filter = true;
		        		$cond .= " AND e.date between DATE_FORMAT(NOW() ,'%Y-%m-01') AND LAST_DAY(CURDATE())";
		        	}
	        	}

	        	if(isset($this->request->data['customDate']) && !empty($this->request->data['customDate'])){
	        		$customDate = $this->request->data['customDate'];
	        		$exp = explode('|', $customDate);
	        		$filter = true;
	        		$cond .= " AND e.date between '".$exp[0]."' AND '".$exp[1]."'";
		        }
	        }
	        if(!$filter) {
		        $cond .= " AND e.date > DATE_ADD(CURDATE(),INTERVAL -1 DAY)";
	        } 

            $conn = ConnectionManager::get('default'); 
            $query = "SELECT e.*, c.name as category_name, c.color as category_color, (SELECT count(l.events_id) FROM likes l WHERE l.events_id = e.id GROUP BY l.events_id) as likes_count, (SELECT a.areaname FROM address a WHERE a.events_id = e.id) as areaname FROM events e LEFT JOIN categories c ON c.id = e.categories_id $joins WHERE e.active = 1 $cond order by e.date asc";

            $stmt = $conn->execute($query);
            $results = $stmt->fetchAll('assoc');
            //sleep(100);
          
        	echo json_encode($results);    
		}
		$this->autoRender = false;
		exit;
	}

	public function likes($id = null)
	{
		if ($this->request->is('ajax')) 
        {
			$this->loadModel('Likes');
	        $this->autoRender = false;
	        $events_id = $this->request->data('eventid'); 
	        $user_id = $this->Auth->user('id'); 
	        $likes = $this->Likes->newEntity();
	        $likes = $this->Likes->patchEntity($likes, $this->request->data);
	        $likes->events_id = $events_id;
	        $likes->user_id = $user_id;

	        $query = $this->Likes->find('all', ['select' => 'id',
		    	'conditions' => ['events_id' => $events_id, 'user_id' => $user_id]]);
			$number = $query->count();
			
			if($number < 1)
			{
	        	$likes->likes = '1';
			}
	        else if($number > 0)
	        {
	        	$likes->likes = '0';
	        	$query_1 = $this->Likes->find('all', ['select' => 'id',
		    	'conditions' => ['events_id' => $events_id, 'user_id' => $user_id, 'likes' => '1']]);
				$number_1 = $query_1->count();
				if($number_1>0)
				{
	        		$this->Likes->delete($query_1->first());
	        		$likes->likes = '0';
				} 

				$query_2 = $this->Likes->find('all', ['select' => 'id',
		    	'conditions' => ['events_id' => $events_id, 'user_id' => $user_id, 'likes' => '0']]);
				$number_2 = $query_2->count();

				if($number_2 > 0)
				{
					$this->Likes->delete($query_2->first());
	        		$likes->likes = '1';
				}

	        }

	        $this->Likes->save($likes);
	        $query_count = $this->Likes->find('all', [
			    'conditions' => ['events_id' => $events_id, 'likes' => 1]
			]);
			$number_cnt = $query_count->count();
			if ($number_cnt < 1)
				$cnt = '0';
			else
				$cnt = $number_cnt;
	        echo $cnt;
    	}

	}
	public function sendemail()
    {
		if ($this->request->is('ajax')) 
        {
        	$this->autoRender = false;
        	
        	$events_id = $this->request->data('eventid');
        	$email_req = $this->request->data('email');        	
	        $event = $this->Events->get($events_id, [
	            'contain' => ['Users', 'Categories']
	        ]);

	        $this->loadModel('Invitefriends');
	        $invitefriends = $this->Invitefriends->find('all',array('conditions'=>array('email'=>$email_req, 'events_id' => $events_id)));
    		$invitefriends = $invitefriends->first();

    		if(isset($invitefriends))
    		{
    			$invitefriend = $this->Invitefriends->get($invitefriends['ID']);
    			$this->Invitefriends->delete($invitefriend);
    		}
	        
	        $activation_key = Text::uuid();
	        $invitefriend = $this->Invitefriends->newEntity();
	        $invitefriend['events_id'] = $events_id;
            $invitefriend['email'] = $email_req;
            $invitefriend['activation_key'] = $activation_key;
            if ($this->Invitefriends->save($invitefriend)) {
                $this->Flash->success(__('The invitefriend has been saved.'));
            } else {
                $this->Flash->error(__('The invitefriend could not be saved. Please, try again.'));
            }

	        $this->loadModel('Address');
	        $address = $this->Address->find('all', ['conditions' => ['events_id' => $events_id]]);
	        $address = $address->first();
	        $activationUrl = Router::url(['controller' => 'events', 'action' => 'invitation/' . $activation_key, '_full' => true ]);

	        $email = new Email();
    		$email->transport('gmail');
    		$email->template('inviteemail','csinvite');
    		$subject = "Invitation from chennaismile";
        	$email->emailFormat('html');
		    $email->from('admin@chennaismile.com');
		    $email->to($email_req);
		    $email->cc('admin@chennaismile.com');
		    $email->subject($subject);
		    $email->viewVars(['title' => $event['title'], 'descriptioin' => $event['descriptioin'], 'URL' => $activationUrl, 'date' => $event['date'], 'time' => $event['time'], 'contact' => $event['contact_number'], 'mobile' => $event['mobile_number'],  'address_1' => $address['address_1'],  'address_2' => $address['address_2'],  'landmark' => $address['landmark'], 
		    	'city' => $address['city'], 'state' => $address['state'], 'country' => $address['country'], 'google_map' => $event['google_map']]);
		    $email->send();
		    $return = 'Success';
		    echo json_encode(compact('return'));
		    //return "Success";
		    exit(0);
	    }
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function invitation($activation_key = null)
    {
    	$this->loadModel('Invitefriends');
    	$invitefriends = $this->Invitefriends->find('all',array('conditions'=>array('activation_key'=>$activation_key)));
    	$invitefriends = $invitefriends->first();

    	if(isset($invitefriends['events_id']))
    	{
    		$id = $invitefriends['events_id'];
    	} else
    	{
    		return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    	}
    
		$this->viewBuilder()->layout('event_home');
        $event = $this->Events->get($id, [
            'contain' => ['Users', 'Categories']
        ]);
        
        $this->loadModel('Address');
        $address = $this->Address->find('all', ['conditions' => ['events_id' => $id]]);
        $address = $address->first();
        $this->loadModel('Mediapartners');
        $mediapartners = $this->Mediapartners->find('all', ['conditions' => ['events_id' => $id]]);
        $this->loadModel('Galaries');
        $galaries = $this->Galaries->find('all', ['conditions' => ['events_id' => $id]]);

        $this->loadModel('Sponsors');
        $sponsors = $this->Sponsors->find('all', ['conditions' => ['events_id' => $id]]);
        $this->loadModel('Likes');
        $likes = $this->Likes->find('all', ['conditions' => ['events_id' => $id]]);
        $query = $this->Likes->find('all', ['select' => 'id',
		    	'conditions' => ['events_id' => $id]]);
		$number = $query->count();

        $this->set('event', $event);
        $this->set('_serialize', ['event']);

        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			    	]);

        $this->set('categories', $categories_new);
        $this->set(compact('subCategories_new'));
        $this->set(compact('address', 'mediapartners', 'sponsors', 'number', 'likes', 'galaries'));
    }

    public function adminindex()
    {
		//$this->viewBuilder()->layout('event_home');
		$this->paginate = [
            'contain' => ['Users', 'Categories',]
        ];
        $events = $this->paginate($this->Events);
        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			]);
        $this->loadModel('Address');
        $eventss = array();
        $i = 0;
        foreach ($events as $event) {
        	 $address= $this->Address->find('all', array('conditions' => array('events_id'=> $event['id'])));
        	 $event['Address'] = $address->first();
        	 $eventss[$i] =$event;
        	 $i++;
        }
        
        $users_id = $this->Auth->user('id');
        $this->set(compact('eventss'));
        $this->set(compact('address'));
        $this->set('categories', $categories_new);
        $this->set('usersId', $users_id);
        $this->set(compact('subCategories_new'));
    }
	
	/**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function thebigbeachmarathon($activation_key = null)
    {
    	$this->loadModel('Invitefriends');
    	$invitefriends = $this->Invitefriends->find('all',array('conditions'=>array('activation_key'=>$activation_key)));
    	$invitefriends = $invitefriends->first();

    	if(isset($invitefriends['events_id']))
    	{
    		$id = $invitefriends['events_id'];
    	} else
    	{
    		return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    	}
    
		$this->viewBuilder()->layout('event_home');
        $event = $this->Events->get($id, [
            'contain' => ['Users', 'Categories']
        ]);
        
        $this->loadModel('Address');
        $address = $this->Address->find('all', ['conditions' => ['events_id' => $id]]);
        $address = $address->first();
        $this->loadModel('Mediapartners');
        $mediapartners = $this->Mediapartners->find('all', ['conditions' => ['events_id' => $id]]);
        $this->loadModel('Galaries');
        $galaries = $this->Galaries->find('all', ['conditions' => ['events_id' => $id]]);

        $this->loadModel('Sponsors');
        $sponsors = $this->Sponsors->find('all', ['conditions' => ['events_id' => $id]]);
        $this->loadModel('Likes');
        $likes = $this->Likes->find('all', ['conditions' => ['events_id' => $id]]);
        $query = $this->Likes->find('all', ['select' => 'id',
		    	'conditions' => ['events_id' => $id]]);
		$number = $query->count();

        $this->set('event', $event);
        $this->set('_serialize', ['event']);

        $this->loadModel('Categories');
        $categories_new = $this->Categories->find()->select(['Categories.name', 'Categories.id'])
        	->where(['active' => 1]);

        $this->loadModel('SubCategories');
        $subCategories_new = $this->SubCategories->find('all', ['fields' => 'name',
			    'conditions' => ['active' => 1]
			    	]);

        $this->set('categories', $categories_new);
        $this->set(compact('subCategories_new'));
        $this->set(compact('address', 'mediapartners', 'sponsors', 'number', 'likes', 'galaries'));
    }
	
}

