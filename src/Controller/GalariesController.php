<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Galaries Controller
 *
 * @property \App\Model\Table\GalariesTable $Galaries
 */
class GalariesController extends AppController
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
        $galaries = $this->paginate($this->Galaries);

        $this->set(compact('galaries'));
        $this->set('_serialize', ['galaries']);
    }

    /**
     * View method
     *
     * @param string|null $id Galary id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galary = $this->Galaries->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('galary', $galary);
        $this->set('_serialize', ['galary']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galary = $this->Galaries->newEntity();
        if ($this->request->is('post')) {
            
            /////////////////////////////////////////////////////////////////////////
            $galary_file = "";
            if(!empty($this->request->data['galary']))
            {
                $error=array();
                $extension=array("jpeg","jpg","png","gif");
                foreach($this->request->data['galary'] as $key=>$tmp_name)
                {
                    $file_name=$this->request->data['galary'][$key]["name"];
                    $file_tmp=$this->request->data['galary'][$key]["tmp_name"];
                    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                    if(in_array($ext,$extension))
                    {
                        $uploadFolder = WWW_ROOT . 'img/Galary';
                        if( !file_exists($uploadFolder) ){
                            mkdir($uploadFolder);
                        }
                        
                        
                        $filename = str_replace(" ", "-", rand(1, 3000) . $file_name);
                        //move_uploaded_file($file_tmp=$this->request->data['Mediapartners'][$key]["tmp_name"], WWW_ROOT . 'img/Mediapartners' . DS . $filename);
                        if(!file_exists(WWW_ROOT . 'img/Galary' . DS . $filename))
                        {
                            move_uploaded_file($file_tmp=$this->request->data['galary'][$key]["tmp_name"], WWW_ROOT . 'img/Galary' . DS . $filename);
                            $this->request->data['galary'][$key]["name"] = $filename;
                        }
                        else
                        {
                            $filename=basename($file_name,$ext);
                            $newFileName=$filename.time().".".$ext;
                            move_uploaded_file($file_tmp=$this->request->data['galary'][$key]["tmp_name"], WWW_ROOT . 'img/Galary' . DS . $newFileName);
                            $this->request->data['galary'][$key]["name"] = $newFileName;
                        }
                    }
                    else
                    {
                        array_push($error,"$file_name, ");
                    }
                    $galary_file[$key] =  $filename;
                }
            }
            $this->request->data['galary'] = $galary_file;
            //////////////////////////////////////////////////////////////////////////////////////////////////
            $events_id_new = $this->request->data['events_id'];
            foreach ($galary_file as $key => $value) {
                # code...
                $galary = $this->Galaries->newEntity();
                $galary['events_id'] = $events_id_new;
                $galary['galary'] = $value;
                $this->Galaries->save($galary);
            }
            if(isset($this->request->data['note']))
            {
                $this->loadModel('Events');
                $this->Events->updateAll(['note' => $this->request->data['note']], ['id' => $events_id_new]);
                return $this->redirect(['controller' => 'events','action' => 'view',$events_id_new]);
            } else
                return $this->redirect(['action' => 'index']);

        }
        $events = $this->Galaries->Events->find('list', ['limit' => 200]);
        $this->set(compact('galary', 'events'));
        $this->set('_serialize', ['galary']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Galary id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galary = $this->Galaries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galary = $this->Galaries->patchEntity($galary, $this->request->data);
            if ($this->Galaries->save($galary)) {
                $this->Flash->success(__('The galary has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The galary could not be saved. Please, try again.'));
            }
        }
        $events = $this->Galaries->Events->find('list', ['limit' => 200]);
        $this->set(compact('galary', 'events'));
        $this->set('_serialize', ['galary']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Galary id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galary = $this->Galaries->get($id);
        if ($this->Galaries->delete($galary)) {
            $this->Flash->success(__('The galary has been deleted.'));
        } else {
            $this->Flash->error(__('The galary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
