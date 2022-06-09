<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/index.twig */
class __TwigTemplate_c85445ae273962afb3cc1ab9892c73837c29437964532642f72560410009cc4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        echo "<?php
/**
 * @var \\";
        // line 18
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\View\\AppView \$this
 * @var \\";
        // line 19
        echo twig_escape_filter($this->env, ($context["entityClass"] ?? null), "html", null, true);
        echo "[]|\\Cake\\Collection\\CollectionInterface \$";
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo "
 */
?>
";
        // line 22
        $context["fields"] = $this->getAttribute(($context["Bake"] ?? null), "filterFields", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["modelObject"] ?? null), 3 => ($context["indexColumns"] ?? null), 4 => [0 => "binary", 1 => "text"]], "method");
        // line 23
        echo "<nav class=\"large-3 medium-4 columns\" id=\"actions-sidebar\">
    <ul class=\"side-nav\">
        <li class=\"heading\"><?= __('Actions') ?></li>
        <li><?= \$this->Html->link(__('New ";
        // line 26
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'add']) ?></li>
";
        // line 27
        $context["done"] = [];
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 30
                if ((($this->getAttribute($context["details"], "navLink", []) &&  !($this->getAttribute($context["details"], "controller", []) === $this->getAttribute(($context["_view"] ?? null), "name", []))) && !twig_in_filter($this->getAttribute($context["details"], "controller", []), ($context["done"] ?? null)))) {
                    // line 31
                    echo "        <li><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'index']) ?></li>
        <li><?= \$this->Html->link(__('New ";
                    // line 32
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore(Cake\Utility\Inflector::singularize($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'add']) ?></li>
";
                    // line 33
                    $context["done"] = twig_array_merge(($context["done"] ?? null), [0 => $this->getAttribute($context["details"], "controller", [])]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>
</nav>
<div class=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " index large-9 medium-8 columns content\">
    <h3><?= __('";
        // line 40
        echo twig_escape_filter($this->env, ($context["pluralHumanName"] ?? null), "html", null, true);
        echo "') ?></h3>
    <table cellpadding=\"0\" cellspacing=\"0\">
        <thead>
            <tr>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 45
            echo "                <th scope=\"col\"><?= \$this->Paginator->sort('";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "') ?></th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (\$";
        // line 51
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " as \$";
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "): ?>
            <tr>
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 54
            $context["isKey"] = false;
            // line 55
            if ($this->getAttribute(($context["associations"] ?? null), "BelongsTo", [])) {
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "BelongsTo", []));
                foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                    if (($context["field"] == $this->getAttribute($context["details"], "foreignKey", []))) {
                        // line 57
                        $context["isKey"] = true;
                        // line 58
                        echo "                <td><?= \$";
                        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                        echo "->has('";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                        echo "') ? \$this->Html->link(\$";
                        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "displayField", []), "html", null, true);
                        echo ", ['controller' => '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                        echo "', 'action' => 'view', \$";
                        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details"], "primaryKey", []), 0, [], "array"), "html", null, true);
                        echo "]) : '' ?></td>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 61
            if ( !(($context["isKey"] ?? null) === true)) {
                // line 62
                $context["columnData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", [0 => $context["field"], 1 => ($context["schema"] ?? null)], "method");
                // line 63
                if (!twig_in_filter($this->getAttribute(($context["columnData"] ?? null), "type", []), [0 => "integer", 1 => "float", 2 => "decimal", 3 => "biginteger", 4 => "smallinteger", 5 => "tinyinteger"])) {
                    // line 64
                    echo "                <td><?= h(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                } else {
                    // line 66
                    echo "                <td><?= \$this->Number->format(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        $context["pk"] = ((("\$" . ($context["singularVar"] ?? null)) . "->") . $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"));
        // line 71
        echo "                <td class=\"actions\">
                    <?= \$this->Html->link(__('View'), ['action' => 'view', ";
        // line 72
        echo ($context["pk"] ?? null);
        echo "]) ?>
                    <?= \$this->Html->link(__('Edit'), ['action' => 'edit', ";
        // line 73
        echo ($context["pk"] ?? null);
        echo "]) ?>
                    <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', ";
        // line 74
        echo ($context["pk"] ?? null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
        echo ($context["pk"] ?? null);
        echo ")]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class=\"paginator\">
        <ul class=\"pagination\">
            <?= \$this->Paginator->first('<< ' . __('first')) ?>
            <?= \$this->Paginator->prev('< ' . __('previous')) ?>
            <?= \$this->Paginator->numbers() ?>
            <?= \$this->Paginator->next(__('next') . ' >') ?>
            <?= \$this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= \$this->Paginator->counter(['format' => __('Page ";
        // line 88
        echo "{{";
        echo "page";
        echo "}}";
        echo " of ";
        echo "{{";
        echo "pages";
        echo "}}";
        echo ", showing ";
        echo "{{";
        echo "current";
        echo "}}";
        echo " record(s) out of ";
        echo "{{";
        echo "count";
        echo "}}";
        echo " total')]) ?></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 88,  216 => 74,  212 => 73,  208 => 72,  205 => 71,  203 => 70,  190 => 66,  182 => 64,  180 => 63,  178 => 62,  176 => 61,  149 => 58,  147 => 57,  142 => 56,  140 => 55,  138 => 54,  134 => 53,  127 => 51,  121 => 47,  112 => 45,  108 => 44,  101 => 40,  97 => 39,  93 => 37,  82 => 33,  76 => 32,  69 => 31,  67 => 30,  63 => 29,  59 => 28,  57 => 27,  53 => 26,  48 => 23,  46 => 22,  38 => 19,  34 => 18,  30 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
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
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php
/**
 * @var \\{{ namespace }}\\View\\AppView \$this
 * @var \\{{ entityClass }}[]|\\Cake\\Collection\\CollectionInterface \${{ pluralVar }}
 */
?>
{% set fields = Bake.filterFields(fields, schema, modelObject, indexColumns, ['binary', 'text']) %}
<nav class=\"large-3 medium-4 columns\" id=\"actions-sidebar\">
    <ul class=\"side-nav\">
        <li class=\"heading\"><?= __('Actions') ?></li>
        <li><?= \$this->Html->link(__('New {{ singularHumanName }}'), ['action' => 'add']) ?></li>
{% set done = [] %}
{% for type, data in associations %}
{% for alias, details in data %}
{% if details.navLink and details.controller is not same as(_view.name) and details.controller not in done %}
        <li><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index']) ?></li>
        <li><?= \$this->Html->link(__('New {{ alias|singularize|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add']) ?></li>
{% set done = done|merge([details.controller]) %}
{% endif %}
{% endfor %}
{% endfor %}
    </ul>
</nav>
<div class=\"{{ pluralVar }} index large-9 medium-8 columns content\">
    <h3><?= __('{{ pluralHumanName }}') ?></h3>
    <table cellpadding=\"0\" cellspacing=\"0\">
        <thead>
            <tr>
{% for field in fields %}
                <th scope=\"col\"><?= \$this->Paginator->sort('{{ field }}') ?></th>
{% endfor %}
                <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (\${{ pluralVar }} as \${{ singularVar }}): ?>
            <tr>
{% for field in fields %}
{% set isKey = false %}
{% if associations.BelongsTo %}
{% for alias, details in associations.BelongsTo if field == details.foreignKey %}
{% set isKey = true %}
                <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
{% endfor %}
{% endif %}
{% if isKey is not same as(true) %}
{% set columnData = Bake.columnData(field, schema) %}
{% if columnData.type not in ['integer', 'float', 'decimal', 'biginteger', 'smallinteger', 'tinyinteger'] %}
                <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
{% else %}
                <td><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></td>
{% endif %}
{% endif %}
{% endfor %}
{% set pk = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
                <td class=\"actions\">
                    <?= \$this->Html->link(__('View'), ['action' => 'view', {{ pk|raw }}]) ?>
                    <?= \$this->Html->link(__('Edit'), ['action' => 'edit', {{ pk|raw }}]) ?>
                    <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', {{ pk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ pk|raw }})]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class=\"paginator\">
        <ul class=\"pagination\">
            <?= \$this->Paginator->first('<< ' . __('first')) ?>
            <?= \$this->Paginator->prev('< ' . __('previous')) ?>
            <?= \$this->Paginator->numbers() ?>
            <?= \$this->Paginator->next(__('next') . ' >') ?>
            <?= \$this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= \$this->Paginator->counter(['format' => __('Page {{ '{{' }}page{{ '}}' }} of {{ '{{' }}pages{{ '}}' }}, showing {{ '{{' }}current{{ '}}' }} record(s) out of {{ '{{' }}count{{ '}}' }} total')]) ?></p>
    </div>
</div>
", "/home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/index.twig", "/home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/index.twig");
    }
}
