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
        $__internal_f9c7e6bb7def82ba7b827480acc20cd93e5ad2abe7669f8b89e8686f72eb0921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c7e6bb7def82ba7b827480acc20cd93e5ad2abe7669f8b89e8686f72eb0921->enter($__internal_f9c7e6bb7def82ba7b827480acc20cd93e5ad2abe7669f8b89e8686f72eb0921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8667a361626ebd151cf7e2aeda28f22f2b38b441107f7a97625ee3b65220058d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8667a361626ebd151cf7e2aeda28f22f2b38b441107f7a97625ee3b65220058d->enter($__internal_8667a361626ebd151cf7e2aeda28f22f2b38b441107f7a97625ee3b65220058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9c7e6bb7def82ba7b827480acc20cd93e5ad2abe7669f8b89e8686f72eb0921->leave($__internal_f9c7e6bb7def82ba7b827480acc20cd93e5ad2abe7669f8b89e8686f72eb0921_prof);

        
        $__internal_8667a361626ebd151cf7e2aeda28f22f2b38b441107f7a97625ee3b65220058d->leave($__internal_8667a361626ebd151cf7e2aeda28f22f2b38b441107f7a97625ee3b65220058d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a9a570571bfcdc0218bdede05e958cf0b929a47cfa414eacf5e13c1dfda1911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9a570571bfcdc0218bdede05e958cf0b929a47cfa414eacf5e13c1dfda1911->enter($__internal_6a9a570571bfcdc0218bdede05e958cf0b929a47cfa414eacf5e13c1dfda1911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_436e517eac08d5892a34c337186971613a7fa55a1fbd0e2b2efc7e679ef52a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436e517eac08d5892a34c337186971613a7fa55a1fbd0e2b2efc7e679ef52a4c->enter($__internal_436e517eac08d5892a34c337186971613a7fa55a1fbd0e2b2efc7e679ef52a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_436e517eac08d5892a34c337186971613a7fa55a1fbd0e2b2efc7e679ef52a4c->leave($__internal_436e517eac08d5892a34c337186971613a7fa55a1fbd0e2b2efc7e679ef52a4c_prof);

        
        $__internal_6a9a570571bfcdc0218bdede05e958cf0b929a47cfa414eacf5e13c1dfda1911->leave($__internal_6a9a570571bfcdc0218bdede05e958cf0b929a47cfa414eacf5e13c1dfda1911_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_225e43b3e0dabd81825acd852df0a4f05b9862e31921b5733f8229def91c9921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225e43b3e0dabd81825acd852df0a4f05b9862e31921b5733f8229def91c9921->enter($__internal_225e43b3e0dabd81825acd852df0a4f05b9862e31921b5733f8229def91c9921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bb319b9569cd53eb3992ac609b279fa35166b2f210d313e92d1779dd392872f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb319b9569cd53eb3992ac609b279fa35166b2f210d313e92d1779dd392872f->enter($__internal_9bb319b9569cd53eb3992ac609b279fa35166b2f210d313e92d1779dd392872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9bb319b9569cd53eb3992ac609b279fa35166b2f210d313e92d1779dd392872f->leave($__internal_9bb319b9569cd53eb3992ac609b279fa35166b2f210d313e92d1779dd392872f_prof);

        
        $__internal_225e43b3e0dabd81825acd852df0a4f05b9862e31921b5733f8229def91c9921->leave($__internal_225e43b3e0dabd81825acd852df0a4f05b9862e31921b5733f8229def91c9921_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
