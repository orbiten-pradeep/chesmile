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
use Cake\Utility\Inflector;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 */
class BannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    { $this->viewBuilder()->layout('admin');
        $this->paginate = [
            'contain' => ['Events']
        ];
        $banners = $this->paginate($this->Banners);
        $page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
        $this->set(compact('banners'));
        $this->set('_serialize', ['banners']);
    }
    /**
     * IndexView method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
     public function indexview()
    {
        $this->viewBuilder()->layout('admin');
       $this->paginate = [
             'contain' => ['Events']
         ];
        $this->loadModel('Events');
        $banner= $this->paginate['conditions'] = array('Events.date >'=>date("Y-m-d") , 'Banners.active' => '1');
        $banners = $this->paginate($this->Banners);
       $this->set(compact('banners','banner'));
       $this->set('_serialize', ['banners']);
       $this->set('_serialize', ['banner']);
    }
    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
         $this->viewBuilder()->layout('admin');
        $banner = $this->Banners->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('banner', $banner);
        $this->set('_serialize', ['banner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
         $this->viewBuilder()->layout('admin');
         $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            if(!empty($this->request->data['image']))
            {
                $banners = $this->request->data['image'];
                $ext = substr(strtolower(strrchr($banners['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions
                if($banners['size']/1024 > '2048')
                {
                    $this->Flash->error(__('"imageLogs", __METHOD__." The uploaded file exceeds the MAX_FILE_SIZE(2MB) '));
                    $errCheck = true;
                }
                else if(in_array($ext, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    $uploadFolder = WWW_ROOT . 'img/banners_hme';
                    if( !file_exists($uploadFolder) ){
                        mkdir($uploadFolder);
                    }
                    $filename = str_replace(" ", "-", rand(1, 3000) . $banners['name']);
                    move_uploaded_file($banners['tmp_name'], WWW_ROOT . 'img/banners_hme' . DS . $filename);
                     //prepare the filename for database entry
                    $this->request->data['image']['name'] = $filename;
                    $banners = $filename;
                }
            }
             if(!is_null($banners))
            {
                $this->request->data['image'] = $banners;
            }
            $banner = $this->Banners->patchEntity($banner, $this->request->data);
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The banner could not be saved. Please, try again.'));
            }
        }
        $events = $this->Banners->Events->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'events'));
        $this->set('_serialize', ['banner']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
         $this->viewBuilder()->layout('admin');
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->data);
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The banner could not be saved. Please, try again.'));
            }
        }
        $events = $this->Banners->Events->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'events'));
        $this->set('_serialize', ['banner']);
    }
/**
     * Activate method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function activate($id = null)
    {
       
        $this->request->allowMethod(['post', 'activate']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->updateAll(['active' => '1'], ['id' => $id])) {
            $this->Flash->success(__('The Banner has been Activated.'));
        } else {
            $this->Flash->error(__('The Banner could not be Activated. Please, try again.'));
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
    public function deactivate($id = null)
    {
       
        $this->request->allowMethod(['post', 'activate']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->updateAll(['active' => '2'], ['id' => $id])) {
            $this->Flash->success(__('The Banner has been Dectivated.'));
        } else {
            $this->Flash->error(__('The Banner could not be Deactivated. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);

    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('The banner has been deleted.'));
        } else {
            $this->Flash->error(__('The banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
