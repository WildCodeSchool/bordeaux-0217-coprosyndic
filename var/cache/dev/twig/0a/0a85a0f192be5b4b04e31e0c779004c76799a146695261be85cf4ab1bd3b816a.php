<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6d32ebef68d9c7e6b06f74a70fc58f9d7384661e7ee8c51930a7809b1deb94a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d32ebef68d9c7e6b06f74a70fc58f9d7384661e7ee8c51930a7809b1deb94a1->enter($__internal_6d32ebef68d9c7e6b06f74a70fc58f9d7384661e7ee8c51930a7809b1deb94a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d0dd0e898371fb64c32d01d3d11e4524cbb31bbaab10876ab19ca62a31475f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0dd0e898371fb64c32d01d3d11e4524cbb31bbaab10876ab19ca62a31475f49->enter($__internal_d0dd0e898371fb64c32d01d3d11e4524cbb31bbaab10876ab19ca62a31475f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d32ebef68d9c7e6b06f74a70fc58f9d7384661e7ee8c51930a7809b1deb94a1->leave($__internal_6d32ebef68d9c7e6b06f74a70fc58f9d7384661e7ee8c51930a7809b1deb94a1_prof);

        
        $__internal_d0dd0e898371fb64c32d01d3d11e4524cbb31bbaab10876ab19ca62a31475f49->leave($__internal_d0dd0e898371fb64c32d01d3d11e4524cbb31bbaab10876ab19ca62a31475f49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_afa71885ec9a3a8b2146bebcae9bf5434c5767712200f78a608f6bb178c446c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa71885ec9a3a8b2146bebcae9bf5434c5767712200f78a608f6bb178c446c1->enter($__internal_afa71885ec9a3a8b2146bebcae9bf5434c5767712200f78a608f6bb178c446c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_802bd18517df1e8869038c19074581cc186e5e9a24db3d058467ede31bdcf33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802bd18517df1e8869038c19074581cc186e5e9a24db3d058467ede31bdcf33b->enter($__internal_802bd18517df1e8869038c19074581cc186e5e9a24db3d058467ede31bdcf33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_802bd18517df1e8869038c19074581cc186e5e9a24db3d058467ede31bdcf33b->leave($__internal_802bd18517df1e8869038c19074581cc186e5e9a24db3d058467ede31bdcf33b_prof);

        
        $__internal_afa71885ec9a3a8b2146bebcae9bf5434c5767712200f78a608f6bb178c446c1->leave($__internal_afa71885ec9a3a8b2146bebcae9bf5434c5767712200f78a608f6bb178c446c1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a5f602755edad000ac18b4ca19a9916aec8f9a67254e88a9d6a417a4c38e6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5f602755edad000ac18b4ca19a9916aec8f9a67254e88a9d6a417a4c38e6aa->enter($__internal_9a5f602755edad000ac18b4ca19a9916aec8f9a67254e88a9d6a417a4c38e6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1e5e9b74bda868ae3bf85e846ffe1299b62b8a3a98af609c8ab6afa04e26ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e5e9b74bda868ae3bf85e846ffe1299b62b8a3a98af609c8ab6afa04e26ee0->enter($__internal_b1e5e9b74bda868ae3bf85e846ffe1299b62b8a3a98af609c8ab6afa04e26ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1e5e9b74bda868ae3bf85e846ffe1299b62b8a3a98af609c8ab6afa04e26ee0->leave($__internal_b1e5e9b74bda868ae3bf85e846ffe1299b62b8a3a98af609c8ab6afa04e26ee0_prof);

        
        $__internal_9a5f602755edad000ac18b4ca19a9916aec8f9a67254e88a9d6a417a4c38e6aa->leave($__internal_9a5f602755edad000ac18b4ca19a9916aec8f9a67254e88a9d6a417a4c38e6aa_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c97824e5cb69ee745e35c7a48d1d9caf11f0b29adcbcff76e6e207b4f10eeea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c97824e5cb69ee745e35c7a48d1d9caf11f0b29adcbcff76e6e207b4f10eeea->enter($__internal_1c97824e5cb69ee745e35c7a48d1d9caf11f0b29adcbcff76e6e207b4f10eeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14f38422a300cd146bc10824d72ee56ceffa7827a002304ea63124a42e148fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f38422a300cd146bc10824d72ee56ceffa7827a002304ea63124a42e148fe1->enter($__internal_14f38422a300cd146bc10824d72ee56ceffa7827a002304ea63124a42e148fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_14f38422a300cd146bc10824d72ee56ceffa7827a002304ea63124a42e148fe1->leave($__internal_14f38422a300cd146bc10824d72ee56ceffa7827a002304ea63124a42e148fe1_prof);

        
        $__internal_1c97824e5cb69ee745e35c7a48d1d9caf11f0b29adcbcff76e6e207b4f10eeea->leave($__internal_1c97824e5cb69ee745e35c7a48d1d9caf11f0b29adcbcff76e6e207b4f10eeea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
