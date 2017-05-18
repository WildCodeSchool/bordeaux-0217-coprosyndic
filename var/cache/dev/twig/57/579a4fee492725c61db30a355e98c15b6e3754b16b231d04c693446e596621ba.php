<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e6f630441f041f351e7bef8be3bbb4e464b03237c39ba9443400d49eac8635f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f630441f041f351e7bef8be3bbb4e464b03237c39ba9443400d49eac8635f0->enter($__internal_e6f630441f041f351e7bef8be3bbb4e464b03237c39ba9443400d49eac8635f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3787cfad0331b68f63623ceebefb849098c931cbe755c595b72e6a8f657b4c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3787cfad0331b68f63623ceebefb849098c931cbe755c595b72e6a8f657b4c6f->enter($__internal_3787cfad0331b68f63623ceebefb849098c931cbe755c595b72e6a8f657b4c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f630441f041f351e7bef8be3bbb4e464b03237c39ba9443400d49eac8635f0->leave($__internal_e6f630441f041f351e7bef8be3bbb4e464b03237c39ba9443400d49eac8635f0_prof);

        
        $__internal_3787cfad0331b68f63623ceebefb849098c931cbe755c595b72e6a8f657b4c6f->leave($__internal_3787cfad0331b68f63623ceebefb849098c931cbe755c595b72e6a8f657b4c6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_936c28bca6780b6cb1b1448c1bac5365f21387542e1b77ce2f70568e42faf699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936c28bca6780b6cb1b1448c1bac5365f21387542e1b77ce2f70568e42faf699->enter($__internal_936c28bca6780b6cb1b1448c1bac5365f21387542e1b77ce2f70568e42faf699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_09ae6b2a25b02043ce086528a65ea35390b7685edbe7e6dba4e8a17d881c3dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ae6b2a25b02043ce086528a65ea35390b7685edbe7e6dba4e8a17d881c3dbf->enter($__internal_09ae6b2a25b02043ce086528a65ea35390b7685edbe7e6dba4e8a17d881c3dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_09ae6b2a25b02043ce086528a65ea35390b7685edbe7e6dba4e8a17d881c3dbf->leave($__internal_09ae6b2a25b02043ce086528a65ea35390b7685edbe7e6dba4e8a17d881c3dbf_prof);

        
        $__internal_936c28bca6780b6cb1b1448c1bac5365f21387542e1b77ce2f70568e42faf699->leave($__internal_936c28bca6780b6cb1b1448c1bac5365f21387542e1b77ce2f70568e42faf699_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_758d29e9e0e09681db89d18b8cbe0b5a8a2efa1eccb979560ddfa115bcc4c155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758d29e9e0e09681db89d18b8cbe0b5a8a2efa1eccb979560ddfa115bcc4c155->enter($__internal_758d29e9e0e09681db89d18b8cbe0b5a8a2efa1eccb979560ddfa115bcc4c155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46de2405d9e145164f6eef07c0facd690dab73e5e36192546761a1f25be408be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46de2405d9e145164f6eef07c0facd690dab73e5e36192546761a1f25be408be->enter($__internal_46de2405d9e145164f6eef07c0facd690dab73e5e36192546761a1f25be408be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46de2405d9e145164f6eef07c0facd690dab73e5e36192546761a1f25be408be->leave($__internal_46de2405d9e145164f6eef07c0facd690dab73e5e36192546761a1f25be408be_prof);

        
        $__internal_758d29e9e0e09681db89d18b8cbe0b5a8a2efa1eccb979560ddfa115bcc4c155->leave($__internal_758d29e9e0e09681db89d18b8cbe0b5a8a2efa1eccb979560ddfa115bcc4c155_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fefdad0d318fafb44180f5db1148d91552bbd2073ec345546cd34a263f513ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fefdad0d318fafb44180f5db1148d91552bbd2073ec345546cd34a263f513ab->enter($__internal_3fefdad0d318fafb44180f5db1148d91552bbd2073ec345546cd34a263f513ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_167ae9d3525a6fc6cc21d1aaf3b54c2c11d822df7c29d3ce5862ada5e551c256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167ae9d3525a6fc6cc21d1aaf3b54c2c11d822df7c29d3ce5862ada5e551c256->enter($__internal_167ae9d3525a6fc6cc21d1aaf3b54c2c11d822df7c29d3ce5862ada5e551c256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_167ae9d3525a6fc6cc21d1aaf3b54c2c11d822df7c29d3ce5862ada5e551c256->leave($__internal_167ae9d3525a6fc6cc21d1aaf3b54c2c11d822df7c29d3ce5862ada5e551c256_prof);

        
        $__internal_3fefdad0d318fafb44180f5db1148d91552bbd2073ec345546cd34a263f513ab->leave($__internal_3fefdad0d318fafb44180f5db1148d91552bbd2073ec345546cd34a263f513ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
