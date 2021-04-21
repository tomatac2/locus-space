<?php 
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;


class UploadComponent extends Component {
    
    public $maxfiles = 3;
    
    public function send($data){
        if(!empty($data)){
            if(count ($data)>$this->max_files){
                throw new InternalErrorException ("Error Processing Rquest. Max Number Files Accpet is {$this->max_files},1");
            }
            
            foreach ($data as $file){
                
                $filename = $file['name'];
                  $file_tmp_name = $file['tmp_name'];
                    $dir = WWW_ROOT.'img'.DS.'uploads';
                      $allowed = array('png','jpg','jpeg');
                      
                      if(!in_array(substr(strrchr($filename,'.'),1) , $allowed)){
                          throw new InternalErrorException("Error Processing Request.",1);
                      }elseif(is_uploaded_file($file_tmp_name)){
                          move_uploaded_file($file_tmp_name,$dir.DS.Text::uuid().'-'.$filename);
                      }
            }
        }
    }
    
}