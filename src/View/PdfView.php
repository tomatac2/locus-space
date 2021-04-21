<?php

 

namespace App\View;

 

use Cake\Event\EventManager;

use Cake\Network\Request;

use Cake\Network\Response;

use Cake\View\View;

use PHPPdf\Core\FacadeBuilder;

use PHPPdf\DataSource\DataSource;


/**
015.
* View to handle PDF requests
016.
* using psliwa/php-pdf
017.
*
018.
* Covers incoming requests with '.pdf' extension.
019.
*/
class PdfView extends View {

/**
023.
* Controller variables to provide as View class properties
024.
*
025.
* @var array
026.
*/

protected $_passedVars = [

'autoLayout', 'ext', 'helpers', 'layout',

'layoutPath', 'name', 'passedArgs',

'plugin', 'subDir', 'template',

'templatePath', 'theme', 'view', 'viewVars',

];

/**
035.
* View templates subdirectory.
036.
* /pdf
037.
*
038.
* @var string
039.
*/

public $subDir = null;

 

/**
043.
* Layout name for this View.
044.
*
045.
* @var string
046.
*/

public $layout = false;

/**
050.
* Constructor
051.
*
052.
* @param \Cake\Network\Request|null $request Request instance.
053.
* @param \Cake\Network\Response|null $response Response instance.
054.
* @param \Cake\Event\EventManager|null $eventManager Event manager instance.
055.
* @param array $viewOptions View options. cf. $_passedVars
056.
*/

public function __construct(

Request $request = null,

Response $response = null,

EventManager $eventManager = null,

array $viewOptions = []

) {

parent::__construct($request, $response, $eventManager, $viewOptions);

if ($this->subDir === null) {

$this->subDir = 'pdf';

$this->templatePath = str_replace(DS . 'pdf', '', $this->templatePath);

}

 

if (isset($response)) {

$response->type('pdf');

}

 

/**
075.
* Use a custom extension here, to prevent IDE like PHPStorm
076.
* to complain about inspections
077.
*/

$this->_ext = '.xctp';

}

/**
082.
* Renders a PDF view.
083.
*
084.
* Employs Cake\View\View::render() to parse templates,
085.
* builds the PDF from that result and returns this PDF
086.
* with the response object.
087.
**
088.
* @param string $view Rendering view.
089.
* @param string $layout rendering layout.
090.
* @return string Rendered view.
091.
*/

public function render($view = null, $layout = null) {

 

$pathinfo = pathinfo($this->_getViewFileName());

$stylesheetName = $pathinfo['dirname'] . DS . $pathinfo['filename'] . '.style.xml';

$content = parent::render($view, $layout);

$facade = FacadeBuilder::create()->build();

$stylesheetXml = file_get_contents($stylesheetName);

$stylesheet = DataSource::fromString($stylesheetXml);

$content = $facade->render($content, $stylesheet);

return $content;

}

}