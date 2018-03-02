<?php

/* PrestaShopBundle:Admin/Helpers:range_inputs.html.twig */
class __TwigTemplate_7626f4df8aca17439a5189106e4f2bdf39f109b016e82c98726530ebd877eb92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59cd9ce2789ae323239b8a810916ad9babcd6080cb2f8541982276bed9c80d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cd9ce2789ae323239b8a810916ad9babcd6080cb2f8541982276bed9c80d21->enter($__internal_59cd9ce2789ae323239b8a810916ad9babcd6080cb2f8541982276bed9c80d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:range_inputs.html.twig"));

        // line 25
        echo "<script>
    \$(document).ready(function() {
        var sliderInput = \$('#";
        // line 27
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "');
        var minInput = \$('#";
        // line 28
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "_min');
        var maxInput = \$('#";
        // line 29
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "_max');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
\t        value = value.replace('BETWEEN ', '');
\t        value = value.replace(' AND ', ',');
\t        value = value.replace('<=', '";
        // line 36
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ",');
\t        value = value.replace('>=', '";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ",');
\t        value = value.split(',');
\t        value[0] = Number(value[0]);
\t        value[1] = Number(value[1]);
        } else {
            value = [";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo "];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        // Init inputs
        if (value[0] > ";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ")
            minInput.val(value[0]);
        if (value[1] < ";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")
            maxInput.val(value[1]);

        // Change events
        var inputFlasher = function(input) {
            // animate input to highlight it (like a pulsate effect on jqueryUI)
            \$(input).stop().delay(100)
                    .fadeIn(100).fadeOut(100)
                    .queue(function() { \$(this).css(\"background-color\", \"#FF5555\").dequeue(); })
                    .fadeIn(160).fadeOut(160).fadeIn(160).fadeOut(160).fadeIn(160)
                    .animate({ backgroundColor: \"#FFFFFF\"}, 800);
        };
        var updater = function(srcElement) {
            var isMinModified = (srcElement.attr('id') == minInput.attr('id'));

            // retrieve values, replace ',' by '.', cast them into numbers (float/int)
            var newValues = [(minInput.val()!='')?Number(minInput.val().replace(',', '.')):";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ", (maxInput.val()!='')?Number(maxInput.val().replace(',', '.')):";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo "];

            // if newValues are out of bounds, or not valid, fix the element.
            if (isMinModified && !(newValues[0] >= ";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo " && newValues[0] <= ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")) {
                newValues[0] = ";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ";
                minInput.val('');
                inputFlasher(minInput);
            }
            if (!isMinModified && !(newValues[1] >= ";
        // line 75
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo " && newValues[1] <= ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")) {
                newValues[1] = ";
        // line 76
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ";
                maxInput.val('');
                inputFlasher(maxInput);
            }

            // if newValues are not ordered, fix the opposite input.
            if (isMinModified && newValues[0] > newValues[1]) {
                newValues[1] = newValues[0];
                maxInput.val(newValues[0]);
                inputFlasher(maxInput);
            }
            if (!isMinModified && newValues[0] > newValues[1]) {
                newValues[0] = newValues[1];
                minInput.val(newValues[0]);
                inputFlasher(minInput);
            }

            if (newValues[0] == ";
        // line 93
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo " && newValues[1] == ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '');
            } else if (newValues[0] == ";
        // line 95
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '<='+newValues[1]);
            } else if (newValues[1] == ";
        // line 97
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '>='+newValues[0]);
            } else {
                sliderInput.attr('sql', 'BETWEEN ' + newValues[0] + ' AND ' + newValues[1]);
            }

            ";
        // line 103
        if (array_key_exists("on_change_func_name", $context)) {
            // line 104
            echo "            var afterUpdate = function() {
                ";
            // line 105
            echo ($context["on_change_func_name"] ?? $this->getContext($context, "on_change_func_name"));
            echo "
            };
            afterUpdate();
            ";
        }
        // line 109
        echo "        }
        minInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
        maxInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
    });
</script>
<div id=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "_div\">
    <input type=\"hidden\" id=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "\" value=\"\" sql=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "_min\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("minLabel", $context)) ? (_twig_default_filter(($context["minLabel"] ?? $this->getContext($context, "minLabel")), "Min")) : ("Min")), "html", null, true);
        echo "\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "_max\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("maxLabel", $context)) ? (_twig_default_filter(($context["maxLabel"] ?? $this->getContext($context, "maxLabel")), "Max")) : ("Max")), "html", null, true);
        echo "\" />
</div>
";
        
        $__internal_59cd9ce2789ae323239b8a810916ad9babcd6080cb2f8541982276bed9c80d21->leave($__internal_59cd9ce2789ae323239b8a810916ad9babcd6080cb2f8541982276bed9c80d21_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Helpers:range_inputs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 121,  195 => 120,  187 => 119,  183 => 118,  172 => 109,  165 => 105,  162 => 104,  160 => 103,  151 => 97,  146 => 95,  139 => 93,  119 => 76,  113 => 75,  106 => 71,  100 => 70,  92 => 67,  73 => 51,  68 => 49,  56 => 42,  48 => 37,  44 => 36,  34 => 29,  30 => 28,  26 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<script>
    \$(document).ready(function() {
        var sliderInput = \$('#{{ input_name }}');
        var minInput = \$('#{{ input_name }}_min');
        var maxInput = \$('#{{ input_name }}_max');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
\t        value = value.replace('BETWEEN ', '');
\t        value = value.replace(' AND ', ',');
\t        value = value.replace('<=', '{{ min|default('0') }},');
\t        value = value.replace('>=', '{{ max|default('1000000000') }},');
\t        value = value.split(',');
\t        value[0] = Number(value[0]);
\t        value[1] = Number(value[1]);
        } else {
            value = [{{ min|default('0') }}, {{ max|default('1000000000') }}];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        // Init inputs
        if (value[0] > {{ min|default('0') }})
            minInput.val(value[0]);
        if (value[1] < {{ max|default('1000000000') }})
            maxInput.val(value[1]);

        // Change events
        var inputFlasher = function(input) {
            // animate input to highlight it (like a pulsate effect on jqueryUI)
            \$(input).stop().delay(100)
                    .fadeIn(100).fadeOut(100)
                    .queue(function() { \$(this).css(\"background-color\", \"#FF5555\").dequeue(); })
                    .fadeIn(160).fadeOut(160).fadeIn(160).fadeOut(160).fadeIn(160)
                    .animate({ backgroundColor: \"#FFFFFF\"}, 800);
        };
        var updater = function(srcElement) {
            var isMinModified = (srcElement.attr('id') == minInput.attr('id'));

            // retrieve values, replace ',' by '.', cast them into numbers (float/int)
            var newValues = [(minInput.val()!='')?Number(minInput.val().replace(',', '.')):{{ min|default('0') }}, (maxInput.val()!='')?Number(maxInput.val().replace(',', '.')):{{ max|default('1000000000') }}];

            // if newValues are out of bounds, or not valid, fix the element.
            if (isMinModified && !(newValues[0] >= {{ min|default('0') }} && newValues[0] <= {{ max|default('1000000000') }})) {
                newValues[0] = {{ min|default('0') }};
                minInput.val('');
                inputFlasher(minInput);
            }
            if (!isMinModified && !(newValues[1] >= {{ min|default('0') }} && newValues[1] <= {{ max|default('1000000000') }})) {
                newValues[1] = {{ max|default('1000000000') }};
                maxInput.val('');
                inputFlasher(maxInput);
            }

            // if newValues are not ordered, fix the opposite input.
            if (isMinModified && newValues[0] > newValues[1]) {
                newValues[1] = newValues[0];
                maxInput.val(newValues[0]);
                inputFlasher(maxInput);
            }
            if (!isMinModified && newValues[0] > newValues[1]) {
                newValues[0] = newValues[1];
                minInput.val(newValues[0]);
                inputFlasher(minInput);
            }

            if (newValues[0] == {{ min|default('0') }} && newValues[1] == {{ max|default('1000000000') }}) {
                sliderInput.attr('sql', '');
            } else if (newValues[0] == {{ min|default('0') }}) {
                sliderInput.attr('sql', '<='+newValues[1]);
            } else if (newValues[1] == {{ max|default('1000000000') }}) {
                sliderInput.attr('sql', '>='+newValues[0]);
            } else {
                sliderInput.attr('sql', 'BETWEEN ' + newValues[0] + ' AND ' + newValues[1]);
            }

            {% if on_change_func_name is defined %}
            var afterUpdate = function() {
                {{ on_change_func_name|raw }}
            };
            afterUpdate();
            {% endif %}
        }
        minInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
        maxInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
    });
</script>
<div id=\"{{ input_name }}_div\">
    <input type=\"hidden\" id=\"{{ input_name }}\" name=\"{{ input_name }}\" value=\"\" sql=\"{{ value }}\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"{{ input_name }}_min\" value=\"\" placeholder=\"{{ minLabel|default('Min') }}\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"{{ input_name }}_max\" value=\"\" placeholder=\"{{ maxLabel|default('Max') }}\" />
</div>
", "PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Helpers/range_inputs.html.twig");
    }
}
