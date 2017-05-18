<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_22995cdaedc06c628aa9fcb9cc0cebb19548fe2ade6571c06656e27d91d96369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22995cdaedc06c628aa9fcb9cc0cebb19548fe2ade6571c06656e27d91d96369->enter($__internal_22995cdaedc06c628aa9fcb9cc0cebb19548fe2ade6571c06656e27d91d96369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_87dc05dfba17eb472f1242c111fe856e9daa192e722407cfabe3ca5641576d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dc05dfba17eb472f1242c111fe856e9daa192e722407cfabe3ca5641576d64->enter($__internal_87dc05dfba17eb472f1242c111fe856e9daa192e722407cfabe3ca5641576d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22995cdaedc06c628aa9fcb9cc0cebb19548fe2ade6571c06656e27d91d96369->leave($__internal_22995cdaedc06c628aa9fcb9cc0cebb19548fe2ade6571c06656e27d91d96369_prof);

        
        $__internal_87dc05dfba17eb472f1242c111fe856e9daa192e722407cfabe3ca5641576d64->leave($__internal_87dc05dfba17eb472f1242c111fe856e9daa192e722407cfabe3ca5641576d64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6832a559ca6eb375fecf9f092b56c34994958066a4286118503e7875c98d2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6832a559ca6eb375fecf9f092b56c34994958066a4286118503e7875c98d2ba->enter($__internal_f6832a559ca6eb375fecf9f092b56c34994958066a4286118503e7875c98d2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a419cfefcb5604c4be3584f1b636e70f15f12441c076183c640f714860bcfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a419cfefcb5604c4be3584f1b636e70f15f12441c076183c640f714860bcfde->enter($__internal_7a419cfefcb5604c4be3584f1b636e70f15f12441c076183c640f714860bcfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7a419cfefcb5604c4be3584f1b636e70f15f12441c076183c640f714860bcfde->leave($__internal_7a419cfefcb5604c4be3584f1b636e70f15f12441c076183c640f714860bcfde_prof);

        
        $__internal_f6832a559ca6eb375fecf9f092b56c34994958066a4286118503e7875c98d2ba->leave($__internal_f6832a559ca6eb375fecf9f092b56c34994958066a4286118503e7875c98d2ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b487d426a9c9fac3bcb849d94ef84cea293e85074f821037c45495b0a4fadd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b487d426a9c9fac3bcb849d94ef84cea293e85074f821037c45495b0a4fadd66->enter($__internal_b487d426a9c9fac3bcb849d94ef84cea293e85074f821037c45495b0a4fadd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d413aaca50194ac4eeb3fde2cb82befb7f9302ce0e35c6b67580cba1b4d30d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d413aaca50194ac4eeb3fde2cb82befb7f9302ce0e35c6b67580cba1b4d30d02->enter($__internal_d413aaca50194ac4eeb3fde2cb82befb7f9302ce0e35c6b67580cba1b4d30d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d413aaca50194ac4eeb3fde2cb82befb7f9302ce0e35c6b67580cba1b4d30d02->leave($__internal_d413aaca50194ac4eeb3fde2cb82befb7f9302ce0e35c6b67580cba1b4d30d02_prof);

        
        $__internal_b487d426a9c9fac3bcb849d94ef84cea293e85074f821037c45495b0a4fadd66->leave($__internal_b487d426a9c9fac3bcb849d94ef84cea293e85074f821037c45495b0a4fadd66_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8dc12a91ac33e8642bad5397f673f55530bbe67dc7f09c0dad73898d7d6ed9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc12a91ac33e8642bad5397f673f55530bbe67dc7f09c0dad73898d7d6ed9e1->enter($__internal_8dc12a91ac33e8642bad5397f673f55530bbe67dc7f09c0dad73898d7d6ed9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9389cf4f94e9d28ec2f6ef5821c7347a00d7062c0c7b0eecf2497d2393a62251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9389cf4f94e9d28ec2f6ef5821c7347a00d7062c0c7b0eecf2497d2393a62251->enter($__internal_9389cf4f94e9d28ec2f6ef5821c7347a00d7062c0c7b0eecf2497d2393a62251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9389cf4f94e9d28ec2f6ef5821c7347a00d7062c0c7b0eecf2497d2393a62251->leave($__internal_9389cf4f94e9d28ec2f6ef5821c7347a00d7062c0c7b0eecf2497d2393a62251_prof);

        
        $__internal_8dc12a91ac33e8642bad5397f673f55530bbe67dc7f09c0dad73898d7d6ed9e1->leave($__internal_8dc12a91ac33e8642bad5397f673f55530bbe67dc7f09c0dad73898d7d6ed9e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
