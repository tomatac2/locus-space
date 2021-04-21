<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller {

	public $components = ['Flash', 'Auth', 'Usermgmt.UserAuth'/*, 'Security', 'Csrf'*/];
	public $helpers = ['Usermgmt.UserAuth', 'Usermgmt.Image', 'Form'];
	
	/* Override functions */
	public function paginate($object = null) {
		$sessionKey = sprintf('UserAuth.Search.%s.%s', $this->request['controller'], $this->request['action']);
		if($this->request->session()->check($sessionKey)) {
			$persistedData = $this->request->session()->read($sessionKey);
			if(!empty($persistedData['page_limit'])) {
				$this->paginate['limit'] = $persistedData['page_limit'];
			}
		}
		return parent::paginate($object);
	
         
                        }
public function beforeFilter(Event $event){
               $this->viewBuilder()->layout('front');

  

//$this->viewBuilder()->none;
}   
	public function beforeRender(Event $event) {
                              $this->loadModel('Users');
                       
                          
                         //  $alramShorttrail = TableRegistry::get('ShortTrials');
                         
                              

      $user = $this->Users->find('all')->where(['Users.id'=>  $this->Auth->user('id')])->toarray();
      
      ///////////////////////////////////////rowMaterials status ////////////////////////////////////////////////////
      
  
  
     $this->set(compact('user')); 
    
		if(!array_key_exists('_serialize', $this->viewVars) && in_array($this->response->type(), ['application/json', 'application/xml'])) {
			$this->set('_serialize', true);
		}
                
                  $this->set('Auth', $this->Auth);
              
	}
 
 
        
                }