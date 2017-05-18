<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9b3d75d9857ca5d728ae6d599c01aa3590042d29e32328d63ad27fd0088645ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0d5b62fd25cbecf2e6e5564f41c0b47f3dc63b38899f4d390bc210dd0bcfd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d5b62fd25cbecf2e6e5564f41c0b47f3dc63b38899f4d390bc210dd0bcfd81->enter($__internal_d0d5b62fd25cbecf2e6e5564f41c0b47f3dc63b38899f4d390bc210dd0bcfd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_301b0ac57034ee9e44343e7c14eab55511438fdcddede3e5e68b0b342037ac7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301b0ac57034ee9e44343e7c14eab55511438fdcddede3e5e68b0b342037ac7e->enter($__internal_301b0ac57034ee9e44343e7c14eab55511438fdcddede3e5e68b0b342037ac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d5b62fd25cbecf2e6e5564f41c0b47f3dc63b38899f4d390bc210dd0bcfd81->leave($__internal_d0d5b62fd25cbecf2e6e5564f41c0b47f3dc63b38899f4d390bc210dd0bcfd81_prof);

        
        $__internal_301b0ac57034ee9e44343e7c14eab55511438fdcddede3e5e68b0b342037ac7e->leave($__internal_301b0ac57034ee9e44343e7c14eab55511438fdcddede3e5e68b0b342037ac7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e62e869b9125740cbb2482f5ade76b6154e24ee4e5f6b5e5f2deda6421c5206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e62e869b9125740cbb2482f5ade76b6154e24ee4e5f6b5e5f2deda6421c5206->enter($__internal_0e62e869b9125740cbb2482f5ade76b6154e24ee4e5f6b5e5f2deda6421c5206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77cebe5bdb80d0a04d7bd7fa238bb4618a626c41df10a60beef598bc7cf0881e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cebe5bdb80d0a04d7bd7fa238bb4618a626c41df10a60beef598bc7cf0881e->enter($__internal_77cebe5bdb80d0a04d7bd7fa238bb4618a626c41df10a60beef598bc7cf0881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77cebe5bdb80d0a04d7bd7fa238bb4618a626c41df10a60beef598bc7cf0881e->leave($__internal_77cebe5bdb80d0a04d7bd7fa238bb4618a626c41df10a60beef598bc7cf0881e_prof);

        
        $__internal_0e62e869b9125740cbb2482f5ade76b6154e24ee4e5f6b5e5f2deda6421c5206->leave($__internal_0e62e869b9125740cbb2482f5ade76b6154e24ee4e5f6b5e5f2deda6421c5206_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_23e33f2b1b402ee98f38207334919ca24603957e727c3bb74f29def6d31ddced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e33f2b1b402ee98f38207334919ca24603957e727c3bb74f29def6d31ddced->enter($__internal_23e33f2b1b402ee98f38207334919ca24603957e727c3bb74f29def6d31ddced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dba8b804312d66076f6135474add027dd19574b2604bdef8a67c37cf9d43bd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba8b804312d66076f6135474add027dd19574b2604bdef8a67c37cf9d43bd9b->enter($__internal_dba8b804312d66076f6135474add027dd19574b2604bdef8a67c37cf9d43bd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dba8b804312d66076f6135474add027dd19574b2604bdef8a67c37cf9d43bd9b->leave($__internal_dba8b804312d66076f6135474add027dd19574b2604bdef8a67c37cf9d43bd9b_prof);

        
        $__internal_23e33f2b1b402ee98f38207334919ca24603957e727c3bb74f29def6d31ddced->leave($__internal_23e33f2b1b402ee98f38207334919ca24603957e727c3bb74f29def6d31ddced_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
