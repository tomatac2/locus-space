<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectPhotos Controller
 *
 * @property \App\Model\Table\ProjectPhotosTable $ProjectPhotos
 * @property \Alaxos\Controller\Component\FilterComponent $Filter
 */
class ProjectPhotosController extends AppController
{

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = ['Alaxos.AlaxosHtml', 'Alaxos.AlaxosForm', 'Alaxos.Navbars'];

    /**
     * Components
     *
     * @var array
     */
    public $components = ['Alaxos.Filter'];

    /**
    * Index method
    *
    * @return void
    */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WorkLists']
        ];
        $this->set('projectPhotos', $this->paginate($this->Filter->getFilterQuery()));
        $this->set('_serialize', ['projectPhotos']);
        
        $workLists = $this->ProjectPhotos->WorkLists->find('list', ['limit' => 200]);
        $this->set(compact('workLists'));
    }

    /**
     * View method
     *
     * @param string|null $id Project Photo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectPhoto = $this->ProjectPhotos->get($id, [
            'contain' => ['WorkLists']
        ]);
        $this->set('projectPhoto', $projectPhoto);
        $this->set('_serialize', ['projectPhoto']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectPhoto = $this->ProjectPhotos->newEntity();
        if ($this->request->is('post')) {
            $projectPhoto = $this->ProjectPhotos->patchEntity($projectPhoto, $this->request->data);
            if ($this->ProjectPhotos->save($projectPhoto)) {
                $this->Flash->success(___('the project photo has been saved'), ['plugin' => 'Alaxos']);
                return $this->redirect(['action' => 'view', $projectPhoto->id]);
            } else {
                $this->Flash->error(___('the project photo could not be saved. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        $workLists = $this->ProjectPhotos->WorkLists->find('list', ['limit' => 200]);
        $this->set(compact('projectPhoto', 'workLists'));
        $this->set('_serialize', ['projectPhoto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Project Photo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectPhoto = $this->ProjectPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectPhoto = $this->ProjectPhotos->patchEntity($projectPhoto, $this->request->data);
            if ($this->ProjectPhotos->save($projectPhoto)) {
                $this->Flash->success(___('the project photo has been saved'), ['plugin' => 'Alaxos']);
                return $this->redirect(['action' => 'view', $projectPhoto->id]);
            } else {
                $this->Flash->error(___('the project photo could not be saved. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        $workLists = $this->ProjectPhotos->WorkLists->find('list', ['limit' => 200]);
        $this->set(compact('projectPhoto', 'workLists'));
        $this->set('_serialize', ['projectPhoto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project Photo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectPhoto = $this->ProjectPhotos->get($id);
        
        try
        {
            if ($this->ProjectPhotos->delete($projectPhoto)) {
                $this->Flash->success(___('the project photo has been deleted'), ['plugin' => 'Alaxos']);
            } else {
                $this->Flash->error(___('the project photo could not be deleted. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        catch(\Exception $ex)
        {
            if($ex->getCode() == 23000)
            {
                $this->Flash->error(___('the project photo could not be deleted as it is still used in the database'), ['plugin' => 'Alaxos']);
            }
            else
            {
                $this->Flash->error(sprintf(__('The project photo could not be deleted: %s'), $ex->getMessage()), ['plugin' => 'Alaxos']);
            }
        }
        
        return $this->redirect(['action' => 'index']);
    }
    
    /**
     * Delete all method
     */
    public function delete_all() {
        $this->request->allowMethod('post', 'delete');
        
        if(isset($this->request->data['checked_ids']) && !empty($this->request->data['checked_ids'])){
            
            $query = $this->ProjectPhotos->query();
            $query->delete()->where(['id IN' => $this->request->data['checked_ids']]);
            
            try{
                if ($statement = $query->execute()) {
                    $deleted_total = $statement->rowCount();
                    if($deleted_total == 1){
                        $this->Flash->set(___('the selected project photo has been deleted.'), ['element' => 'Alaxos.success']);
                    }
                    elseif($deleted_total > 1){
                        $this->Flash->set(sprintf(__('The %s selected projectphotos have been deleted.'), $deleted_total), ['element' => 'Alaxos.success']);
                    }
                } else {
                    $this->Flash->set(___('the selected projectphotos could not be deleted. Please, try again.'), ['element' => 'Alaxos.error']);
                }
            }
            catch(\Exception $ex){
                $this->Flash->set(___('the selected projectphotos could not be deleted. Please, try again.'), ['element' => 'Alaxos.error', 'params' => ['exception_message' => $ex->getMessage()]]);
            }
        } else {
            $this->Flash->set(___('there was no project photo to delete'), ['element' => 'Alaxos.error']);
        }
        
        return $this->redirect(['action' => 'index']);
    }
    
    /**
     * Copy method
     *
     * @param string|null $id Project Photo id.
     * @return void Redirects on successful copy, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function copy($id = null)
    {
        $projectPhoto = $this->ProjectPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectPhoto = $this->ProjectPhotos->newEntity();
            $projectPhoto = $this->ProjectPhotos->patchEntity($projectPhoto, $this->request->data);
            if ($this->ProjectPhotos->save($projectPhoto)) {
                $this->Flash->success(___('the project photo has been saved'), ['plugin' => 'Alaxos']);
                return $this->redirect(['action' => 'view', $projectPhoto->id]);
            } else {
                $this->Flash->error(___('the project photo could not be saved. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        $workLists = $this->ProjectPhotos->WorkLists->find('list', ['limit' => 200]);
        
        $projectPhoto->id = $id;
        $this->set(compact('projectPhoto', 'workLists'));
        $this->set('_serialize', ['projectPhoto']);
    }
}
