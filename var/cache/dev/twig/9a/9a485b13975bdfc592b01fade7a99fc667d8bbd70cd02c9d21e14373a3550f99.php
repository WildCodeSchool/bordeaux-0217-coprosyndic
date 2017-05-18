<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a11c870edb26f3e06310be13089794eaa2a886f5f3f98a3fc83be38214bd33c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_b190585bfb180420fcfe60e88ea2d1895697efc8fed4a077978747fe57bfe512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b190585bfb180420fcfe60e88ea2d1895697efc8fed4a077978747fe57bfe512->enter($__internal_b190585bfb180420fcfe60e88ea2d1895697efc8fed4a077978747fe57bfe512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6063abe8e836c067f5cc7cea93238d0106f2c7f7678cc880d63be8795b1f7b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6063abe8e836c067f5cc7cea93238d0106f2c7f7678cc880d63be8795b1f7b6a->enter($__internal_6063abe8e836c067f5cc7cea93238d0106f2c7f7678cc880d63be8795b1f7b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b190585bfb180420fcfe60e88ea2d1895697efc8fed4a077978747fe57bfe512->leave($__internal_b190585bfb180420fcfe60e88ea2d1895697efc8fed4a077978747fe57bfe512_prof);

        
        $__internal_6063abe8e836c067f5cc7cea93238d0106f2c7f7678cc880d63be8795b1f7b6a->leave($__internal_6063abe8e836c067f5cc7cea93238d0106f2c7f7678cc880d63be8795b1f7b6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4db105cf59b8d8a99a7614b0a015326b551d8cb77a58984e9de7ad95f8881e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db105cf59b8d8a99a7614b0a015326b551d8cb77a58984e9de7ad95f8881e1f->enter($__internal_4db105cf59b8d8a99a7614b0a015326b551d8cb77a58984e9de7ad95f8881e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d11cff274ee06b1dfbe80e0aabdf51c4ebe7735429c6beb17abd2105db72f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d11cff274ee06b1dfbe80e0aabdf51c4ebe7735429c6beb17abd2105db72f2e->enter($__internal_6d11cff274ee06b1dfbe80e0aabdf51c4ebe7735429c6beb17abd2105db72f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6d11cff274ee06b1dfbe80e0aabdf51c4ebe7735429c6beb17abd2105db72f2e->leave($__internal_6d11cff274ee06b1dfbe80e0aabdf51c4ebe7735429c6beb17abd2105db72f2e_prof);

        
        $__internal_4db105cf59b8d8a99a7614b0a015326b551d8cb77a58984e9de7ad95f8881e1f->leave($__internal_4db105cf59b8d8a99a7614b0a015326b551d8cb77a58984e9de7ad95f8881e1f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
