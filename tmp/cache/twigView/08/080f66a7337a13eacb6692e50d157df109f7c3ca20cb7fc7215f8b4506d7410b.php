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

/* /home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/view.twig */
class __TwigTemplate_8f939e0bc02b98f683ce9a397bb896c47f8e9050845ce2ada60083b91ab8bf41 extends \Twig\Template
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
        echo " \$";
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "
 */
?>
";
        // line 22
        $context["associations"] = twig_array_merge(["BelongsTo" => [], "HasOne" => [], "HasMany" => [], "BelongsToMany" => []], ($context["associations"] ?? null));
        // line 23
        $context["fieldsData"] = $this->getAttribute(($context["Bake"] ?? null), "getViewFieldsData", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["associations"] ?? null)], "method");
        // line 24
        $context["associationFields"] = $this->getAttribute(($context["fieldsData"] ?? null), "associationFields", []);
        // line 25
        $context["groupedFields"] = $this->getAttribute(($context["fieldsData"] ?? null), "groupedFields", []);
        // line 26
        $context["pK"] = ((("\$" . ($context["singularVar"] ?? null)) . "->") . $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"));
        // line 27
        echo "<nav class=\"large-3 medium-4 columns\" id=\"actions-sidebar\">
    <ul class=\"side-nav\">
        <li class=\"heading\"><?= __('Actions') ?></li>
        <li><?= \$this->Html->link(__('Edit ";
        // line 30
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'edit', ";
        echo ($context["pK"] ?? null);
        echo "]) ?> </li>
        <li><?= \$this->Form->postLink(__('Delete ";
        // line 31
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'delete', ";
        echo ($context["pK"] ?? null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
        echo ($context["pK"] ?? null);
        echo ")]) ?> </li>
        <li><?= \$this->Html->link(__('List ";
        // line 32
        echo twig_escape_filter($this->env, ($context["pluralHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'index']) ?> </li>
        <li><?= \$this->Html->link(__('New ";
        // line 33
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'add']) ?> </li>
";
        // line 34
        $context["done"] = [];
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 37
                if (( !($this->getAttribute($context["details"], "controller", []) === $this->getAttribute(($context["_view"] ?? null), "name", [])) && !twig_in_filter($this->getAttribute($context["details"], "controller", []), ($context["done"] ?? null)))) {
                    // line 38
                    echo "        <li><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'index']) ?> </li>
        <li><?= \$this->Html->link(__('New ";
                    // line 39
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::singularize(Cake\Utility\Inflector::underscore($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'add']) ?> </li>
";
                    // line 40
                    $context["done"] = twig_array_merge(($context["done"] ?? null), [0 => "controller"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </ul>
</nav>
<div class=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " view large-9 medium-8 columns content\">
    <h3><?= h(\$";
        // line 47
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "->";
        echo twig_escape_filter($this->env, ($context["displayField"] ?? null), "html", null, true);
        echo ") ?></h3>
    <table class=\"vertical-table\">
";
        // line 49
        if ($this->getAttribute(($context["groupedFields"] ?? null), "string", [], "array")) {
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "string", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 51
                if ($this->getAttribute(($context["associationFields"] ?? null), $context["field"], [], "array")) {
                    // line 52
                    $context["details"] = $this->getAttribute(($context["associationFields"] ?? null), $context["field"], [], "array");
                    // line 53
                    echo "        <tr>
            <th scope=\"row\"><?= __('";
                    // line 54
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($this->getAttribute(($context["details"] ?? null), "property", [])), "html", null, true);
                    echo "') ?></th>
            <td><?= \$";
                    // line 55
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->has('";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "') ? \$this->Html->link(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "displayField", []), "html", null, true);
                    echo ", ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "controller", []), "html", null, true);
                    echo "', 'action' => 'view', \$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? null), "primaryKey", []), 0, [], "array"), "html", null, true);
                    echo "]) : '' ?></td>
        </tr>
";
                } else {
                    // line 58
                    echo "        <tr>
            <th scope=\"row\"><?= __('";
                    // line 59
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                    echo "') ?></th>
            <td><?= h(\$";
                    // line 60
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
        </tr>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 65
        if ($this->getAttribute(($context["associations"] ?? null), "HasOne", [])) {
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "HasOne", []));
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 67
                echo "        <tr>
            <th scope=\"row\"><?= __('";
                // line 68
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::singularize(Cake\Utility\Inflector::underscore($context["alias"]))), "html", null, true);
                echo "') ?></th>
            <td><?= \$";
                // line 69
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
        </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 73
        if ($this->getAttribute(($context["groupedFields"] ?? null), "number", [])) {
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "number", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 75
                echo "        <tr>
            <th scope=\"row\"><?= __('";
                // line 76
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
            <td><?= \$this->Number->format(\$";
                // line 77
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
        </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 81
        if ($this->getAttribute(($context["groupedFields"] ?? null), "date", [])) {
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "date", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 83
                echo "        <tr>
            <th scope=\"row\"><?= __('";
                // line 84
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
            <td><?= h(\$";
                // line 85
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
        </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 89
        if ($this->getAttribute(($context["groupedFields"] ?? null), "boolean", [])) {
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "boolean", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 91
                echo "        <tr>
            <th scope=\"row\"><?= __('";
                // line 92
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
            <td><?= \$";
                // line 93
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo " ? __('Yes') : __('No'); ?></td>
        </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 97
        echo "    </table>
";
        // line 98
        if ($this->getAttribute(($context["groupedFields"] ?? null), "text", [])) {
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "text", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 100
                echo "    <div class=\"row\">
        <h4><?= __('";
                // line 101
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></h4>
        <?= \$this->Text->autoParagraph(h(\$";
                // line 102
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ")); ?>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 106
        $context["relations"] = twig_array_merge($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", []), $this->getAttribute(($context["associations"] ?? null), "HasMany", []));
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relations"] ?? null));
        foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
            // line 108
            $context["otherSingularVar"] = Cake\Utility\Inflector::variable($context["alias"]);
            // line 109
            $context["otherPluralHumanName"] = Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($this->getAttribute($context["details"], "controller", [])));
            // line 110
            echo "    <div class=\"related\">
        <h4><?= __('Related ";
            // line 111
            echo twig_escape_filter($this->env, ($context["otherPluralHumanName"] ?? null), "html", null, true);
            echo "') ?></h4>
        <?php if (!empty(\$";
            // line 112
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
            echo ")): ?>
        <table cellpadding=\"0\" cellspacing=\"0\">
            <tr>
";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 116
                echo "                <th scope=\"col\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
            </tr>
            <?php foreach (\$";
            // line 120
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
            echo " as \$";
            echo twig_escape_filter($this->env, ($context["otherSingularVar"] ?? null), "html", null, true);
            echo "): ?>
            <tr>
";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 123
                echo "                <td><?= h(\$";
                echo twig_escape_filter($this->env, ($context["otherSingularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            $context["otherPk"] = ((("\$" . ($context["otherSingularVar"] ?? null)) . "->") . $this->getAttribute($this->getAttribute($context["details"], "primaryKey", []), 0, [], "array"));
            // line 126
            echo "                <td class=\"actions\">
                    <?= \$this->Html->link(__('View'), ['controller' => '";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'view', ";
            echo ($context["otherPk"] ?? null);
            echo "]) ?>
                    <?= \$this->Html->link(__('Edit'), ['controller' => '";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'edit', ";
            echo ($context["otherPk"] ?? null);
            echo "]) ?>
                    <?= \$this->Form->postLink(__('Delete'), ['controller' => '";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'delete', ";
            echo ($context["otherPk"] ?? null);
            echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
            echo ($context["otherPk"] ?? null);
            echo ")]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 137,  418 => 129,  412 => 128,  406 => 127,  403 => 126,  401 => 125,  390 => 123,  386 => 122,  377 => 120,  373 => 118,  364 => 116,  360 => 115,  352 => 112,  348 => 111,  345 => 110,  343 => 109,  341 => 108,  337 => 107,  335 => 106,  323 => 102,  319 => 101,  316 => 100,  312 => 99,  310 => 98,  307 => 97,  295 => 93,  291 => 92,  288 => 91,  284 => 90,  282 => 89,  270 => 85,  266 => 84,  263 => 83,  259 => 82,  257 => 81,  245 => 77,  241 => 76,  238 => 75,  234 => 74,  232 => 73,  206 => 69,  202 => 68,  199 => 67,  195 => 66,  193 => 65,  180 => 60,  176 => 59,  173 => 58,  151 => 55,  147 => 54,  144 => 53,  142 => 52,  140 => 51,  136 => 50,  134 => 49,  127 => 47,  123 => 46,  119 => 44,  108 => 40,  102 => 39,  95 => 38,  93 => 37,  89 => 36,  85 => 35,  83 => 34,  79 => 33,  75 => 32,  67 => 31,  61 => 30,  56 => 27,  54 => 26,  52 => 25,  50 => 24,  48 => 23,  46 => 22,  38 => 19,  34 => 18,  30 => 16,);
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
 * @var \\{{ entityClass }} \${{ singularVar }}
 */
?>
{% set associations = {'BelongsTo': [], 'HasOne': [], 'HasMany': [], 'BelongsToMany': []}|merge(associations) %}
{% set fieldsData = Bake.getViewFieldsData(fields, schema, associations) %}
{% set associationFields = fieldsData.associationFields %}
{% set groupedFields = fieldsData.groupedFields %}
{% set pK = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
<nav class=\"large-3 medium-4 columns\" id=\"actions-sidebar\">
    <ul class=\"side-nav\">
        <li class=\"heading\"><?= __('Actions') ?></li>
        <li><?= \$this->Html->link(__('Edit {{ singularHumanName }}'), ['action' => 'edit', {{ pK|raw }}]) ?> </li>
        <li><?= \$this->Form->postLink(__('Delete {{ singularHumanName }}'), ['action' => 'delete', {{ pK|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ pK|raw }})]) ?> </li>
        <li><?= \$this->Html->link(__('List {{ pluralHumanName }}'), ['action' => 'index']) ?> </li>
        <li><?= \$this->Html->link(__('New {{ singularHumanName }}'), ['action' => 'add']) ?> </li>
{% set done = [] %}
{% for type, data in associations %}
{% for alias, details in data %}
{% if details.controller is not same as(_view.name) and details.controller not in done %}
        <li><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index']) ?> </li>
        <li><?= \$this->Html->link(__('New {{ alias|underscore|singularize|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add']) ?> </li>
{% set done = done|merge(['controller']) %}
{% endif %}
{% endfor %}
{% endfor %}
    </ul>
</nav>
<div class=\"{{ pluralVar }} view large-9 medium-8 columns content\">
    <h3><?= h(\${{ singularVar }}->{{ displayField }}) ?></h3>
    <table class=\"vertical-table\">
{% if groupedFields['string'] %}
{% for field in groupedFields['string'] %}
{% if associationFields[field] %}
{% set details = associationFields[field] %}
        <tr>
            <th scope=\"row\"><?= __('{{ details.property|humanize }}') ?></th>
            <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
        </tr>
{% else %}
        <tr>
            <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
            <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
        </tr>
{% endif %}
{% endfor %}
{% endif %}
{% if associations.HasOne %}
{% for alias, details in associations.HasOne %}
        <tr>
            <th scope=\"row\"><?= __('{{ alias|underscore|singularize|humanize }}') ?></th>
            <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
        </tr>
{% endfor %}
{% endif %}
{% if groupedFields.number %}
{% for field in groupedFields.number %}
        <tr>
            <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
            <td><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></td>
        </tr>
{% endfor %}
{% endif %}
{% if groupedFields.date %}
{% for field in groupedFields.date %}
        <tr>
            <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
            <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
        </tr>
{% endfor %}
{% endif %}
{% if groupedFields.boolean %}
{% for field in groupedFields.boolean %}
        <tr>
            <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
            <td><?= \${{ singularVar }}->{{ field }} ? __('Yes') : __('No'); ?></td>
        </tr>
{% endfor %}
{% endif %}
    </table>
{% if groupedFields.text %}
{% for field in groupedFields.text %}
    <div class=\"row\">
        <h4><?= __('{{ field|humanize }}') ?></h4>
        <?= \$this->Text->autoParagraph(h(\${{ singularVar }}->{{ field }})); ?>
    </div>
{% endfor %}
{% endif %}
{% set relations = associations.BelongsToMany|merge(associations.HasMany) %}
{% for alias, details in relations %}
{% set otherSingularVar = alias|variable %}
{% set otherPluralHumanName = details.controller|underscore|humanize %}
    <div class=\"related\">
        <h4><?= __('Related {{ otherPluralHumanName }}') ?></h4>
        <?php if (!empty(\${{ singularVar }}->{{ details.property }})): ?>
        <table cellpadding=\"0\" cellspacing=\"0\">
            <tr>
{% for field in details.fields %}
                <th scope=\"col\"><?= __('{{ field|humanize }}') ?></th>
{% endfor %}
                <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
            </tr>
            <?php foreach (\${{ singularVar }}->{{ details.property }} as \${{ otherSingularVar }}): ?>
            <tr>
{% for field in details.fields %}
                <td><?= h(\${{ otherSingularVar }}->{{ field }}) ?></td>
{% endfor %}
{% set otherPk = '\$' ~ otherSingularVar ~ '->' ~ details.primaryKey[0] %}
                <td class=\"actions\">
                    <?= \$this->Html->link(__('View'), ['controller' => '{{ details.controller }}', 'action' => 'view', {{ otherPk|raw }}]) ?>
                    <?= \$this->Html->link(__('Edit'), ['controller' => '{{ details.controller }}', 'action' => 'edit', {{ otherPk|raw }}]) ?>
                    <?= \$this->Form->postLink(__('Delete'), ['controller' => '{{ details.controller }}', 'action' => 'delete', {{ otherPk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ otherPk|raw }})]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
{% endfor %}
</div>
", "/home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/view.twig", "/home/msareg6/public_html/my_apps/locus-space/vendor/cakephp/bake/src/Template/Bake//Template/view.twig");
    }
}
