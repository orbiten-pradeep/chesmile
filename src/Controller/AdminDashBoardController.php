<<<<<<< .mine
<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminDashBoard Controller
 *
 * @property \App\Model\Table\AdminDashBoardTable $AdminDashBoard
 */
class AdminDashBoardController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	$this->viewBuilder()->layout('admin');
        
         $this->loadModel('Events');
         // $banner= $this->paginate['conditions'] = array('Events.date >'=>date("Y-m-d") , 'Banners.active' => '1');
        $numevent = $this->Events->find()->where(['active' =>1])->count();
         $ticevent = $this->Events->find()->where(['register_online' => 1])->count();
        $numbevent = $this->Events->find()->where(['active' => 0])->count();
        $upevent = $this->Events->find()->where([ 'date >'=>date("Y-m-d") ])->count();
         if(!empty($this->Auth->user('id')))
        {
            $users_id = $this->Auth->user('id');
           // $this->paginate['conditions'] = array("Events.user_id" => $users_id);
             $orgevent = $this->Events->find()->where(["Events.user_id" => $users_id])->count();
             $orgactiveevent = $this->Events->find()->where(["Events.user_id" => $users_id,'active' => 1])->count();
            $orgwaitevent = $this->Events->find()->where(["Events.user_id" => $users_id,'active' => 0])->count();
             $orgpaidevent = $this->Events->find()->where(["Events.user_id" => $users_id,'register_online' => 1])->count();
              $orgfreeevent = $this->Events->find()->where(["Events.user_id" => $users_id,'register_online' => 0])->count();
             $uporgevent = $this->Events->find()->where(["Events.user_id" => $users_id,'date >' => date("Y-m-d") ])->count();       
        }

        $this->loadModel('Users');
         $neworg = $this->Users->find()->where(['created >'=> date("Y-m-d"),'group_id' => 2])->count();
        $newuser = $this->Users->find()->where(['created >'=> date("Y-m-d")])->count();
        $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
        $yesuser = $this->Users->find()->where(['created'=> $yesterday])->count();
           $yesorg = $this->Users->find()->where(['created'=> $yesterday,'group_id' => 2])->count();
        $week = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-7,date("Y")));
        $weekuser = $this->Users->find()->where(['created'=> $week ])->count();
         $weekorg = $this->Users->find()->where(['created'=> $week ,'group_id' => 2])->count();
        $number = $this->Users->find()->where(['group_id' => 1])->count();
         $numorg = $this->Users->find()->where(['group_id' => 2])->count();

        $users = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 2 )]));
          $managers = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 6 )]));
  $this->loadModel('Contact');
        $numcontact = $this->Contact->find()->where(['id' != 0])->count();
        $newcontact = $this->Contact->find()->where(['created >'=> date("Y-m-d")])->count();
        $yescontact = $this->Contact->find()->where(['created'=> $yesterday])->count();
        $weekcontact = $this->Contact->find()->where(['created'=> $week ])->count();
       
 $this->loadModel('Tickets');
        $numtic = $this->Tickets->find()->where(['status' => 'success'])->count();
        $tictoday = $this->Tickets->find()->where(['status' => 'success','created >'=> date("Y-m-d")])->count();
        $ticyes = $this->Tickets->find()->where(['status' => 'success','created'=> $yesterday])->count();
        $ticweek = $this->Tickets->find()->where(['status' => 'success','created'=> $week ])->count();
        $month = date("Y-m-d", mktime(0, 0, 0, date("m")-1 , date("d"),date("Y")));
        $year = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")-1));
        $ticmonth = $this->Tickets->find()->where(['status' => 'success','created'=> $week])->count();
        $ticyr = $this->Tickets->find()->where(['status' => 'success','created'=> $week])->count();
       
 $this->paginate = [
            'contain' => ['Events']
        ];
        if(!empty($this->Auth->user('id')))
        {
            $users_id = $this->Auth->user('id');
            $fullname = $this->Auth->user('fullname');
            $email = $this->Auth->user('email');
            $this->paginate['conditions'] = array("Events.user_id" => $users_id);
        }
        $filter = false;
        $this->paginate['order'] = array('Tickets.created' => 'desc');
        $orgeventtic = $this->paginate($this->Tickets)->count();

       $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
          $this->set(compact('users'));
        $this->set('_serialize', ['users']);

        $this->set(compact('number','numevent','numcontact','numtic','numbevent','upevent','newuser','yesuser','weekuser','tictoday','ticyes','ticweek','ticmonth','ticyr','numorg','managers','orgevent','orgwaitevent','uporgevent','orgactiveevent','neworg','yesorg','weekorg','newcontact','weekcontact','yescontact','ticevent','orgpaidevent','orgfreeevent','orgeventtic'));
        
        //$adminDashBoard = $this->paginate($this->AdminDashBoard);

        //$this->set(compact('adminDashBoard'));
        //$this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * View method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);

        $this->set('adminDashBoard', $adminDashBoard);
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminDashBoard = $this->AdminDashBoard->newEntity();
        if ($this->request->is('post')) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminDashBoard = $this->AdminDashBoard->get($id);
        if ($this->AdminDashBoard->delete($adminDashBoard)) {
            $this->Flash->success(__('The admin dash board has been deleted.'));
        } else {
            $this->Flash->error(__('The admin dash board could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
||||||| .r370
<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminDashBoard Controller
 *
 * @property \App\Model\Table\AdminDashBoardTable $AdminDashBoard
 */
class AdminDashBoardController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	$this->viewBuilder()->layout('admin');
        //$adminDashBoard = $this->paginate($this->AdminDashBoard);

        //$this->set(compact('adminDashBoard'));
        //$this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * View method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);

        $this->set('adminDashBoard', $adminDashBoard);
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminDashBoard = $this->AdminDashBoard->newEntity();
        if ($this->request->is('post')) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminDashBoard = $this->AdminDashBoard->get($id);
        if ($this->AdminDashBoard->delete($adminDashBoard)) {
            $this->Flash->success(__('The admin dash board has been deleted.'));
        } else {
            $this->Flash->error(__('The admin dash board could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
=======
<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminDashBoard Controller
 *
 * @property \App\Model\Table\AdminDashBoardTable $AdminDashBoard
 */
class AdminDashBoardController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	$this->viewBuilder()->layout('admin');
        
         $this->loadModel('Events');
         // $banner= $this->paginate['conditions'] = array('Events.date >'=>date("Y-m-d") , 'Banners.active' => '1');
        $numevent = $this->Events->find()->where(['active' =>1])->count();
         $ticevent = $this->Events->find()->where(['register_online' => 1])->count();
        $numbevent = $this->Events->find()->where(['active' => 0])->count();
        $upevent = $this->Events->find()->where([ 'date >'=>date("Y-m-d") ])->count();
         if(!empty($this->Auth->user('id')))
        {
            $users_id = $this->Auth->user('id');
           // $this->paginate['conditions'] = array("Events.user_id" => $users_id);
             $orgevent = $this->Events->find()->where(["Events.user_id" => $users_id])->count();
             $orgactiveevent = $this->Events->find()->where(["Events.user_id" => $users_id,'active' => 1])->count();
            $orgwaitevent = $this->Events->find()->where(["Events.user_id" => $users_id,'active' => 0])->count();
             $orgpaidevent = $this->Events->find()->where(["Events.user_id" => $users_id,'register_online' => 1])->count();
              $orgfreeevent = $this->Events->find()->where(["Events.user_id" => $users_id,'register_online' => 0])->count();
             $uporgevent = $this->Events->find()->where(["Events.user_id" => $users_id,'date >' => date("Y-m-d") ])->count();       
        }

        $this->loadModel('Users');
         $neworg = $this->Users->find()->where(['created >'=> date("Y-m-d"),'group_id' => 2])->count();
        $newuser = $this->Users->find()->where(['created >'=> date("Y-m-d")])->count();
        $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
        $yesuser = $this->Users->find()->where(['created'=> $yesterday])->count();
           $yesorg = $this->Users->find()->where(['created'=> $yesterday,'group_id' => 2])->count();
        $week = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-7,date("Y")));
        $weekuser = $this->Users->find()->where(['created'=> $week ])->count();
         $weekorg = $this->Users->find()->where(['created'=> $week ,'group_id' => 2])->count();
        $number = $this->Users->find()->where(['group_id' => 1])->count();
         $numorg = $this->Users->find()->where(['group_id' => 2])->count();

        $users = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 2 )]));
          $managers = $this->paginate($this->Users->find('all',['limit' => 200, 'conditions' => array('group_id' => 6 )]));
  $this->loadModel('Contact');
        $numcontact = $this->Contact->find()->where(['id' != 0])->count();
        $newcontact = $this->Contact->find()->where(['created >'=> date("Y-m-d")])->count();
        $yescontact = $this->Contact->find()->where(['created'=> $yesterday])->count();
        $weekcontact = $this->Contact->find()->where(['created'=> $week ])->count();
       
 $this->loadModel('Tickets');
        $numtic = $this->Tickets->find()->where(['status' => 'success'])->count();
        $tictoday = $this->Tickets->find()->where(['status' => 'success','created >'=> date("Y-m-d")])->count();
        $ticyes = $this->Tickets->find()->where(['status' => 'success','created'=> $yesterday])->count();
        $ticweek = $this->Tickets->find()->where(['status' => 'success','created'=> $week ])->count();
        $month = date("Y-m-d", mktime(0, 0, 0, date("m")-1 , date("d"),date("Y")));
        $year = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")-1));
        $ticmonth = $this->Tickets->find()->where(['status' => 'success','created'=> $week])->count();
        $ticyr = $this->Tickets->find()->where(['status' => 'success','created'=> $week])->count();
       
 $this->paginate = [
            'contain' => ['Events']
        ];
        if(!empty($this->Auth->user('id')))
        {
            $users_id = $this->Auth->user('id');
            $fullname = $this->Auth->user('fullname');
            $email = $this->Auth->user('email');
            $this->paginate['conditions'] = array("Events.user_id" => $users_id);
        }
        $filter = false;
        $this->paginate['order'] = array('Tickets.created' => 'desc');
        $orgeventtic = $this->paginate($this->Tickets)->count();

       $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
          $this->set(compact('users'));
        $this->set('_serialize', ['users']);

        $this->set(compact('number','numevent','numcontact','numtic','numbevent','upevent','newuser','yesuser','weekuser','tictoday','ticyes','ticweek','ticmonth','ticyr','numorg','managers','orgevent','orgwaitevent','uporgevent','orgactiveevent','neworg','yesorg','weekorg','newcontact','weekcontact','yescontact','ticevent','orgpaidevent','orgfreeevent','orgeventtic'));
        
        //$adminDashBoard = $this->paginate($this->AdminDashBoard);

        //$this->set(compact('adminDashBoard'));
        //$this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * View method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);

        $this->set('adminDashBoard', $adminDashBoard);
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminDashBoard = $this->AdminDashBoard->newEntity();
        if ($this->request->is('post')) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminDashBoard = $this->AdminDashBoard->get($id);
        if ($this->AdminDashBoard->delete($adminDashBoard)) {
            $this->Flash->success(__('The admin dash board has been deleted.'));
        } else {
            $this->Flash->error(__('The admin dash board could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
>>>>>>> .r439
