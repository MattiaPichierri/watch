<?php

/* PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig */
class __TwigTemplate_8abe3f4df82afc91a2cc111ee69f6a4c42be9372821b8adc591404034eee7d74 extends Twig_Template
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
        $__internal_8b297021c3d90392b0bbe07fe5b698cf602e971c96213a340dd65410e140e384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b297021c3d90392b0bbe07fe5b698cf602e971c96213a340dd65410e140e384->enter($__internal_8b297021c3d90392b0bbe07fe5b698cf602e971c96213a340dd65410e140e384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig"));

        // line 25
        if ($this->getAttribute(($context["attr"] ?? null), "counter", array(), "any", true, true)) {
            // line 26
            echo "  ";
            $context["isRecommandedType"] = ($this->getAttribute(($context["attr"] ?? null), "counter_type", array(), "any", true, true) && ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "counter_type", array()) == "recommended"));
            // line 27
            echo "  <span class=\"maxLength ";
            echo (( !($context["isRecommandedType"] ?? $this->getContext($context, "isRecommandedType"))) ? ("maxType") : (""));
            echo "\">
    ";
            // line 28
            if (($context["isRecommandedType"] ?? $this->getContext($context, "isRecommandedType"))) {
                // line 29
                echo "      ";
                echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . $this->getAttribute(                // line 32
($context["attr"] ?? $this->getContext($context, "attr")), "counter", array())), "[/2]" => "</span>"));
                // line 34
                echo "
    ";
            } else {
                // line 36
                echo "      ";
                echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters allowed", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . $this->getAttribute(                // line 39
($context["attr"] ?? $this->getContext($context, "attr")), "counter", array())), "[/2]" => "</span>"));
                // line 41
                echo "
    ";
            }
            // line 43
            echo "  </span>
";
        }
        
        $__internal_8b297021c3d90392b0bbe07fe5b698cf602e971c96213a340dd65410e140e384->leave($__internal_8b297021c3d90392b0bbe07fe5b698cf602e971c96213a340dd65410e140e384_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 43,  46 => 41,  44 => 39,  42 => 36,  38 => 34,  36 => 32,  34 => 29,  32 => 28,  27 => 27,  24 => 26,  22 => 25,);
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
{% if attr.counter is defined %}
  {% set isRecommandedType = attr.counter_type is defined and attr.counter_type == 'recommended' %}
  <span class=\"maxLength {{ not(isRecommandedType) ? 'maxType' }}\">
    {% if isRecommandedType %}
      {{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
        '[1]': '<span class=\"currentLength\">',
        '[/1]': '</span>',
        '[2]': '<span class=\"currentTotalMax\">'~attr.counter,
        '[/2]': '</span>',
      })|raw }}
    {% else %}
      {{ '[1][/1] of [2][/2] characters allowed'|trans({}, 'Admin.Catalog.Feature')|replace({
        '[1]': '<span class=\"currentLength\">',
        '[/1]': '</span>',
        '[2]': '<span class=\"currentTotalMax\">'~attr.counter,
        '[/2]': '</span>',
      })|raw }}
    {% endif %}
  </span>
{% endif %}
", "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_max_length.html.twig");
    }
}
