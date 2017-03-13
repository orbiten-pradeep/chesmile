<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mediapartners Controller
 *
 * @property \App\Model\Table\MediapartnersTable $Mediapartners
 */
class MediapartnersController extends AppController
{

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
        $mediapartners = $this->paginate($this->Mediapartners);

        $this->set(compact('mediapartners'));
        $this->set('_serialize', ['mediapartners']);
    }

    /**
     * View method
     *
     * @param string|null $id Mediapartner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mediapartner = $this->Mediapartners->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('mediapartner', $mediapartner);
        $this->set('_serialize', ['mediapartner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mediapartner = $this->Mediapartners->newEntity();
        if ($this->request->is('post')) {
            //debug($this->request->data); exit(0);
        	$file = $this->request->data['MediaPartners'];
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
	            $uploadFolder = WWW_ROOT . 'img/Mediapartners';
	        	if( !file_exists($uploadFolder) ){
			        mkdir($uploadFolder);
			    }
	            $filename = str_replace(" ", "-", rand(1, 3000) . $file['name']);
	            move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/Mediapartners' . DS . $filename);
	             //prepare the filename for database entry
                $this->request->data['MediaPartners'] = $filename;
	        }
  			if (!$errCheck)
  			{
	        	$mediapartner = $this->Mediapartners->patchEntity($mediapartner, $this->request->data);
	            if ($this->Mediapartners->save($mediapartner)) {
	                $this->Flash->success(__('The mediapartner has been saved.'));
	
	                return $this->redirect(['action' => 'index']);
	            } else {
	                $this->Flash->error(__('The mediapartner could not be saved. Please, try again.'));
	            }
  			}
        }
        $events = $this->Mediapartners->Events->find('list', ['limit' => 200]);
        $this->set(compact('mediapartner', 'events'));
        $this->set('_serialize', ['mediapartner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mediapartner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mediapartner = $this->Mediapartners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mediapartner = $this->Mediapartners->patchEntity($mediapartner, $this->request->data);
            if ($this->Mediapartners->save($mediapartner)) {
                $this->Flash->success(__('The mediapartner has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mediapartner could not be saved. Please, try again.'));
            }
        }
        $events = $this->Mediapartners->Events->find('list', ['limit' => 200]);
        $this->set(compact('mediapartner', 'events'));
        $this->set('_serialize', ['mediapartner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mediapartner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mediapartner = $this->Mediapartners->get($id);
        if ($this->Mediapartners->delete($mediapartner)) {
            $this->Flash->success(__('The mediapartner has been deleted.'));
        } else {
            $this->Flash->error(__('The mediapartner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
