<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8cbc231491489bf670fe064b315df80a7d42a3cd6644f2c70b8a571b822c9594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbc231491489bf670fe064b315df80a7d42a3cd6644f2c70b8a571b822c9594->enter($__internal_8cbc231491489bf670fe064b315df80a7d42a3cd6644f2c70b8a571b822c9594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f5ed5f609a60e1b48d56ebf84cde388aef6b1867000690642e67fb646fc79520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ed5f609a60e1b48d56ebf84cde388aef6b1867000690642e67fb646fc79520->enter($__internal_f5ed5f609a60e1b48d56ebf84cde388aef6b1867000690642e67fb646fc79520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbc231491489bf670fe064b315df80a7d42a3cd6644f2c70b8a571b822c9594->leave($__internal_8cbc231491489bf670fe064b315df80a7d42a3cd6644f2c70b8a571b822c9594_prof);

        
        $__internal_f5ed5f609a60e1b48d56ebf84cde388aef6b1867000690642e67fb646fc79520->leave($__internal_f5ed5f609a60e1b48d56ebf84cde388aef6b1867000690642e67fb646fc79520_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a5a41809356a7bfdeb7cbddf583886578c63758cdf1764b2337c0aab7b33b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5a41809356a7bfdeb7cbddf583886578c63758cdf1764b2337c0aab7b33b37->enter($__internal_2a5a41809356a7bfdeb7cbddf583886578c63758cdf1764b2337c0aab7b33b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1ccc20390d407a7d7dc59c3155baef29913b7a61a2b8b8f0e14fd8f9a45c5b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccc20390d407a7d7dc59c3155baef29913b7a61a2b8b8f0e14fd8f9a45c5b45->enter($__internal_1ccc20390d407a7d7dc59c3155baef29913b7a61a2b8b8f0e14fd8f9a45c5b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1ccc20390d407a7d7dc59c3155baef29913b7a61a2b8b8f0e14fd8f9a45c5b45->leave($__internal_1ccc20390d407a7d7dc59c3155baef29913b7a61a2b8b8f0e14fd8f9a45c5b45_prof);

        
        $__internal_2a5a41809356a7bfdeb7cbddf583886578c63758cdf1764b2337c0aab7b33b37->leave($__internal_2a5a41809356a7bfdeb7cbddf583886578c63758cdf1764b2337c0aab7b33b37_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2e885148c3ae1134230d313880d0f83e429c7efcf6971232c7f1074b0a559e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e885148c3ae1134230d313880d0f83e429c7efcf6971232c7f1074b0a559e5->enter($__internal_b2e885148c3ae1134230d313880d0f83e429c7efcf6971232c7f1074b0a559e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d14744101a784049c87d6a6eb1ffa59236405f75f4f13a83f1251d73355b67a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14744101a784049c87d6a6eb1ffa59236405f75f4f13a83f1251d73355b67a9->enter($__internal_d14744101a784049c87d6a6eb1ffa59236405f75f4f13a83f1251d73355b67a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d14744101a784049c87d6a6eb1ffa59236405f75f4f13a83f1251d73355b67a9->leave($__internal_d14744101a784049c87d6a6eb1ffa59236405f75f4f13a83f1251d73355b67a9_prof);

        
        $__internal_b2e885148c3ae1134230d313880d0f83e429c7efcf6971232c7f1074b0a559e5->leave($__internal_b2e885148c3ae1134230d313880d0f83e429c7efcf6971232c7f1074b0a559e5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae09dd16c5999ec793b04183cfe1f01f812750afd340baaa2aea9cde022b0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae09dd16c5999ec793b04183cfe1f01f812750afd340baaa2aea9cde022b0a3->enter($__internal_1ae09dd16c5999ec793b04183cfe1f01f812750afd340baaa2aea9cde022b0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ac20863761cadc84d0d07cc20da6fdf5ddbdee2f9c34fec5e00b39fea935c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac20863761cadc84d0d07cc20da6fdf5ddbdee2f9c34fec5e00b39fea935c26->enter($__internal_7ac20863761cadc84d0d07cc20da6fdf5ddbdee2f9c34fec5e00b39fea935c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7ac20863761cadc84d0d07cc20da6fdf5ddbdee2f9c34fec5e00b39fea935c26->leave($__internal_7ac20863761cadc84d0d07cc20da6fdf5ddbdee2f9c34fec5e00b39fea935c26_prof);

        
        $__internal_1ae09dd16c5999ec793b04183cfe1f01f812750afd340baaa2aea9cde022b0a3->leave($__internal_1ae09dd16c5999ec793b04183cfe1f01f812750afd340baaa2aea9cde022b0a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
