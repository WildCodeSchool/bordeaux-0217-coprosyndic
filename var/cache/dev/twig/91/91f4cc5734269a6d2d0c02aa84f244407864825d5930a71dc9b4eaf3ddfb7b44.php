<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_3da734e135e11a5418d530dd389db4cf08b2a83c357f22e36d0efa22d413e2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da734e135e11a5418d530dd389db4cf08b2a83c357f22e36d0efa22d413e2fb->enter($__internal_3da734e135e11a5418d530dd389db4cf08b2a83c357f22e36d0efa22d413e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1faba0e600d93e4c8e5d97afd86bfc086c1a96f1890609a1b446c295a9f7db84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1faba0e600d93e4c8e5d97afd86bfc086c1a96f1890609a1b446c295a9f7db84->enter($__internal_1faba0e600d93e4c8e5d97afd86bfc086c1a96f1890609a1b446c295a9f7db84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da734e135e11a5418d530dd389db4cf08b2a83c357f22e36d0efa22d413e2fb->leave($__internal_3da734e135e11a5418d530dd389db4cf08b2a83c357f22e36d0efa22d413e2fb_prof);

        
        $__internal_1faba0e600d93e4c8e5d97afd86bfc086c1a96f1890609a1b446c295a9f7db84->leave($__internal_1faba0e600d93e4c8e5d97afd86bfc086c1a96f1890609a1b446c295a9f7db84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6c68416f34bd34233c17d21ebc9845bf6701d45394e242635ad344d6f5b8ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c68416f34bd34233c17d21ebc9845bf6701d45394e242635ad344d6f5b8ae2->enter($__internal_b6c68416f34bd34233c17d21ebc9845bf6701d45394e242635ad344d6f5b8ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ebf6feef5d02e8aee0951f18b9d314a7b8b0e1f55cd96bb251008473cb5b5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebf6feef5d02e8aee0951f18b9d314a7b8b0e1f55cd96bb251008473cb5b5bf->enter($__internal_5ebf6feef5d02e8aee0951f18b9d314a7b8b0e1f55cd96bb251008473cb5b5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ebf6feef5d02e8aee0951f18b9d314a7b8b0e1f55cd96bb251008473cb5b5bf->leave($__internal_5ebf6feef5d02e8aee0951f18b9d314a7b8b0e1f55cd96bb251008473cb5b5bf_prof);

        
        $__internal_b6c68416f34bd34233c17d21ebc9845bf6701d45394e242635ad344d6f5b8ae2->leave($__internal_b6c68416f34bd34233c17d21ebc9845bf6701d45394e242635ad344d6f5b8ae2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8f9480d6804cf42d547a2f8d4bdb2917470415d9e3a66c45c683ab35d68b6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f9480d6804cf42d547a2f8d4bdb2917470415d9e3a66c45c683ab35d68b6a4->enter($__internal_b8f9480d6804cf42d547a2f8d4bdb2917470415d9e3a66c45c683ab35d68b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_947620ab5332558b7967fecf4e89043b39df3a7694afe8498f3b9ecd82f460b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947620ab5332558b7967fecf4e89043b39df3a7694afe8498f3b9ecd82f460b6->enter($__internal_947620ab5332558b7967fecf4e89043b39df3a7694afe8498f3b9ecd82f460b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_947620ab5332558b7967fecf4e89043b39df3a7694afe8498f3b9ecd82f460b6->leave($__internal_947620ab5332558b7967fecf4e89043b39df3a7694afe8498f3b9ecd82f460b6_prof);

        
        $__internal_b8f9480d6804cf42d547a2f8d4bdb2917470415d9e3a66c45c683ab35d68b6a4->leave($__internal_b8f9480d6804cf42d547a2f8d4bdb2917470415d9e3a66c45c683ab35d68b6a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9468bf28571bc4240acf33e45a60e07d2642739ce290a0a5f634dfa42ad4939a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9468bf28571bc4240acf33e45a60e07d2642739ce290a0a5f634dfa42ad4939a->enter($__internal_9468bf28571bc4240acf33e45a60e07d2642739ce290a0a5f634dfa42ad4939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a9127adae4ae71dbd8863b618e6edd5bb235b73853dd61d082bb7eaf9ed685a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9127adae4ae71dbd8863b618e6edd5bb235b73853dd61d082bb7eaf9ed685a->enter($__internal_7a9127adae4ae71dbd8863b618e6edd5bb235b73853dd61d082bb7eaf9ed685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7a9127adae4ae71dbd8863b618e6edd5bb235b73853dd61d082bb7eaf9ed685a->leave($__internal_7a9127adae4ae71dbd8863b618e6edd5bb235b73853dd61d082bb7eaf9ed685a_prof);

        
        $__internal_9468bf28571bc4240acf33e45a60e07d2642739ce290a0a5f634dfa42ad4939a->leave($__internal_9468bf28571bc4240acf33e45a60e07d2642739ce290a0a5f634dfa42ad4939a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
