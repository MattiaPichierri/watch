<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_12baa9292040878fc06a3db3ba69e3d72745154c82bf19ae816930bc8377ea69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_456632e7ee7d67e57ec652bb4d47f7fc5b68faf7135e0518028c0f19ff1818a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456632e7ee7d67e57ec652bb4d47f7fc5b68faf7135e0518028c0f19ff1818a2->enter($__internal_456632e7ee7d67e57ec652bb4d47f7fc5b68faf7135e0518028c0f19ff1818a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_456632e7ee7d67e57ec652bb4d47f7fc5b68faf7135e0518028c0f19ff1818a2->leave($__internal_456632e7ee7d67e57ec652bb4d47f7fc5b68faf7135e0518028c0f19ff1818a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_feb32e4eb5bcb7f306cad8bf14d146148b7f6ebf2764e56f62fed615d4072396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb32e4eb5bcb7f306cad8bf14d146148b7f6ebf2764e56f62fed615d4072396->enter($__internal_feb32e4eb5bcb7f306cad8bf14d146148b7f6ebf2764e56f62fed615d4072396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_feb32e4eb5bcb7f306cad8bf14d146148b7f6ebf2764e56f62fed615d4072396->leave($__internal_feb32e4eb5bcb7f306cad8bf14d146148b7f6ebf2764e56f62fed615d4072396_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9378d9a0e48e80e3b311be394369184f6239f48589486aaf941654f6221a6a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9378d9a0e48e80e3b311be394369184f6239f48589486aaf941654f6221a6a8b->enter($__internal_9378d9a0e48e80e3b311be394369184f6239f48589486aaf941654f6221a6a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9378d9a0e48e80e3b311be394369184f6239f48589486aaf941654f6221a6a8b->leave($__internal_9378d9a0e48e80e3b311be394369184f6239f48589486aaf941654f6221a6a8b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ea20c59033184b81d80cd02a3ad7da74703b3bffccbeb260b9bb776826c2161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea20c59033184b81d80cd02a3ad7da74703b3bffccbeb260b9bb776826c2161->enter($__internal_1ea20c59033184b81d80cd02a3ad7da74703b3bffccbeb260b9bb776826c2161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ea20c59033184b81d80cd02a3ad7da74703b3bffccbeb260b9bb776826c2161->leave($__internal_1ea20c59033184b81d80cd02a3ad7da74703b3bffccbeb260b9bb776826c2161_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\jms_watch\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
