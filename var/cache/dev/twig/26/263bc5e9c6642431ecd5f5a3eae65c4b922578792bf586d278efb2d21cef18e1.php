<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3426591c39ef1a3eb1648b07be1c44322ee58d8ead5cffcc457135ffa0738c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6317c173b3a75d0c449fa51c5357da898f532dc7623e5da70472156215bf0f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6317c173b3a75d0c449fa51c5357da898f532dc7623e5da70472156215bf0f40->enter($__internal_6317c173b3a75d0c449fa51c5357da898f532dc7623e5da70472156215bf0f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_894649168361117838e187f90798404bfb4558315cf694618b5b24e9240201cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894649168361117838e187f90798404bfb4558315cf694618b5b24e9240201cb->enter($__internal_894649168361117838e187f90798404bfb4558315cf694618b5b24e9240201cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6317c173b3a75d0c449fa51c5357da898f532dc7623e5da70472156215bf0f40->leave($__internal_6317c173b3a75d0c449fa51c5357da898f532dc7623e5da70472156215bf0f40_prof);

        
        $__internal_894649168361117838e187f90798404bfb4558315cf694618b5b24e9240201cb->leave($__internal_894649168361117838e187f90798404bfb4558315cf694618b5b24e9240201cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5db2dc54acbb761bd9fe0a03c47e1b2fa52c931d3e05b0cd938fa0d8d1a4ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5db2dc54acbb761bd9fe0a03c47e1b2fa52c931d3e05b0cd938fa0d8d1a4ad1->enter($__internal_f5db2dc54acbb761bd9fe0a03c47e1b2fa52c931d3e05b0cd938fa0d8d1a4ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9fa7dae15622697abd5e57ae5c0cb1708b86c68dfb4c184f8faf8ef20ae6a154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa7dae15622697abd5e57ae5c0cb1708b86c68dfb4c184f8faf8ef20ae6a154->enter($__internal_9fa7dae15622697abd5e57ae5c0cb1708b86c68dfb4c184f8faf8ef20ae6a154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9fa7dae15622697abd5e57ae5c0cb1708b86c68dfb4c184f8faf8ef20ae6a154->leave($__internal_9fa7dae15622697abd5e57ae5c0cb1708b86c68dfb4c184f8faf8ef20ae6a154_prof);

        
        $__internal_f5db2dc54acbb761bd9fe0a03c47e1b2fa52c931d3e05b0cd938fa0d8d1a4ad1->leave($__internal_f5db2dc54acbb761bd9fe0a03c47e1b2fa52c931d3e05b0cd938fa0d8d1a4ad1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
