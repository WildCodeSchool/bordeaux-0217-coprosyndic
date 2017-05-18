<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b13b0fccfcf15b2ef04c635580a353ea5c6ec2d9577cb0ff668c8a5952c4f8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef7ad30df75aec6c9dbe73611b18aba4a604fe53f78e652e96517760433a729d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7ad30df75aec6c9dbe73611b18aba4a604fe53f78e652e96517760433a729d->enter($__internal_ef7ad30df75aec6c9dbe73611b18aba4a604fe53f78e652e96517760433a729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d2c7549025f0d0a21258082457b4346f27a614af998b1a46d39a1532770c8580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c7549025f0d0a21258082457b4346f27a614af998b1a46d39a1532770c8580->enter($__internal_d2c7549025f0d0a21258082457b4346f27a614af998b1a46d39a1532770c8580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7ad30df75aec6c9dbe73611b18aba4a604fe53f78e652e96517760433a729d->leave($__internal_ef7ad30df75aec6c9dbe73611b18aba4a604fe53f78e652e96517760433a729d_prof);

        
        $__internal_d2c7549025f0d0a21258082457b4346f27a614af998b1a46d39a1532770c8580->leave($__internal_d2c7549025f0d0a21258082457b4346f27a614af998b1a46d39a1532770c8580_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_247867965b9a1ddefb9dcc78df940f98e6281c6bfc2b570f1c07b3b0a18b91a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247867965b9a1ddefb9dcc78df940f98e6281c6bfc2b570f1c07b3b0a18b91a8->enter($__internal_247867965b9a1ddefb9dcc78df940f98e6281c6bfc2b570f1c07b3b0a18b91a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7d433a9ebbbf6bed3e31c43634a65700c332f40044847212ea93577e3821f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d433a9ebbbf6bed3e31c43634a65700c332f40044847212ea93577e3821f9d->enter($__internal_a7d433a9ebbbf6bed3e31c43634a65700c332f40044847212ea93577e3821f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a7d433a9ebbbf6bed3e31c43634a65700c332f40044847212ea93577e3821f9d->leave($__internal_a7d433a9ebbbf6bed3e31c43634a65700c332f40044847212ea93577e3821f9d_prof);

        
        $__internal_247867965b9a1ddefb9dcc78df940f98e6281c6bfc2b570f1c07b3b0a18b91a8->leave($__internal_247867965b9a1ddefb9dcc78df940f98e6281c6bfc2b570f1c07b3b0a18b91a8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5794e8cc440e0fc157a80e94aba4efc695bee60136910f5b2327f8b7b2c6dda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5794e8cc440e0fc157a80e94aba4efc695bee60136910f5b2327f8b7b2c6dda8->enter($__internal_5794e8cc440e0fc157a80e94aba4efc695bee60136910f5b2327f8b7b2c6dda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e98fbe847c3291cef5e3f5e570dfc8ca39f23459c8fa12287cfc4cf04b2d25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e98fbe847c3291cef5e3f5e570dfc8ca39f23459c8fa12287cfc4cf04b2d25e->enter($__internal_2e98fbe847c3291cef5e3f5e570dfc8ca39f23459c8fa12287cfc4cf04b2d25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2e98fbe847c3291cef5e3f5e570dfc8ca39f23459c8fa12287cfc4cf04b2d25e->leave($__internal_2e98fbe847c3291cef5e3f5e570dfc8ca39f23459c8fa12287cfc4cf04b2d25e_prof);

        
        $__internal_5794e8cc440e0fc157a80e94aba4efc695bee60136910f5b2327f8b7b2c6dda8->leave($__internal_5794e8cc440e0fc157a80e94aba4efc695bee60136910f5b2327f8b7b2c6dda8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
