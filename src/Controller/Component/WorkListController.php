<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Core\Configure;
/**
 * WorkList Controller
 *
 * @property \App\Model\Table\WorkListTable $WorkList
 * @property \Alaxos\Controller\Component\FilterComponent $Filter
 */
class WorkListController extends AppController
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
    function appDetails($id=null , $name = null){
    //   Configure::write('debug', 1);
          $appsDetails = $this->WorkList ->find('all')->where(['WorkList.id'=>$id])
                 ->contain(['ProjectPhotos'])
                         ->first();
           $allApps = $this->WorkList->find('all')
                   ->order(['WorkList.id'=>'ASC'])
                   ->where(['WorkList.id !='=>$id])
              ->select(['id','subject'])
              ->toArray();
      
   //   debug($allApps);
       $this->set(compact('appsDetails','allApps'));
     }
    function OurApps(){
        	//Configure::write('debug', 1);
      $allApps = $this->WorkList->find('all')
              ->select(['id','subject','photo','short_desc'])
              ->toArray();
      
      debug($allApps);
       $this->set(compact('allApps'));
    }
    ////////
    function contact(){
        $this->viewBuilder()->layout('ajax');
            $contact = TableRegistry::get('Contact');
            $newContact = $contact->newEntity();
            $newContact = $contact->patchEntity($newContact , $this->request->data);
             if($contact->save($newContact)):
                 $this->sendMail($this->request->data);
             endif;
        $this->set(compact('newContact'));

    }
    function sendMail ($param){
               $email =  new Email('default');
                 $email->emailFormat('both');
		$email->from(array( $param['email'] => $param['name'] ));
		$email->sender(array($param['email'] => $param['name']));
	        $email->to('INFO@LOCUS-SPACE.COM');    $email->cc('hatemmahmoud2@hotmail.com');
		$email->subject("رسالة جديدة");
              
   try{
			$result = $email->send($param['message']);
		} catch (Exception $ex) {
			// we could not send the email, ignore it
			$result="Could not send registration email to userid-";
		}
        $this->log($result, LOG_DEBUG);
            // save contactUs on home page 
  
    ///////////
        
    }
    function home(){
        $this->viewBuilder()->layout('front');
        $currentPage = "home" ;
         $this->set(compact('currentPage'));
    }
    public function index()
    {
        $this->set('workList', $this->paginate($this->Filter->getFilterQuery()));
        $this->set('_serialize', ['workList']);
    }

    /**
     * View method
     *
     * @param string|null $id Work List id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workList = $this->WorkList->get($id, [
            'contain' => []
        ]);
        $this->set('workList', $workList);
        $this->set('_serialize', ['workList']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workList = $this->WorkList->newEntity();
        if ($this->request->is('post')) {
            $workList = $this->WorkList->patchEntity($workList, $this->request->data);
            if ($this->WorkList->save($workList)) {
                $this->Flash->success(___('the work list has been saved'), ['plugin' => 'Alaxos']);
                return $this->redirect(['action' => 'view', $workList->id]);
            } else {
                $this->Flash->error(___('the work list could not be saved. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        $this->set(compact('workList'));
        $this->set('_serialize', ['workList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Work List id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workList = $this->WorkList->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workList = $this->WorkList->patchEntity($workList, $this->request->data);
            if ($this->WorkList->save($workList)) {
                $this->Flash->success(___('the work list has been saved'), ['plugin' => 'Alaxos']);
                return $this->redirect(['action' => 'view', $workList->id]);
            } else {
                $this->Flash->error(___('the work list could not be saved. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        $this->set(compact('workList'));
        $this->set('_serialize', ['workList']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Work List id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workList = $this->WorkList->get($id);
        
        try
        {
            if ($this->WorkList->delete($workList)) {
                $this->Flash->success(___('the work list has been deleted'), ['plugin' => 'Alaxos']);
            } else {
                $this->Flash->error(___('the work list could not be deleted. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        catch(\Exception $ex)
        {
            if($ex->getCode() == 23000)
            {
                $this->Flash->error(___('the work list could not be deleted as it is still used in the database'), ['plugin' => 'Alaxos']);
            }
            else
            {
                $this->Flash->error(sprintf(__('The work list could not be deleted: %s'), $ex->getMessage()), ['plugin' => 'Alaxos']);
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
            
            $query = $this->WorkList->query();
            $query->delete()->where(['id IN' => $this->request->data['checked_ids']]);
            
            try{
                if ($statement = $query->execute()) {
                    $deleted_total = $statement->rowCount();
                    if($deleted_total == 1){
                        $this->Flash->set(___('the selected work list has been deleted.'), ['element' => 'Alaxos.success']);
                    }
                    elseif($deleted_total > 1){
                        $this->Flash->set(sprintf(__('The %s selected worklist have been deleted.'), $deleted_total), ['element' => 'Alaxos.success']);
                    }
                } else {
                    $this->Flash->set(___('the selected worklist could not be deleted. Please, try again.'), ['element' => 'Alaxos.error']);
                }
            }
            catch(\Exception $ex){
                $this->Flash->set(___('the selected worklist could not be deleted. Please, try again.'), ['element' => 'Alaxos.error', 'params' => ['exception_message' => $ex->getMessage()]]);
            }
        } else {
            $this->Flash->set(___('there was no work list to delete'), ['element' => 'Alaxos.error']);
        }
        
        return $this->redirect(['action' => 'index']);
    }
    
    /**
     * Copy method
     *
     * @param string|null $id Work List id.
     * @return void Redirects on successful copy, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function copy($id = null)
    {
        $workList = $this->WorkList->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workList = $this->WorkList->newEntity();
            $workList = $this->WorkList->patchEntity($workList, $this->request->data);
            if ($this->WorkList->save($workList)) {
                $this->Flash->success(___('the work list has been saved'), ['plugin' => 'Alaxos']);
                return $this->redirect(['action' => 'view', $workList->id]);
            } else {
                $this->Flash->error(___('the work list could not be saved. Please, try again.'), ['plugin' => 'Alaxos']);
            }
        }
        
        $workList->id = $id;
        $this->set(compact('workList'));
        $this->set('_serialize', ['workList']);
    }
}
