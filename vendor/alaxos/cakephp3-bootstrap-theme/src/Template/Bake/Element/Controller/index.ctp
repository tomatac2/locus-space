<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
%>

    /**
    * Index method
    *
    * @return void
    */
    public function index()
    {
<% 
$belongsTo = $this->Bake->aliasExtractor($modelObj, 'BelongsTo'); 
foreach($belongsTo as $i => $bt){
    if(in_array($bt, ['Creator', 'Editor'])){
        unset($belongsTo[$i]);
    }
}
%>
<% if ($belongsTo): %>
        $this->paginate = [
            'contain' => [<%= $this->Bake->stringifyList($belongsTo, ['indent' => false]) %>]
        ];
<% endif; %>
        $this->set('<%= $pluralName %>', $this->paginate($this->Filter->getFilterQuery()));
        $this->set('_serialize', ['<%= $pluralName %>']);
<%
        if(!empty($belongsTo)){
            //add an empty line for clarity
%>
        
<%
        }
        
        $compact = [];
        foreach ($belongsTo as $assoc):
            $association = $modelObj->association($assoc);
            $otherName = $association->target()->alias();
            $otherPlural = $this->_variableName($otherName);
%>
        $<%= $otherPlural %> = $this-><%= $currentModelName %>-><%= $otherName %>->find('list', ['limit' => 200]);
<%
            $compact[] = "'$otherPlural'";
        endforeach;
        
        if(!empty($compact))
        {
%>
        $this->set(compact(<%= join(', ', $compact) %>));
<%
        }
%>
    }
