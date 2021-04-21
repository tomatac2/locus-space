
<?php

namespace App\Controller\Component;

 

use Cake\Controller\Component;

use Cake\Controller\ComponentRegistry;

use Cake\Core\Configure;

use Cake\Controller\Controller;

use Cake\Event\Event;

 

/**
14.
* PDF Component to respond to PDF requests.
15.
*
16.
* Employs  App\View\PdfView to change output from HTML to PDF format.
17.
*/

class PdfComponent extends Component {

 

public $Controller;

 

public $respondAsPdf = false;

 

protected $_defaultConfig = [

'viewClass' => 'Pdf',

'autoDetect' => true

];

 

/**
30.
* Constructor.
31.
*
32.
* @param ComponentRegistry $collection
33.
* @param array $config
34.
*/

public function __construct(ComponentRegistry $collection, $config = []) {

$this->Controller = $collection->getController();

$config += $this->_defaultConfig;
parent::__construct($collection, $config);

}

 

/**
42.
* @inheritdoc
43.
*/

public function initialize(array $config = []) {

if (!$this->_config['autoDetect']) {

return;

}

$this->respondAsPdf = $this->Controller->request->is('pdf');

}

 

/**
52.
* Called before:
53.
* Controller::beforeRender()
54.
* the View class is loaded
55.
* Controller::render()
56.
*
57.
* @param Event $event
58.
* @return void
59.
*/

public function beforeRender(Event $event) {

if (!$this->respondAsPdf) {

return;

}

$this->_respondAsPdf();

}

 

/**
68.
* @return void
69.
*/

protected function _respondAsPdf() {

$this->Controller

->viewBuilder()

->className($this->_config['viewClass']);

}

}