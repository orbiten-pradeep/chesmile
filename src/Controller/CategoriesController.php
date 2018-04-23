<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 */
class CategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('admin');
        $categories = $this->paginate($this->Categories);
		$page = (isset($this->request->query['page'])) ? $this->request->query['page'] : 0;
        $this->set(compact('page'));
        $this->set(compact('categories'));
        $this->set('_serialize', ['categories']);
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin');
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);

        $this->set('category', $category);
        $this->set('_serialize', ['category']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('admin');
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {

            if(!empty($this->request->data['card']))
            {
                $banner = $this->request->data['card'];
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
                    $uploadFolder = WWW_ROOT . 'img/card';
                    if( !file_exists($uploadFolder) ){
                        mkdir($uploadFolder);
                    }
                    $filename = str_replace(" ", "-", rand(1, 3000) . $banner['name']);
                    move_uploaded_file($banner['tmp_name'], WWW_ROOT . 'img/card' . DS . $filename);
                     //prepare the filename for database entry
                    $this->request->data['card']['name'] = $filename;
                    $banner = $filename;
                }
            }

            if(!is_null($banner))
            {
                $this->request->data['card'] = $banner;
            }
            $category = $this->Categories->patchEntity($category, $this->request->data);

            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('category'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('admin');
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            if(!empty($this->request->data['card']))
            {
                $banner = $this->request->data['card'];

                if(isset($banner['size']))
                {
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
                        $uploadFolder = WWW_ROOT . 'img/card';
                        if( !file_exists($uploadFolder) ){
                            mkdir($uploadFolder);
                        }
                        $filename = str_replace(" ", "-", rand(1, 3000) . $banner['name']);
                        move_uploaded_file($banner['tmp_name'], WWW_ROOT . 'img/card' . DS . $filename);
                         //prepare the filename for database entry
                        $this->request->data['card']['name'] = $filename;
                        $banner = $filename;
                    }
                }
            }

            if(!is_null($banner))
            {
                $this->request->data['card'] = $banner;
            }           

            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('category'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
   /**
     * Activate method
     *
     * @param string|null $id category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function activate($id = null)
    {
       
        $this->request->allowMethod(['post', 'activate']);
        $category = $this->Categories->get($id);
        if ($this->Categories->updateAll(['active' => '1'], ['id' => $id])) {
            $this->Flash->success(__('The Category has been Activated.'));
        } else {
            $this->Flash->error(__('The Category could not be Activated!.. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);

    }
    /**
     * Deactivate method
     *
     * @param string|null $id category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function deactivate($id = null)
    {
       
        $this->request->allowMethod(['post', 'deactivate']);
        $category = $this->Categories->get($id);
        if ($this->Categories->updateAll(['active' => '2'], ['id' => $id])) {
            $this->Flash->success(__('The Category has been Dectivated.'));
        } else {
            $this->Flash->error(__('The Category could not be Deactivated. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
